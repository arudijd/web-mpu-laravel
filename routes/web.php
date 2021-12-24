<?php

use App\Http\Controllers\DetilController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "css" => "/css/manual/index.css"
    ]);
});

Route::get('/profil' , function () {
    return view('profil', [
        "title" => "Profil",
        "css" => "/css/manual/profil.css"
    ]);
});

Route::get('/client', function () {
    return view('client', [
        "title" => "Client",
        "css" => "/css/manual/client.css"
    ]);
    
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "css" => "/css/manual/contact.css"
    ]);
    
});

Route::get('detil/{detil:slug}', [DetilController::class, 'index']);

Route::get('/admin', function () {
    return view('admin/login');
});

Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/aplikasi', [ProdukController::class, 'appsOnly']);

Route::get('/non-aplikasi', [ProdukController::class, 'nonappsOnly']);




    