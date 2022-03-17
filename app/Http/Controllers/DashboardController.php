<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use App\Models\User;

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
        $Konsultasi = Konsultasi::create([
            'name' => $request->name,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        if($Konsultasi){
            return redirect()->route('form')->with('info', 'Info anda telah masuk');
        }

        return redirect()->route('form')->with('info', 'Info anda gagal masuk');
    }

    public function gejala(Request $request, $id)
    {

    }


}
