<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Kritik;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    public function clientAddAndUpdate(Request $request){
    
        if($request->has('formAdd')){
            $validateData = $request->validate([
                'nama_kota' => 'required|max:255',
                'nama_pulau' => 'required',
                'img_klien' => 'image'
            ]);
    
            if($request->file('img_klien')){
                $imageName = time().'.'.$request->img_klien->extension();
                $validateData['img_klien'] = $request->file('img_klien')->move(public_path('img/client'), $imageName);
    
            }
    
            Client::create($validateData);
            return redirect()->back();
        }

        if($request->has('formEdit')){
            $validateData = $request->validate([
                'nama_kota' => 'required|max:255',
                'nama_pulau' => 'required',
                'img_klien' => 'image'
            ]);

            $klien = Client::where('nama_kota', $request->kota_lama)->first();
            if(File::exists($klien->img_klien)){
                File::delete($klien->img_klien);
                $imageName = time().'.'.$request->img_klien->extension();
                $validateData['img_klien'] = $request->file('img_klien')->move(public_path('img/client'), $imageName);

            }

            Client::where('nama_kota', $request->kota_lama)
                        ->update($validateData);
            return redirect()->back();

        }

        
    }

    public function kontak() {
        return view('admin.contact',[
            "title" => "Kontak",
            "kritik" => Kritik::all()
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
