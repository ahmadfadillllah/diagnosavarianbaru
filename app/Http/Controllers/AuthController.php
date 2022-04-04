<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //

    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $auth = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        $users = DB::table('users')->where('email',$request->email)->first();

        if(!$auth){
            return redirect()->route('login')->with('info', 'Email / Password salah');
        }

        if($users->status == 'not active'){
            return redirect()->route('login')->with('info', 'Akun Tidak Aktif');
        }

        return redirect()->route('dashboard.index');

    }

    public function register()
    {
        return view('auth.register');
    }

    public function postregister(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','min:6','confirmed'],
            ''
        ],[
            'name.required' => 'Nama Lengkap belum diisi!',
            'email.required' => 'Email belum diisi!',
            'email.unique' => 'Email sudah digunakan!',
            'password.required' => 'Password belum diisi!',
            'password.min' => 'Password minimal 6 karakter!',
            'password.confirmed' => 'Password tidak sama!',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->status = 'not active';
        $user->save();

        if($user){
            return redirect()->route('login')->with('info', 'Telah berhasil daftar, silahkan menghubungi admin untuk aktivasi akun');
        }else{
            return redirect()->route('register');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('info', 'Anda telah logout');
    }
}
