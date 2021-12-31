<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function client() {
        return view('admin.client', [
            "clients" => Client::all()
        ]);
    }

    public function clientAdd(Request $request){
    
        $validateData = $request->validate([
            'nama_kota' => 'required|max:255',
            'nama_pulau' => 'required',
            'img_klien' => 'required'
        ]);

        if($file = $request->hasFile('img_klien')){
            $file = $request->file('img_klien');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img/client',$filename);
            $validateData['img_klien'] = $filename;

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
        return view('admin.contact');
    }

    public function produk() {
        return view('admin.demo',[
            "produk" => Produk::all()
        ]);
    }
}
