<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        return view('produk', [
            "title" => "Produk",
            "css" => "produk.css",
            "subtitle" => "Semua",
            "produk" => Produk::all()
        ]);
    }

    public function appsOnly(){

        return view('produk', [
            "title" => "Produk",
            "css" => "produk.css",
            "subtitle" => "Apps",
            "produk" => Produk::where('jenis_produk', 'LIKE', 'Aplikasi')->get()
        ]);
    }

    public function nonappsOnly(){

        return view('produk', [
            "title" => "Produk",
            "css" => "produk.css",
            "subtitle" => "Nonapps",
            "produk" => Produk::where('jenis_produk', 'LIKE', 'Non Aplikasi')->get()
        ]);
    }
}
