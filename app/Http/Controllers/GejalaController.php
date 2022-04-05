<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gejala = Gejala::all();

        return view('dashboard.gejala.index', compact('gejala'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'kode' => 'required|unique:gejala',
            'gejala' => 'required',
        ]);

        $gejala = new Gejala;
        $gejala->kode = $request->kode;
        $gejala->nama = Str::headline($request->nama);
        $gejala->save();

        if($gejala){
            return redirect()->route('gejala.index')->with('info', 'Gejala Telah ditambahkan');
        }

    }


    public function edit($id)
    {
        //
        $gejala = Gejala::find($id);

        return view('dashboard.gejala.index', compact('gejala'));
    }

    public function update(Request $request, $id)
    {

        $affected = DB::table('gejala')
              ->where('id', $id)
              ->update(
                  ['nama' => Str::headline($request->nama),
                  ]
                );

        if($affected){
            return redirect()->route('gejala.index')->with('info', 'Gejala Telah diupdate');
        }

        return redirect()->route('gejala.index')->with('info', 'Gejala Gagal diupdate');
    }

    public function destroy($id)
    {
        //
        $gejala = Gejala::find($id);
        $gejala->delete($gejala);

        if($gejala){
            return redirect()->route('gejala.index')->with('info', 'Gejala telah dihapus');
        }

        return redirect()->route('gejala.index')->with('info', 'Gejala Gagal dihapus');
    }
}
