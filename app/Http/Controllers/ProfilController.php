<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    //

    public function index()
    {
        return view('dashboard.profile');
    }

    public function deactive()
    {
        $affected = DB::table('users')
              ->where('id', Auth::user()->id)
              ->update(['status' => 'not active']);

        if($affected){
            return redirect('/')->with('info', 'Akun anda telah di nonaktifkan');
        }else{
            return redirect()->route('profil.index')->with('info', 'Akun anda gagal di nonaktifkan');
        }
    }
}
