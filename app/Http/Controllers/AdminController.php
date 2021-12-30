<?php

namespace App\Http\Controllers;


class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function client() {
        return view('admin.client');
    }

    public function kontak() {
        return view('admin.contact');
    }

    public function produk() {
        return view('admin.demo');
    }
}
