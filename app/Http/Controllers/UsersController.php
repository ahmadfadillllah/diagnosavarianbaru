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
        $users = User::find($id);
        return view('dashboard.users.pakar', compact('users'));
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

    public function konsultasicek(Request $request)
    {

        if(
            $gejala = in_array('G001', $request->daftargejala) &&
            in_array('G007', $request->daftargejala) &&
            in_array('G009', $request->daftargejala) &&
            in_array('G010', $request->daftargejala) &&
            in_array('G014', $request->daftargejala) &&
            in_array('G022', $request->daftargejala) &&
            in_array('G023', $request->daftargejala) &&
            in_array('G025', $request->daftargejala) &&
            in_array('G038', $request->daftargejala)
        ){
            $keterangan = $users = DB::table('solusis')
            ->select('solusi')->where('kode', 'S001')
            ->first();

            return view('dashboard.users.solusi', ['keterangan' => $keterangan, 'gejala' => $gejala]);
        }

        if(
            $gejala = in_array('G007', $request->daftargejala) &&
            in_array('G009', $request->daftargejala) &&
            in_array('G010', $request->daftargejala) &&
            in_array('G011', $request->daftargejala) &&
            in_array('G018', $request->daftargejala)
        ){
            $keterangan = $users = DB::table('solusis')
            ->select('solusi')->where('kode', 'S002')
            ->first();

            return view('dashboard.users.solusi', ['keterangan' => $keterangan, 'gejala' => $gejala]);
        }

        if(
            $gejala = in_array('G003', $request->daftargejala) &&
            in_array('G004', $request->daftargejala) &&
            in_array('G012', $request->daftargejala) &&
            in_array('G017', $request->daftargejala) &&
            in_array('G018', $request->daftargejala) &&
            in_array('G016', $request->daftargejala) &&
            in_array('G020', $request->daftargejala) &&
            in_array('G034', $request->daftargejala)
        ){
            $keterangan = $users = DB::table('solusis')
            ->select('solusi')->where('kode', 'S003')
            ->first();

            return view('dashboard.users.solusi', ['keterangan' => $keterangan, 'gejala' => $gejala]);
        }

        if(
            $gejala = in_array('G006', $request->daftargejala) &&
            in_array('G013', $request->daftargejala) &&
            in_array('G015', $request->daftargejala) &&
            in_array('G016', $request->daftargejala)
        ){
            $keterangan = $users = DB::table('solusis')
            ->select('solusi')->where('kode', 'S004')
            ->first();

            return view('dashboard.users.solusi', ['keterangan' => $keterangan, 'gejala' => $gejala]);
        }

        if(

            $gejala = in_array('G010', $request->daftargejala) &&
            in_array('G013', $request->daftargejala) &&
            in_array('G016', $request->daftargejala)
        ){
            $keterangan = $users = DB::table('solusis')
            ->select('solusi')->where('kode', 'S005')
            ->first();

            return view('dashboard.users.solusi', ['keterangan' => $keterangan, 'gejala' => $gejala]);
        }

        if(
            $gejala = in_array('G001', $request->daftargejala) &&
            in_array('G039', $request->daftargejala)
        ){
            $keterangan = $users = DB::table('solusis')
            ->select('solusi')->where('kode', 'S006')
            ->first();

            return view('dashboard.users.solusi', ['keterangan' => $keterangan, 'gejala' => $gejala]);
        }

        return redirect()->route('users.konsultasi')->with('info', 'Solusi tidak dapat diketahui');

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
