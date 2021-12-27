@extends('layouts.main')
@section('container')

<div class="jumbotron ustify-content-center">
    <div class="container text-item">
        <div class="container text-item">
            <div class="row d-flex justify-content-center">
                <h1>Produk Kami</h1>
            </div>
            <div class="row d-flex justify-content-center text-center">
                <p>Dapatkan Layanan dan Aplikasi terbaik dari Kami</p>
            </div>
        </div>
    </div>
</div>
<section class="transisi-jumbotron">
    <img src="img/transisi jumbotron home.png" alt="transisi" width="100%">
</section>

<section class="link mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <a href="/produk" class="text-center {{ ($subtitle === "Semua" ? 'active-text' : '') }}">
                <h6>Semua Produk</h6>
            </a>&emsp;
            <a href="/aplikasi" class="text-center {{ ($subtitle === "Apps" ? 'active-text' : '') }}">
                <h6>Produk Aplikasi</h6>
            </a>&emsp;
            <a href="/non-aplikasi" class="text-center {{ ($subtitle === "Nonapps" ? 'active-text' : '') }}">
                <h6>Produk Non Aplikasi</h6>
            </a>
        </div>
    </div>
</section>

<section class="all-produk mt-5">
   <div class="container">
        <div class="row">
            @foreach($produk as $p)
            <div class="col-12 col-sm-6 col-md-6 mb-5 mt-3">
                <img src="img/produk/{{ $p->image_produk }}" class="rounded" alt="" width="100%" >
                <br>
                <h3>{{ $p->nama_produk }}</h3>
                <br>
                <h5>{{ $p->jenis_produk }}</h5>
                <a href="detil/{{ $p->slug }}">
                    <button class="btn btn-outline-dark btn-produk mt-3">Selengkapnya
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </a>
            </div>
    @endforeach
        </div>
    
   </div>
</section>
@endsection