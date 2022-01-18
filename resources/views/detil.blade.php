@extends('layouts.main')
@section('container')

    <div class="jumbotron d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center namaproduk">
                <h1 class="justify-content-center text-center">{{ $detil->nama_produk }}</h1>
            </div>
            <div class="row d-flex justify-content-center">
                @if ($detil->singkatan_produk != null)
                <h1 class="justify-content-center text-center">({{ $detil->singkatan_produk }})</h1>
                @endif
            </div>
        </div>
    </div>
    <section class="transisi-jumbotron">
        <img src="{{ asset("img/transisi jumbotron home2.png") }}" alt="transisi" width="100%">
    </section>
    <section class="deskripsi">
            <div class="row d-flex justify-content-center">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 d-flex align-items-center justify-content-center">
                        <img class="rounded"  width="75%" src="{{ asset("img/produk/$detil->image_produk") }}" >
                    </div>
                    <div class="col-11 col-sm-11 col-md-6 col-lg-5 d-flex align-items-center">
                        <p class=paragraph >{{ $detil->deskripsi_produk }}</h5>
                    </div>
            </div>
    </section>

    <section class="keunggulan">
        <!-- <div class="row justify-content-center">
        <h1>Keunggulan</h1>
            <hr><br><br><br><br>
        </div> -->
        <div class="row d-flex justify-content-center text-center produk">
        @foreach ($detil->keunggulan as $keunggulan)
            <div class="col-10 col-sm-5 col-md-5 col-lg-3 d-flex justify-content-center produk1">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <img src="{{ asset("img/produk/$keunggulan->image_keunggulan") }}" alt="produk aplikasi" class="rounded mx-auto d-block" width="40%" height="auto">
                    <div class="card-body">
                        <h5 class="card-title">{{ $keunggulan->judul_keunggulan }}</h5>
                        <p class="card-text">{{ $keunggulan->detil_keunggulan }}</p>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </section>

    <section class="tujuan-aplikasi">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-4 col-sm-3 col-md-3 col-lg-2 d-flex justify-content-center align-items-center desc ">
                    @if ($produk->jenis_produk == "Workshop")
                    <h3 class="text-center">Materi</h3>    
                    @else
                    <h3 class="text-center">Tujuan</h3>
                    @endif
                    
                </div>
                <div class="col-10 col-sm-9 col-md-9 col-lg-10 tujuan" >
                     {!! $detil->tujuan !!} 
                </div>
            </div>
        </div>
    </section>

    <section class="hubungi-kami">
        <div class="container">
            <div class="row d-flex justify-content-end align-items-center">
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 text">
                    <h5 class="text-right">Jika Anda tertarik dengan produk ini, silahkan hubungi kami untuk detail lebih lanjut.</h5>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 d-flex justify-content-end btn">
                    <a href="/contact">
                        <button class="btn btn-outline-dark btn-produk">Kontak Kami!</button>
                    </a>
                </div>
                
            </div>
        </div>
    </section>


@endsection