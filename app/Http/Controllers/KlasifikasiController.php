<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klasifikasi;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class KlasifikasiController extends Controller
{
    //

    public function index()
    {
        //
        $klasifikasi = Klasifikasi::all();

        return view('dashboard.klasifikasi.index', compact('klasifikasi'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'kode' => 'required|unique:klasifikasi',
            'klasifikasi' => 'required',
        ]);

        $klasifikasi = new Klasifikasi;
        $klasifikasi->kode = $request->kode;
        $klasifikasi->klasifikasi = Str::headline($request->klasifikasi);
        $klasifikasi->save();

        if($klasifikasi){
            return redirect()->route('klasifikasi.index')->with('info', 'klasifikasi Telah ditambahkan');
        }

    }

    public function edit($id)
    {
        //
        $klasifikasi = Klasifikasi::find($id);

        return view('dashboard.klasifikasi.index', compact('klasifikasi'));
    }

    public function update(Request $request, $id)
    {

        $affected = DB::table('klasifikasi')
              ->where('id', $id)
              ->update(
                  ['klasifikasi' => Str::headline($request->klasifikasi),
                  ]
                );

        if($affected){
            return redirect()->route('klasifikasi.index')->with('info', 'klasifikasi Telah diupdate');
        }

        return redirect()->route('klasifikasi.index')->with('info', 'klasifikasi Gagal diupdate');
    }
}
