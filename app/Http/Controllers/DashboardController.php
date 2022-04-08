<?php

namespace App\Http\Controllers;

use App\Models\CheckKonsultasi;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gejala;
use App\Models\Result;
use App\Models\Solusi;
use Illuminate\Suppandt\Facades\DB;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $konsultasi = Konsultasi::all();
        $pakar = User::all()->where('role', 'pakar')->count();
        $totalkonsul = Konsultasi::all()->count();

        return view('dashboard.index', compact('konsultasi', 'pakar', 'totalkonsul'));
    }

    public function form()
    {
        return view('home.form');
    }

    public function postform(Request $request)
    {

        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

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
        $gejala = $request->daftargejala;
        // dd($gejala);

        $konsultasi = Konsultasi::find($id);
        if(
            in_array('G001', $request->daftargejala) and
            in_array('G002', $request->daftargejala) and
            in_array('G008', $request->daftargejala) and
            in_array('G029', $request->daftargejala) and
            in_array('G004', $request->daftargejala) and
            in_array('G014', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G007', $request->daftargejala) and
            in_array('G003', $request->daftargejala) and
            in_array('G004', $request->daftargejala) and
            in_array('G008', $request->daftargejala) and
            in_array('G002', $request->daftargejala) and
            in_array('G017', $request->daftargejala) and
            in_array('G010', $request->daftargejala) and
            in_array('G009', $request->daftargejala) and
            in_array('G029', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G026', $request->daftargejala) and
            in_array('G004', $request->daftargejala) and
            in_array('G001', $request->daftargejala) and
            in_array('G008', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G005', $request->daftargejala) and
            in_array('G004', $request->daftargejala) and
            in_array('G008', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G011', $request->daftargejala) and
            in_array('G012', $request->daftargejala) and
            in_array('G013', $request->daftargejala) and
            in_array('G005', $request->daftargejala) and
            in_array('G007', $request->daftargejala) and
            in_array('G010', $request->daftargejala) and
            in_array('G017', $request->daftargejala) and
            in_array('G016', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G002', $request->daftargejala) and
            in_array('G025', $request->daftargejala) and
            in_array('G012', $request->daftargejala) and
            in_array('G008', $request->daftargejala) and
            in_array('G004', $request->daftargejala) and
            in_array('G006', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G029', $request->daftargejala) and
            in_array('G013', $request->daftargejala) and
            in_array('G028', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G002', $request->daftargejala) and
            in_array('G005', $request->daftargejala) and
            in_array('G006', $request->daftargejala) and
            in_array('G004', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G005', $request->daftargejala) and
            in_array('G018', $request->daftargejala) and
            in_array('G023', $request->daftargejala) and
            in_array('G015', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G002', $request->daftargejala) and
            in_array('G003', $request->daftargejala) and
            in_array('G004', $request->daftargejala) and
            in_array('G005', $request->daftargejala) and
            in_array('G006', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G003', $request->daftargejala) and
            in_array('G004', $request->daftargejala) and
            in_array('G013', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G005', $request->daftargejala) and
            in_array('G011', $request->daftargejala) and
            in_array('G029', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G018', $request->daftargejala) and
            in_array('G023', $request->daftargejala) and
            in_array('G027', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G005', $request->daftargejala) and
            in_array('G002', $request->daftargejala) and
            in_array('G027', $request->daftargejala) and
            in_array('G018', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G003', $request->daftargejala) and
            in_array('G004', $request->daftargejala) and
            in_array('G008', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G005', $request->daftargejala) and
            in_array('G008', $request->daftargejala) and
            in_array('G013', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G011', $request->daftargejala) and
            in_array('G013', $request->daftargejala) and
            in_array('G015', $request->daftargejala) and
            in_array('G017', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G005', $request->daftargejala) and
            in_array('G008', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G005', $request->daftargejala) and
            in_array('G006', $request->daftargejala) and
            in_array('G008', $request->daftargejala) and
            in_array('G014', $request->daftargejala) and
            in_array('G025', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G026', $request->daftargejala) and
            in_array('G023', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G004', $request->daftargejala) and
            in_array('G015', $request->daftargejala) and
            in_array('G029', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G003', $request->daftargejala) and
            in_array('G012', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G008', $request->daftargejala) and
            in_array('G017', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G005', $request->daftargejala) and
            in_array('G006', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G005', $request->daftargejala) and
            in_array('G011', $request->daftargejala) and
            in_array('G013', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G003', $request->daftargejala) and
            in_array('G013', $request->daftargejala) and
            in_array('G029', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G004', $request->daftargejala) and
            in_array('G007', $request->daftargejala) and
            in_array('G012', $request->daftargejala) and
            in_array('G029', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G004', $request->daftargejala) and
            in_array('G009', $request->daftargejala) and
            in_array('G013', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G008', $request->daftargejala) and
            in_array('G002', $request->daftargejala) and
            in_array('G004', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G002', $request->daftargejala) and
            in_array('G004', $request->daftargejala) and
            in_array('G006', $request->daftargejala) and
            in_array('G008', $request->daftargejala) and
            in_array('G012', $request->daftargejala) and
            in_array('G025', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G025', $request->daftargejala) and
            in_array('G004', $request->daftargejala) and
            in_array('G008', $request->daftargejala) and
            in_array('G012', $request->daftargejala) and
            in_array('G006', $request->daftargejala) and
            in_array('G026', $request->daftargejala) and
            in_array('G027', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G002', $request->daftargejala) and
            in_array('G005', $request->daftargejala) and
            in_array('G012', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S001');
            $keparahan = Solusi::where('id_klasifikasi')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G011', $request->daftargejala) and
            in_array('G012', $request->daftargejala) and
            in_array('G013', $request->daftargejala) and
            in_array('G029', $request->daftargejala) and
            in_array('G009', $request->daftargejala) and
            in_array('G008', $request->daftargejala) and
            in_array('G005', $request->daftargejala) and
            in_array('G007', $request->daftargejala) and
            in_array('G010', $request->daftargejala) and
            in_array('G017', $request->daftargejala) and
            in_array('G016', $request->daftargejala) and
            in_array('G019', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S002');
            $keparahan = Solusi::join('klasifikasi', 'solusi.id_klasifikasi', '=', 'klasifikasi.kode')
            ->where('id_klasifikasi','D002')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G002', $request->daftargejala) and
            in_array('G019', $request->daftargejala) and
            in_array('G028', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S002');
            $keparahan = Solusi::join('klasifikasi', 'solusi.id_klasifikasi', '=', 'klasifikasi.kode')
            ->where('id_klasifikasi','D002')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G002', $request->daftargejala) and
            in_array('G019', $request->daftargejala) and
            in_array('G020', $request->daftargejala) and
            in_array('G021', $request->daftargejala) and
            in_array('G026', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S002');
            $keparahan = Solusi::join('klasifikasi', 'solusi.id_klasifikasi', '=', 'klasifikasi.kode')
            ->where('id_klasifikasi','D002')->first();


        }

        if(
            in_array('G022', $request->daftargejala) and
            in_array('G011', $request->daftargejala) and
            in_array('G019', $request->daftargejala) and
            in_array('G024', $request->daftargejala) and
            in_array('G026', $request->daftargejala) and
            in_array('G028', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S003');
            $keparahan = Solusi::join('klasifikasi', 'solusi.id_klasifikasi', '=', 'klasifikasi.kode')
            ->where('id_klasifikasi','D003')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G019', $request->daftargejala) and
            in_array('G028', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S003');
            $keparahan = Solusi::join('klasifikasi', 'solusi.id_klasifikasi', '=', 'klasifikasi.kode')
            ->where('id_klasifikasi','D003')->first();


        }

        if(
            in_array('G001', $request->daftargejala) and
            in_array('G011', $request->daftargejala) and
            in_array('G012', $request->daftargejala) and
            in_array('G013', $request->daftargejala) and
            in_array('G029', $request->daftargejala) and
            in_array('G009', $request->daftargejala) and
            in_array('G008', $request->daftargejala) and
            in_array('G005', $request->daftargejala) and
            in_array('G007', $request->daftargejala) and
            in_array('G010', $request->daftargejala) and
            in_array('G017', $request->daftargejala) and
            in_array('G016', $request->daftargejala) and
            in_array('G019', $request->daftargejala) and
            in_array('G028', $request->daftargejala)
        ){

            $keterangan = Solusi::all()->where('kode', 'S003');
            $keparahan = Solusi::join('klasifikasi', 'solusi.id_klasifikasi', '=', 'klasifikasi.kode')
            ->where('id_klasifikasi','D003')->first();

        }

        // else{
        //     return redirect()->route('form.gejala', $id)->with('info', 'Solusi / Kesimpulan tidak dapat diketuhui');
        // }

        $result = new Result;
        $result->id_konsultasi = $id;
        $result->save();

        return view('home.solusi', compact('keterangan', 'konsultasi', 'keparahan', 'gejala'));

    }


}
