<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Kritik;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            "title" => "Home",
            "css" => "/css/manual/index.css"
        ]);
    }

    public function profil()
    {
        return view('profil', [
            "title" => "Profil",
            "css" => "/css/manual/profil.css"
        ]);
    }

    public function client()
    {
        return view('client', [
            "title" => "Client",
            "css" => "/css/manual/client.css"
            //"client" => Client::all()
        ]);
    }

    public function contact()
    {
        return view('contact', [
            "title" => "Contact",
            "css" => "/css/manual/contact.css"
        ]);
    }

    public function kritik(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required|max:255',
            'penulis' => 'required',
            'email' => 'required',
            'body' => 'required'
        ]);

        Kritik::create($validateData);
        return redirect()->back();
    }
}
