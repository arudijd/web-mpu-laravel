<?php

namespace App\Http\Controllers;

use App\Models\Client;

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

    public function kontak() {
        return view('admin.contact');
    }

    public function produk() {
        return view('admin.demo');
    }
}
