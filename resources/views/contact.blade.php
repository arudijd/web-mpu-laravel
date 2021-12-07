@extends('layouts.main')
@section('container')
    
<div class="jumbotron">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="justify-content-center">Contact Kami</h1>
            <p class="lead justify-content-center">Let’s get to know each other better, start with you.</p>
        </div>
    </div>
</div>
<section class="transisi-jumbotron">
    <img src="img/transisi jumbotron home.png" alt="transisi" width="100%">
</section>

<section class="kritik-logo">
    <div class="container">
        <div class="row">
            <h1>Kritik Dan Saran</h1>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="Pesan" class="border" id="pesan" cols="75%" rows="10" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Masukan Pesan'" placeholder=" Masukan Pesan" required></textarea>
                        </div>
                        <div class="col-md-5">
                            <input class="form-control nama" name="name" id="nama" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Nama Anda'" placeholder="Masukan Nama Anda">
                        </div>
                        <div class="col-md-auto"></div>
                        <div class="col-md-6">
                            <input class="form-control email" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Email Address'" placeholder="Email" required>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control judul" name="subject" id="judul" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Judul'" placeholder="Masukan Judul">
                        </div>
                        <div class="col-md-3 button-verification">
                            <button type="button" class="btn btn-outline-danger" id="submit-verification" data-toggle="modal" data-target="#modal-verification"><span>Submit </span><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </div> 
                        
                        <!-- modal -->
                        <div class="modal fade" id="modal-verification" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Verifikasi Data</h5>
                                </div>
                                <div class="modal-body">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-sm-12">
                                              <div class="row">
                                                  <div class="col-sm-3">
                                                      <p>Nama</p>
                                                  </div>
                                                  <div class="col-sm-1">
                                                      <p>:</p>
                                                  </div>
                                                  <div class="col-sm-8">
                                                      <p id="modal-nama"></p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p>Email</p>
                                                </div>
                                                <div class="col-sm-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p id="modal-email"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p>Judul</p>
                                                </div>
                                                <div class="col-sm-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p id="modal-judul"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p>Pesan</p>
                                                </div>
                                                <div class="col-sm-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p id="modal-pesan"></p>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div><!-- end modal -->

                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-12 alamat">
                        <div class="row">
                            <div class="col-md-12 maps">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="img/contact/maps logo home.png" alt="maps" width="50%" height="auto">
                                    </div>
                                    <div class="col-md-9">
                                        <h3 class="text-center">Jl. Pahlawan No.28, Cempaka putih</h3>
                                        <h4 class="text-center">Kec. Ciputat Timur</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 phone">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="img/contact/phone logo home.png" alt="phone" width="90%" height="auto">
                                    </div>
                                    <div class="col-md-9">
                                        <h3 class="text-center">(021) 74704232</h3>
                                        <h4 class="text-center">Sen s/d Jum 8am s/d 5pm</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 world">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="img/contact/world logo home.png" alt="world" width="80%" height="auto">
                                    </div>
                                    <div class="col-md-9">
                                        <h3 class="text-center">pt.mitra_prima_utama@yahoo.com</h3>
                                        <h4 class="text-center">Kirim Pesan Kapan Saja!</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="maps-mpu">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15862.987782828703!2d106.7596402!3d-6.296948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3d89a9d9f6d45272!2sPT.%20MITRA%20PRIMA%20UTAMA!5e0!3m2!1sid!2sid!4v1599807121717!5m2!1sid!2sid" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>

@endsection