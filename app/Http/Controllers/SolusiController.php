<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Solusi;

class SolusiController extends Controller
{
    //
    public function index()
    {
        //
        $solusi = Solusi::all();

        return view('dashboard.solusi.index', compact('solusi'));
    }



    public function edit($id)
    {
        //
        $solusi = Solusi::find($id);

        return view('dashboard.solusi.index', compact('solusi'));
    }

    public function update(Request $request, $id)
    {

        $affected = DB::table('solusi')
              ->where('id', $id)
              ->update(
                  [
                      'kode' => $request->kode,
                      'id_klasifikasi' => $request->id_klasifikasi,
                      'solusi' => Str::headline($request->solusi),
                  ]
                );

        if($affected){
            return redirect()->route('solusi.index')->with('info', 'solusi Telah diupdate');
        }

        return redirect()->route('solusi.index')->with('info', 'solusi Gagal diupdate');
    }
}
