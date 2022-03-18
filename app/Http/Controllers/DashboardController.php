<?php

namespace App\Http\Controllers;

use App\Models\CheckKonsultasi;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gejala;
use App\Models\Solusi;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function index()
    {

        return view('dashboard.index');
    }

    public function form()
    {
        return view('home.form');
    }

    public function postform(Request $request)
    {

        $konsultasi = Konsultasi::create([
            'name' => $request->name,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        Gejala::all();

        if($konsultasi){
            return redirect()->route('form.gejala',$konsultasi->id)->with('info', 'Info anda telah masuk, silahkan memilih gejala');
        }

        return redirect()->route('form')->with('info', 'Info anda gagal masuk');
    }

    public function gejala(Request $request, $id)
    {

        $konsultasi = Konsultasi::find($id);
        $gejala = Gejala::all();

        return view('home.gejala', compact('konsultasi', 'gejala'));

    }

    public function konsultasicek(Request $request, $id)
    {

        $konsultasi = Konsultasi::find($id);

        // dd($konsultasi);
        // $result = DB::table('check_konsultasis')
        // ->join('konsultasis', 'check_konsultasis.id_konsultasi', '=', 'konsultasis.id')
        // ->join('gejalas', 'check_konsultasis.id_gejala', '=', 'gejalas.id')
        // ->join('solusis', 'check_konsultasis.id_solusi', '=', 'solusis.id')
        // ->get();

        // dd($result);


        if(
            in_array('G001', $request->daftargejala) &&
            in_array('G007', $request->daftargejala) &&
            in_array('G009', $request->daftargejala) &&
            in_array('G010', $request->daftargejala) &&
            in_array('G014', $request->daftargejala) &&
            in_array('G022', $request->daftargejala) &&
            in_array('G023', $request->daftargejala) &&
            in_array('G025', $request->daftargejala) &&
            in_array('G038', $request->daftargejala)
        ){
            $keterangan = DB::table('solusis')
            ->select('solusi')->where('kode', 'S001')
            ->first();

            return view('home.solusi', compact(
                'keterangan',
                'konsultasi'));
        }

        if(
            in_array('G007', $request->daftargejala) &&
            in_array('G009', $request->daftargejala) &&
            in_array('G010', $request->daftargejala) &&
            in_array('G011', $request->daftargejala) &&
            in_array('G018', $request->daftargejala)
        ){
            $keterangan = DB::table('solusis')
            ->select('solusi')->where('kode', 'S002')
            ->first();

            return view('home.solusi', compact(
                'keterangan',
                'konsultasi'));
        }

        if(
            in_array('G003', $request->daftargejala) &&
            in_array('G004', $request->daftargejala) &&
            in_array('G012', $request->daftargejala) &&
            in_array('G017', $request->daftargejala) &&
            in_array('G018', $request->daftargejala) &&
            in_array('G016', $request->daftargejala) &&
            in_array('G020', $request->daftargejala) &&
            in_array('G034', $request->daftargejala)
        ){
            $keterangan = DB::table('solusis')
            ->select('solusi')->where('kode', 'S003')
            ->first();

            return view('home.solusi', compact(
                'keterangan',
                'konsultasi'));
        }

        if(
            in_array('G006', $request->daftargejala) &&
            in_array('G013', $request->daftargejala) &&
            in_array('G015', $request->daftargejala) &&
            in_array('G016', $request->daftargejala)
        ){
            $keterangan = DB::table('solusis')
            ->select('solusi')->where('kode', 'S004')
            ->first();

            return view('home.solusi', compact(
                'keterangan',
                'konsultasi'));
        }

        if(

            in_array('G010', $request->daftargejala) &&
            in_array('G013', $request->daftargejala) &&
            in_array('G016', $request->daftargejala)
        ){
            $keterangan = DB::table('solusis')
            ->select('solusi')->where('kode', 'S005')
            ->first();

            return view('home.solusi', compact(
                'keterangan',
                'konsultasi'));
        }

        if(
            in_array('G001', $request->daftargejala) &&
            in_array('G039', $request->daftargejala)
        ){
            // $gejala1 = DB::table('gejalas')->select('nama')->where('kode', 'G001')->first();
            // $gejala2 = DB::table('gejalas')->select('nama')->where('kode', 'G039')->first();

            $keterangan = DB::table('solusis')
            ->select('solusi')->where('kode', 'S006')
            ->first();

            return view('home.solusi', compact(
                'keterangan',
                'konsultasi'));
        }

        return redirect()->route('users.konsultasi')->with('info', 'Solusi tidak dapat diketahui');

    }


}
