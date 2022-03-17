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

    public function omicron()
    {
        //
        $gejala = Gejala::all()->whereBetween('kode', ['G001', 'G023']);

        return view('dashboard.gejala.omicron', compact('gejala'));
    }

    public function delta()
    {
        //
        $gejala = Gejala::all()->whereBetween('kode', ['G024', 'G039']);;

        return view('dashboard.gejala.delta', compact('gejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $gejala = new Gejala;
        $gejala->nama = Str::of($request->nama)->ucfirst();
        $gejala->save();

        if($gejala){
            return redirect()->route('gejala.index')->with('info', 'Gejala Telah ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $gejala = Gejala::find($id);

        return view('dashboard.gejala.index', compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $affected = DB::table('gejalas')
              ->where('id', $id)
              ->update(
                  ['nama' => Str::of($request->nama)->ucfirst(),
                  ]
                );

        if($affected){
            return redirect()->route('gejala.index')->with('info', 'Gejala Telah diupdate');
        }

        return redirect()->route('gejala.index')->with('info', 'Gejala Gagal diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
