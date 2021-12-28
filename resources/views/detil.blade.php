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
        <img src="{{ asset("img/transisi jumbotron home2.png") }}" alt="transisi" width="100%">
    </section>
    
    <section class="deskripsi">
            <div class="row d-flex justify-content-center">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 d-flex align-items-center justify-content-center">
                        <img class="rounded"  width="80%" src="{{ asset("img/produk/$detil->image_produk") }}" >
                    </div>
                    <div class="col-11 col-sm-11 col-md-6 col-lg-5 d-flex align-items-center">
                        <p class=paragraph >{{ $detil->deskripsi_produk }}</h5>
                    </div>
            </div>
    </section>

    <section class="keunggulan">
        <div class="container">
            <div class="row justify-content-center">
                <h1>Keunggulan</h1> 
            </div>
            <div class="row justify-content-center">
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
        </div>
    </section>

    <section class="tujuan-aplikasi">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-4 col-sm-3 col-md-3 d-flex justify-content-center align-items-center desc">
                    <h3 class="text-center">Tujuan</h3>
                </div>
                <div class="col-11 col-sm-9 col-md-9 d-flex align-items-center">
                    <div class="tujuan">
                        {{ $detil->tujuan }}
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure illum, laboriosam molestiae porro quasi eaque aliquam quibusdam illo sapiente iusto veniam ab at cum dolore, rem distinctio consequatur quisquam inventore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione pariatur iure cumque iste a, necessitatibus similique, harum voluptatum illum unde voluptatibus at voluptatem explicabo eaque optio incidunt animi dolores nihil.</p>
                    </div>
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