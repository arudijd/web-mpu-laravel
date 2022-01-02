<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetilController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home']);

Route::get('/profil' , [HomeController::class, 'profil']);

Route::get('/client', [HomeController::class, 'client']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::post('/contact', [HomeController::class, 'kritik']);

Route::prefix('produk')->group(function () {
    Route::get('', [ProdukController::class, 'index'])->name('produk');
    Route::get('aplikasi', [ProdukController::class, 'appsOnly'])->name('produk-aplikasi');
    Route::get('non-aplikasi', [ProdukController::class, 'nonappsOnly'])->name('produk-non-aplikasi');
    Route::get('detil/{detil:slug}', [ProdukController::class, 'detilProduk']);
});


Route::get('/login', [LoginController::class, 'index'] );
Route::post('/login', [LoginController::class, 'login'] );
Route::post('/dashboard/client/', [AdminController::class, 'clientAddAndUpdate']);

Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/dashboard/client', [AdminController::class, 'client']);
Route::get('/dashboard/kontak', [AdminController::class, 'kontak']);
Route::get('/dashboard/kontak/favorite', [AdminController::class, 'kontakFavorite']);
Route::get('/dashboard/kontak/{kritik:id_kritik}', [AdminController::class, 'detilKontak']);
Route::post('/dashboard/kontak/{kritik:id_kritik}', [AdminController::class, 'favOrDestroy']);
Route::get('/dashboard/produk', [AdminController::class, 'produk']);
Route::get('/dashboard/produk/{detil:slug}/edit', [AdminController::class, 'editProduk']);
Route::post('/dashboard/produk/{detil:slug}/edit', [AdminController::class, 'updateProduk']);






