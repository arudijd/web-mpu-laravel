@extends('layouts.main')
@section('container')
<div class="container-baru">
    <div class="jumbotron">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="justify-content-center">Profile Kami</h1>
                <p class="lead justify-content-center">Let’s get to know each other better, start with you.</p>
            </div>
        </div>
    </div>
    <section class="transisi-jumbotron">
        <img src="img/transisi jumbotron home.png" alt="transisi" width="100%">
    </section>
    
    
    <section class="kisah-kami">
        <div class="container">
            <div class="row justify-content-left">
                <h1>Kisah Kami</h1>
            </div>
            <div class="row">
                <!--<div class="col-md-1"></div>-->
                <div class="col-md-3">
                    <p>
                        PT. MITRA PRIMA UTAMA mulai dirintis sejak awal tahun 1990-an dan aktif memulai kegiatan sejak awal tahun 2001 hingga sekarang.
                        Kami tercatat sebagai anggota KADIN pada awal tahun 2002.
                        Perusahaan kami didiirikan oleh beberapa tenaga ahli yang telah lama bekerja di perusahaan konsultan Nasional.
                        Kami memiliki komitmen yang jelas dan kuat dalam memberkan solusi terbaik dan optimal kepada setiap pelanggan yang terdiri dari sektor pemerintah dan swasta, guna untuk membantu pencapaian tujuan usahanya.
                        Dengan dukungan tenaga ahli yang profesional dan berkopetensi di bidangnya, kami dapat menjadi perusahaan konsultan yang berperan aktif dalam pembangunan dan bisnis di Indonesia.
                    </p>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4 justify-content-right align-items-center ">
                    <img src="img/profil/profil.jpeg" alt="" width="130%" height="auto">
                </div>
            </div>
        </div>
    </section>
    
    <section class="client-mpu">
        <div class="container">
            <div class="row">
                <div class="col-md-3 operasi">
                    <h2 class="text-center">20</h2>
                    <p class="text-center">Tahun Beroperasi</p>
                </div>
                <div class="col-md-3 client">
                    <h2 class="text-center">130+</h2>
                    <p class="text-center">Total Klient</p>
                </div>
                <div class="col-md-3 project">
                    <h2 class="text-center">200+</h2>
                    <p class="text-center">Total Project</p>
                </div>
                <div class="col-md-3 team">
                    <h2 class="text-center">32</h2>
                    <p class="text-center">Total Team Kami</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="visi-misi">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 d-flex align-items-center">
                    <h1 class="text-center">Visi Kami</h1>
                </div>
                <div class="col-md-1 d-flex align-items-center">
                    <div class="vl"></div>
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="visi">
                            <p>Memberikan Jasa Konsultasi dan Teknologi Informasi yang berkualitas dan professional melalui inovasi yang berkelanjutan</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 d-flex align-items-center">
                    <h1 class="text-center">Misi Kami</h1>
                </div>
                <div class="col-md-1 d-flex align-items-center">
                    <div class="vl"></div>
                </div>
                <div class="col-md-8 d-flex">
                    <div class="misi">
                            <ol class="list-group list-group-numbered ml-3">
                                <li>Mengutamakan kepuasan pelanggan</li>
                                <li>Menjadi perusahaan yang inovatif dalam percaturan bisnis nasional</li>
                            </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="support">
        <div class="container">
            <div class="row justify-content-center">
                <h1>Disupport Oleh</h1>
                <hr>
            </div>
            <div class="row support-image">
                <div class="col-md text-center">
                    <img src="img/profil/logo ibm.png" alt="ibm" width="40%" height="auto"><br>
                    <img src="img/profil/logo apc.png" alt="apc" width="40%" height="auto"><br>
                    <img src="img/profil/logo ica.png" alt="ica" width="40%" height="auto">
                </div>
                <div class="col-md text-center">
                    <img src="img/profil/logo oracle.png" alt="oracle" width="70%" height="auto"><br>
                    <img src="img/profil/logo epson.png" alt="epson" width="60%" height="auto"><br>
                    <img src="img/profil/logo hp.png" alt="hp" width="30%" height="auto">
                </div>
                <div class="col-md text-center">
                        <img src="img/profil/logo printronix.png" alt="" width="50%" height="auto"><br>
                        <img src="img/profil/logo microsoft.png" alt="" width="50%" height="auto"><br>
                        <img src="img/profil/logo emerson.png" alt="" width="50%" height="auto">
                </div>
                <div class="col-md text-center">
                    <img src="img/profil/logo cannon.png" alt="cannon" width="50%" height="auto"><br>
                    <img src="img/profil/logo nikon.png" alt="nikon" width="50%" height="auto"><br>
                    <img src="img/profil/logo spectra.png" alt="spectra" width="50%" height="auto">
                </div>
                <div class="col-md text-center">
                    <img src="img/profil/logo central data.png" alt="central-data" width="50%" height="auto"><br>
                    <img src="img/profil/logo mapinfo.png" alt="mapinfo" width="75%" height="auto">
                </div>
            </div>
        </div>
    </section>

</div>
    
@endsection

