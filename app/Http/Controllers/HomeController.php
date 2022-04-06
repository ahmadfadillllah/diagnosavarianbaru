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

    public function cekcontact()
    {
        $contact = Contact::all();
        return view('dashboard.contact.index', compact('contact'));
    }

    public function destroycontact($id)
    {
        //
        $contact = Contact::find($id);
        $contact->delete($contact);

        if($contact){
            return redirect()->route('cekcontact')->with('info', 'contact telah dihapus');
        }

        return redirect()->route('cekcontact')->with('info', 'contact Gagal dihapus');
    }
}
