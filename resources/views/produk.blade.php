@extends('layouts.main')
@section('container')
<div class="jumbotron">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="justify-content-center">Produk Kami</h1>
            <p class="lead justify-content-center">Dapatkan Layanan dan Aplikasi terbaik dari Kami</p>
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
            <div class="col-md-6 mb-5 mt-3">
                <img src="img/produk/{{ $p->image_produk }}" alt="" width="550px" height="280px">
                <br>
                <h3>{{ $p->nama_produk }}</h3>
                <br>
                <h5>{{ $p->jenis_produk }}</h5>
                <a href="/detil">
                    <button class="btn btn-outline-dark btn-produk mt-3">Learn More
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </a>
            </div>
    @endforeach
        </div>
    
   </div>
</section>
@endsection