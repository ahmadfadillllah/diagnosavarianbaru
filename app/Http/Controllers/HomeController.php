<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Gejala;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function contact()
    {
        return view('home.contact');
    }

    public function postcontact(Request $request)
    {
        $query = Contact::create($request->all());
        if($query){
            return redirect()->route('contact')->with('notif', 'Pesan Anda telah kami rekap');
        }else{
            return redirect()->route('contact')->with('notif', 'Pesan Anda gagal kami rekap');
        }
    }

    public function gejala()
    {
        $gejala = Gejala::all();

        return view('home.viewgejala', compact('gejala'));
    }
}
