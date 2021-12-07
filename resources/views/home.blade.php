@extends('layouts.main')
@section('container')
<div class="container-baru"> 
    <section class="jumbotron-home">
        <div class="jumbotron">
            <div class="row justify-content-center">
                <img src="img/logo.png" alt="logo">
            </div>
            <div class="row justify-content-center">
                <h1 class="display-4">Stable, Strong , Safe</h1>
            </div>
        </div>
    </section>

        <div class="jumbotron jumbotron-fluid arti-mpu">
            <div class="container">
                <div class="row justify-content-center">
                    <h1>PT Mitra Prima Utama</h1>
                    <hr>
                    <p>adalah perusahaan swasta Nasional yang bergerak dalam bidang konsultasi manajemen, teknologi informasi dan pengembangan sumber daya manusia. </p>
                </div>
            </div>
        </div> 

        <section class="aplikasi-utama-mpu">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-1">
                        <img src="img/home/BPHTB.png" alt="bphtb">
                        <h3>e-BPHTB</h3>
                        <p>adalah Aplikasi Online Pajak BPHTB</p>
                    </div>
                    <div class="col-md-3 text-2">
                        <img src="img/home/simpatda.png" alt="simpatda">
                        <h3>&nbsp;SIMPATDA</h3>
                        <p>Adalah Aplikasi Online Pajak Lainya</p> 
                    </div>
                    <div class="col-md-3 text-3">
                        <img src="img/home/simpbb.png" alt="simpbb">
                        <h3>SIM-PBB</h3>
                        <p>Adalah Aplikasi Online Pajak PBB</p> 
                    </div>
                    <div class="col-md-3 text-4">
                        <img src="img/home/epotensi.png" alt="epotensi">
                        <h3>e-POTENSI</h3>
                        <p>Adalah Aplikasi Online Pajak Potensi</p> 
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
                    <hr><br>
                    <p class="main-p">Service kami adalah yang terbaik dan berpengalaman</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 border-produk-1">
                        <img src="img/home/produk aplikasi.png" alt="" width="70%" height="auto">
                        <div class="deskripsi">
                            <h2>Produk Aplikasi</h2>
                            <p>Website and eCommerce doesn’t have to be expensive or complex, but effective. We work with all sorts of clients with a wide range of budgets and requirements.</p>
                            <button type="button" class="btn btn-outline-warning">
                                <span>Learn More
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-2">
                    
                    </div>
                    <div class="col-md-4 border-produk-2">
                        <img src="img/home/produk non aplikasi.png" alt=""  width="70%" height="auto">
                        <div class="deskripsi">
                            <h2>Produk Non Aplikasi</h2>
                            <p class="text-left">Website and eCommerce doesn’t have to be expensive or complex, but effective. We work with all sorts of clients with a wide range of budgets and requirements.</p>
                            <button type="button" class="btn btn-outline-warning">
                                <span>Learn More
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="client-kami">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 client-img">
                        <img src="img/home/animasi tujuan sppt.png" alt="" width="280%" height="auto">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 client-desc">
                        <h1>Client Kami</h1>
                        <hr><br>
                        <p class="main-p">Service kami adalah yang terbaik dan berpengalaman</p>         
                        <div class="client-all">
                            <div class="row client-1">
                                <img src="img/home/client-kami-all.png" alt="" width="20%">
                                <h5>130</h5>
                                <p>Kami mempunyai total 130 Client Dari Seluruh Kabupaten Di Indonesia</p>
                            </div>
                            <div class="row client-2">
                                <img src="img/home/animasi client-1.png" alt="" width="15%" height="auto">
                                <h5>50</h5>
                                <p>Diantaranya Kami mempunyai 50 Client e-BPHTB</p>
                            </div>
                            <div class="row client-3">
                                <img src="img/home/animasi client-2.png" alt="" width="14%" height="auto">
                                <h5>30</h5>
                                <p>Dan Kami mempunyai 30 Client e-SIMPATDA</p>
                            </div>
                            <div class="row client-4">
                                <img src="img/home/animasi client-3.png" alt="" width="13%" height="auto">
                                <h5>50</h5>
                                <p>Dan Kami mempunyai 50 Client Aplikasi Lainya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial">
            <div class="container">
                <div class="row justify-content-left judul">
                    <h1>Testimonial</h1>
                    <p>Still not convinced? Read some of the reviews from our clients.</p>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/home/testimonial.png" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>“ Web Developer with a good Desain ”</h5>
                            <p>ucup, Kadib Bandung Barat</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/home/testimonial.png" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>“ Web Developer with logo desain ”</h5>
                             <p>ucup, Kadib Bandung timur</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/home/testimonial.png" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>“ Web Developer with a Mata desain ”</h5>
                            <p>ucup, Kadib Bandung selatan</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev next" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>    
        </section>
</div>
    

@endsection