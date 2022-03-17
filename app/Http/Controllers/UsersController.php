<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Konsultasi;
use App\Models\Solusi;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Whoops\Run;

class UsersController extends Controller
{
    //Admin

    public function admin()
    {
        //

        $users = User::all()->where('role', 'admin');

        return view('dashboard.users.admin', compact('users'));
    }

    public function adminedit($id)
    {
        User::find($id);
    }

    public function adminupdate(Request $request ,$id)
    {
        //
        $affected = DB::table('users')
              ->where('id', $id)
              ->update(
                  [
                  'role' => $request->role,
                  'status' => $request->status,
                  ]
                );

        if($affected){
            return redirect()->route('users.admin')->with('info', 'User Telah diupdate');
        }

        return redirect()->route('users.admin')->with('info', 'User Gagal diupdate');
    }

    public function admindestroy($id)
    {

        $users = User::find($id);
        $users->delete($users);

        if($users){
            return redirect()->route('users.admin')->with('info', 'User telah dihapus');
        }

        return redirect()->route('users.admin')->with('info', 'User Gagal dihapus');
    }

    //Pakar

    public function pakar()
    {
        //

        $users = User::all()->where('role', 'pakar');

        return view('dashboard.users.pakar', compact('users'));
    }

    public function pakaredit($id)
    {
        User::find($id);
    }

    public function pakarupdate(Request $request ,$id)
    {
        //
        $affected = DB::table('users')
              ->where('id', $id)
              ->update(
                  [
                  'role' => $request->role,
                  'status' => $request->status,
                  ]
                );

        if($affected){
            return redirect()->route('users.pakar')->with('info', 'User Telah diupdate');
        }

        return redirect()->route('users.pakar')->with('info', 'User Gagal diupdate');
    }

    public function pakardestroy($id)
    {

        $users = User::find($id);
        $users->delete($users);

        if($users){
            return redirect()->route('users.pakar')->with('info', 'User telah dihapus');
        }

        return redirect()->route('users.pakar')->with('info', 'User Gagal dihapus');
    }

    //User Konsultasi

    public function konsultasi()
    {
        //

        $users = Konsultasi::all();

        return view('dashboard.users.konsultasi', compact('users'));
    }

    public function konsultasiproses($id)
    {
        $users = Konsultasi::find($id);
        $gejala = Gejala::all();
        return view('dashboard.users.proseskonsultasi', ['users' => $users, 'gejala' => $gejala]);
    }

    public function konsultasicek($id, Request $request)
    {
        $users = Konsultasi::find($id);
        $solusi = Solusi::all();

        return redirect()->route('users.konsultasi')->with('info', 'Hasil Diagnosa Penyakit');
    }

    public function konsultasidestroy($id)
    {

        $users = Konsultasi::find($id);
        $users->delete($users);

        if($users){
            return redirect()->route('users.konsultasi')->with('info', 'User telah dihapus');
        }

        return redirect()->route('users.konsultasi')->with('info', 'User Gagal dihapus');
    }

}
