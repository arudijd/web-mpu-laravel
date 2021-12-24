@extends('layouts.main')
@section('container')
    <div class="jumbotron">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="justify-content-center">{{ $detil->nama_produk }}</h1>
            </div>
        </div>
    </div>
    <section class="transisi-jumbotron">
        <img src="{{ asset("img/transisi jumbotron home.png") }}" alt="transisi" width="100%">
    </section>
    
    <section class="deskripsi">
            <div class="row d-flex justify-content-center">
                    <div class="col-md-5 d-flex align-items-center">
                        <img src="{{ asset("img/produk/$detil->image_produk") }}" height="50%">
                    </div>
                    <div class="col-md-5 d-flex align-items-center">
                        <p class=paragraph>{{ $detil->deskripsi_produk }}</h5>
                    </div>
            </div>
    </section>

    <section class="keunggulan">
        <div class="row justify-content-center">
            <h1>Keunggulan</h1>
            <hr><br><br><br><br>
        </div>
        <div class="d-flex row justify-content-center text-center produk">
            <div class="col-11 col-sm-6 col-lg-3 produk1">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <img src="{{ asset("img/home/produk aplikasi.png") }}" alt="produk aplikasi" class="rounded" width="70%" height="auto">
                    <div class="card-body">
                        <h5 class="card-title">Judul keunggulan</h5>
                        <p class="card-text">{{ $detil->keunggulan }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tujuan-aplikasi">
        <div class="row d-flex justify-content-center">
                <div class="col-md-3 desc">
                    <h3>Tujuan</h3>
                </div>
                <div class="col-md-1 d-flex align-items-center">
                    <div class="vl"></div>
                </div>
                <div class="col-md-8">
                    {{ $detil->tujuan }}
                </div>
            </div>
    </section>


@endsection