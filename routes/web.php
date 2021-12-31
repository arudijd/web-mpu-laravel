<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetilController;
use App\Http\Controllers\LoginController;
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

Route::prefix('produk')->group(function () {
    Route::get('', [ProdukController::class, 'index'])->name('produk');
    Route::get('aplikasi', [ProdukController::class, 'appsOnly'])->name('produk-aplikasi');
    Route::get('non-aplikasi', [ProdukController::class, 'nonappsOnly'])->name('produk-non-aplikasi');
    Route::get('detil/{detil:slug}', [DetilController::class, 'index']);
});


Route::get('/login', [LoginController::class, 'index'] );
Route::post('/login', [LoginController::class, 'login'] );
Route::post('/dashboard/client/', [AdminController::class, 'clientAdd']);

Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/dashboard/client', [AdminController::class, 'client']);
Route::get('/dashboard/kontak', [AdminController::class, 'kontak']);
Route::get('/dashboard/produk', [AdminController::class, 'produk']);
Route::get('/dashboard/produk/edit', [AdminController::class, 'editProduk']);






