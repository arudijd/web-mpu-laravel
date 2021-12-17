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
            "produk" => Produk::all()
        ]);
    }
}
