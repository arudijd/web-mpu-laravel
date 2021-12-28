@extends('layouts.main')
@section('container')

<div class="container-baru"> 
<!-- jumbotron -->
    <section class="jumbotron home text-center ">
        <img src="img/logo.png" class="img-thumbnail" alt="logo">
        <h1 class="display-6">Stable, Strong , Safe</h1>
    </section>
        <section class="aplikasi-utama-mpu">
            <div class="container-fluid arti-mpu">
                <div class="row d-flex justify-content-center">
                    <h1>PT Mitra Prima Utama</h1> 
                </div>
                <div class="row d-flex justify-content-center">
                    <hr>
                </div>
                <div class="row d-flex justify-content-center">
                    <p>Perusahaan Swasta Nasional yang bergerak dalam bidang Konsultasi Manajemen, Teknologi Informasi dan Pengembangan Sumber Daya Manusia.  </p>
                </div>
            </div>
            <div class="container container-2">
                <div class="d-flex row  justify-content-center text-center">
                    <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-3 text">
                        <div class="card">
                            <img src="img/home/BPHTB.png" class="rounded" alt="bphtb" >
                            <div class="card-body">
                                <h5 class="card-title">e-BPHTB</h5>
                                <p class="card-text">adalah Aplikasi Online Pajak BPHTB</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-3 text">
                        <div class="card">
                            <img src="img/home/simpatda.png" alt="simpatda" >
                            <div class="card-body">
                                <h5 class="card-title">&nbsp;SIMPATDA</h5>
                                <p class="card-text aa">Adalah Aplikasi Online Pajak Lainnya</p>
                            </div>
                        </div>
                    </div>        
                    <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-3 text">
                        <div class="card">
                            <img src="img/home/simpbb.png" alt="simpbb">
                            <div class="card-body">
                                <h5 class="card-title">SIM-PBB</h5>
                                <p class="card-text">Adalah Aplikasi Online Pajak PBB</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-3 text">
                        <div class="card">
                            <img src="img/home/epotensi.png" alt="epotensi" >
                            <div class="card-body">
                                <h5 class="card-title">e-POTENSI</h5>
                                <p class="card-text">Adalah Aplikasi Online Pajak Potensi</p>
                            </div>
                        </div>
                    </div>                                        
                </div> 
            </div>
        </section>

        <section class="transisi-jumbotron">
            <img src="img/transisi jumbotron home.png" alt="transisi" width="100%">
        </section>
        
        <section class="produk-mpu">
            <div class="container">
                <div class="row justify-content-center">
                    <h1>Produk Kami</h1> 
                </div>
                <div class="row justify-content-center">
                    <hr>
                </div>
                <div class="row justify-content-center">
                    <p class="main-p">Service kami adalah yang terbaik dan berpengalaman</p>
                </div>
                <div class="d-flex row justify-content-center text-center produk">
                    <div class="col-11 col-sm-6 col-lg-5 produk1">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <img src="img/home/produk aplikasi.png" alt="produk aplikasi" class="rounded" width="70%" height="auto">
                            <div class="card-body">
                                <h5 class="card-title">Produk Aplikasi</h5>
                                <p class="card-text">Kami menyediakan produk Aplikasi Pajak/Retribusi Daerah yang mempermudah dalam penyelenggaraannya</p>
                                <a href="/produk/aplikasi" aria-pressed="true">
                                    <button type="button" class="btn btn-outline-warning">    
                                        <span >Selengkapnya
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-sm-6  col-lg-5 produk2">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <img src="img/home/produk non aplikasi.png" alt="produk non aplikasi" class="rounded" width="70%" height="auto">
                            <div class="card-body">
                                <h5 class="card-title">Produk Non Aplikasi</h5>
                                <p class="card-text">Kami menyediakan layanan Konsultasi Perpajakan dan penyelengaraan Pelatihan/Workshop dengan berbagai materi Perpajakan</p>
                                <a href="/produk/non-aplikasi" aria-pressed="true">
                                    <button type="button" class="btn btn-outline-warning">
                                        <span>Selengkapnya
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="client-kami">
            <div class="container">
                <div class="d-flex row justify-content-center">
                    <div class="col-10 col-sm-7 col-md-6 col-lg-7 client-img">
                        <div class="row justify-content-center">
                            <img src="img/home/animasi tujuan sppt.png" alt="animasi" class="rounded" width="100%" height="auto">
                        </div>
                    </div>
                    <div class="col-11 col-sm-9 col-md-6 col-lg-5 client-desc">
                        <div class="row justify-content-center">
                            <h1>Klien Kami</h1> 
                        </div>
                        <div class="row justify-content-center">
                            <hr>
                        </div>
                        <div class="row justify-content-center">
                        <p class="main-p">Klien kami berasal dari berbagai Kota/Kabupaten di Indonesia</p>
                        </div>    
                        <div class="client-all">
                            <div class="row client-1">
                                <img src="img/home/client-kami-all.png"  class="rounded" alt="" width="20%">
                                <p>Kami mempunyai total 120 Client Dari Seluruh Kabupaten Di Indonesia</p>
                            </div>
                            <div class="row client-2">
                                <img src="img/home/animasi client-1.png"  class="rounded" alt="" width="20%" >
                                <p>Diantaranya Kami mempunyai 50 Client e-BPHTB</p>
                            </div>
                            <div class="row client-3">
                                <img src="img/home/animasi client-2.png" alt=""  class="rounded" width="20%">
                                <p>Dan Kami mempunyai 30 Client e-SIMPATDA</p>
                            </div>
                            <div class="row client-4">
                                <img src="img/home/animasi client-3.png" alt=""  class="rounded" width="20%">
                                <p>Dan Kami mempunyai 50 Client Aplikasi Lainya</p>
                            </div>
                            <div class="row btn-s">
                                <a href="client" aria-pressed="true">
                                    <button type="button" class="btn btn-outline-warning">
                                        <span>Selengkapnya
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </a>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
    

@endsection