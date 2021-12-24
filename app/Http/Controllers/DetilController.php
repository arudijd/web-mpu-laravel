<?php

namespace App\Http\Controllers;


use App\Models\Detil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetilController extends Controller
{
    public function index(Detil $detil){
        return view('detil', [
            "title" => "Produk",
            "css" => "/css/manual/detil.css",
            "detil" => $detil
        ]);
    }
}
