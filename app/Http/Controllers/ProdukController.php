<?php

namespace App\Http\Controllers;

use App\Models\Detil;
use App\Models\Produk;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index(){
        return view('produk', [
            "title" => "Produk",
            "css" => "/css/manual/produk.css",
            "subtitle" => "Semua",
            "produk" => Produk::all()
        ]);
    }

    public function appsOnly(){

        return view('produk', [
            "title" => "Produk",
            "css" => "/css/manual/produk.css",
            "subtitle" => "Apps",
            "produk" => Produk::where('jenis_produk', 'LIKE', 'Aplikasi')->get()
        ]);
    }

    public function nonappsOnly(){

        return view('produk', [
            "title" => "Produk",
            "css" => "/css/manual/produk.css",
            "subtitle" => "Nonapps",
            "produk" => Produk::where('jenis_produk', 'LIKE', 'Non Aplikasi')->get()
        ]);
    }
    public function detilProduk(Detil $detil){
        return view('detil', [
            "title" => "Produk",
            "css" => "/css/manual/detil.css",
            "detil" => $detil
        ]);
    }
}
