<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Detil;
use App\Models\Kritik;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index',[
            "title" => 'Dashboard',
            "client" => Client::all(),
            "kritik" => Kritik::all()
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
                'kategori_kab' => 'required',
                'nama_kota' => 'required|max:255',
                'nama_pulau' => 'required',
                'img_klien' => 'image'
            ]);
    
            if($request->file('img_klien')){
                $imageName = time().'.'.$request->img_klien->extension();
                $validateData['img_klien'] = $imageName; 
                $request->file('img_klien')->move(public_path('img/client'), $imageName);
    
            }
    
            Client::create($validateData);
            return redirect()->back();
        }

        if($request->has('formEdit')){
            $validateData = $request->validate([
                'kategori_kab' => 'required',
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

    public function kontakFavorite()
    {
        return view('admin.contact',[
            "title" => "Kontak",
            "kritik" => Kritik::where('isFavorite', true)->get()
        ]);
    }

    public function detilKontak(Kritik $kritik)
    {
        return view('admin.read', [
            "title" => "Kontak",
            "kritik" => $kritik
        ]);
    }

    public function favOrDestroy(Request $request, Kritik $kritik)
    {
        if($request->has('buttonFav')){
            if($kritik->isFavorite == false){
                Kritik::where('id_kritik', $kritik->id_kritik)
                ->update(['isFavorite' => true]);
            } 
            if($kritik->isFavorite == true){
                Kritik::where('id_kritik', $kritik->id_kritik)
                ->update(['isFavorite' => false]);
            }

            

            return redirect()->back();
        }

        if($request->has('buttonDelete')){
            Kritik::destroy($kritik->id_kritik);
            return redirect('/dashboard/kontak');
        }
    }

    public function produk() {
        return view('admin.demo',[
            "title" => "Produk",
            "produk" => Produk::all()
        ]);
    }

    public function editProduk (Detil $detil)
    {
        return view('admin.demo.editor',[
            "title" => "Produk",
            "detil" => $detil
        ]);
    }

    public function updateProduk(Request $request, Detil $detil)
    {
        $validateData = $request->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'image_produk' => 'image',
            'tujuan' => 'required'
        ]);


            
                File::delete($detil->image_produk);
                $imageName = time().'.'.$request->image_produk->extension();
                $request->file('image_produk')->move(public_path('img/produk'), $imageName);
                $validateData['image_produk'] = $imageName;

        Detil::where('slug', $detil->slug)
                ->update($validateData);
        return redirect('/dashboard/produk');
    }
}
