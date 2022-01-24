@extends('layouts.main')
@section('container')

<div class="container-baru">
    <div class="jumbotron justify-content-center">
        <div class="container text-item">
            <div class="row d-flex justify-content-center">
                <h1>Klien Kami</h1>
            </div>
            <div class="row d-flex justify-content-center text-center">
                <p>Kami dipercaya oleh berbagai Kota/Kabupaten di Indonesia.</p>
            </div>
        </div>
    </div>
    <section class="transisi-jumbotron">
        <img src="img/transisi jumbotron home.png" alt="transisi" width="100%">
    </section>


<section class="ruang-lingkup">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-9 col-sm-3 col-md-3 d-flex justify-content-center align-items-center lingkup">
               <h4 class="text-center">Ruang Lingkup</h4>
            </div>
            <div class="col-12 col-sm-9 col-md-9 d-flex  align-items-center desc">
                <ul>
                    <li>Pengembangan Sistem Aplikasi berbasis Teknologi Informasi (Software)</li>
                    <li>Pengembangan Infrastruktur pendukung Teknologi Informasi (Hardware)</li>
                    <li>Pengembangan Sumber Daya Manusia (SDM)</li>
                    <li>Konsultasi Management / Survey / Pendataan</li>
                </ul>
            </div>
        </div>
        
        <div class="row d-flex justify-content-center">
            <div class="col-4 col-sm-3 col-md-3 d-flex justify-content-center align-items-center lingkup">
               <h4 class="text-center">Sasaran</h4>
            </div>
            <div class="col-12 col-sm-9 col-md-9 d-flex  align-items-center desc">
                <ul>
                <li>Mempermudah & meningkatkan kapasitas proses administrasi pengelolaan Pajak Daerah / Retribusi Daerah secara efektif dan efisien</li>
                    <li>Tersedianya penatausahaan administrasi perpajakan yang rapi, informatif dan akuntabel</li>
                    <li>Meningkatkan pelayanan kepada Wajib Pajak</li>
                    <li>Meningkatkan kepatuhan Wajib Pajak dalam melakukan kewajiban perpajakannya</li>
                    <li>Mempermudah Fiscux dalam melakukan intensifikasi maupun ekstensifikasi</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="list-client-mpu">
    <div class="container">
        <div class="row justify-content-center">
            <h1>Klien Kami</h1> 
        </div>
        <div class="row justify-content-center">
            <hr>
        </div>
    </div>
</section>

<div id="carouselExampleControls" class="carousel slide list-klien" data-ride="carousel">
    <div class="carousel-inner">
        @php
            $i = 0;
        @endphp
        
            @foreach ($client as $row)
            <div class="carousel-item {{ ($i==0 ? 'active' : '') }}">      
                @foreach ($row as $col)
                <div class="row justify-content-center ml-3">
                    @foreach ($col as $item)
                        <div class="col-md-2 d-flex justify-content-center">
                            <img src="{{ asset("img/$item") }}" alt="img-1" class="mt-5" width="50px" height="auto">
                        </div>
                    @endforeach
                </div>
                @endforeach
            </div>
            @php
            $i++;    
            @endphp
            @endforeach
                
            
       
</div>

    <a class="carousel-control-prev mt-5" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next mt-5" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

@endsection