<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index',[
            "title" => 'Dashboard'
        ]);
    }

    public function client() {
        return view('admin.client', [
            "title" => "Klien",
            "clients" => Client::all()
        ]);
    }

    public function clientAdd(Request $request){
    
        $validateData = $request->validate([
            'nama_kota' => 'required|max:255',
            'nama_pulau' => 'required',
            'img_klien' => 'image'
        ]);

        if($request->file('img_klien')){
            $validateData['img_klien'] = $request->file('img_klien')->store('client');

        }

        Client::create($validateData);
        return redirect()->back();

        
    }

    public function clientUpdate(Request $request, Client $client){
        $validateData = $request->validate([
            'nama_kota' => 'required|max:255',
            'nama_pulau' => 'required',
            'img_klien' => 'required'
        ]);

        

        
    }

    public function kontak() {
        return view('admin.contact',[
            "title" => "Kontak"
        ]);
    }

    public function produk() {
        return view('admin.demo',[
            "title" => "Produk",
            "produk" => Produk::all()
        ]);
    }

    public function editProduk ()
    {
        return view('admin.demo.editor',[
            "title" => "Produk"
        ]);
    }
}
