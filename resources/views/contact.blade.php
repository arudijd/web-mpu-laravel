@extends('layouts.main')
@section('container')
    
<div class="jumbotron justify-content-center">
    <div class="container text-item">
        <div class="row d-flex justify-content-center">
            <h1>Kontak Kami</h1>
        </div>
        <div class="row d-flex justify-content-center text-center">
            <p>Hubungi kami kapan saja...</p>
        </div>
    </div>
</div>
<section class="transisi-jumbotron">
    <img src="img/transisi jumbotron home.png" alt="transisi" width="100%">
</section>

<section class="kritik-logo">
    <div class="container">
        <div class="row">
            <h1>Kritik dan Saran</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-11 col-sm-11 col-md-8 col-lg-8 col-xl-8 kritik-saran">
                <form action="/contact" method="post">
                    @csrf
                    <div class="row">
                        <!-- Pesan -->
                        <div class="col-12 d-flex justify-content-center">
                            <textarea class="form-control" name="body" class="border" id="pesan" cols="75%" rows="10" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Masukan Pesan'" placeholder=" Masukan Pesan" required></textarea>
                        </div>
                        <div class="col-6 col-lg-6">
                            <input class="form-control nama" name="penulis" id="nama" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Nama Anda'" placeholder="Masukan Nama">
                        </div>
                        <div class="col-6 col-lg-6">
                            <input class="form-control email" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Email'" placeholder="Email" required>
                        </div>
                        <div class="col-12 col-sm-8 col-md-8 col-lg-9">
                            <input class="form-control judul" name="judul" id="judul" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Judul'" placeholder="Masukan Judul">
                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 button-verification">
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
                                          <div class="col-12">
                                              <div class="row">
                                                  <div class="col-3">
                                                      <p>Nama</p>
                                                  </div>
                                                  <div class="col-1">
                                                      <p>:</p>
                                                  </div>
                                                  <div class="col-8">
                                                      <p id="modal-nama"></p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-12">
                                            <div class="row">
                                                <div class="col-3">
                                                    <p>Email</p>
                                                </div>
                                                <div class="col-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-8">
                                                    <p id="modal-email"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-3">
                                                    <p>Judul</p>
                                                </div>
                                                <div class="col-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-8">
                                                    <p id="modal-judul"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-3">
                                                    <p>Pesan</p>
                                                </div>
                                                <div class="col-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-8">
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
            <!-- kontak -->
            <div class="col-11 col-sm-11 col-md-4 col-lg-4 col-xl-4 kontak">
                <div class="row">
                    <div class="col-12 alamat">
                        <div class="row">
                            <div class="col-12 maps">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-center">
                                        <img src="img/contact/loc (2).png" alt="maps" class="img-thumbnail" width="32px" height="auto">
                                    </div>
                                    <div class="col-9">
                                        <h3 class="text-left">Jl. Pahlawan No.28, Cempaka putih</h3>
                                        <h4 class="text-left">Kec. Ciputat Timur, Tangerang Selatan, Banten</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 jam">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-center">
                                        <img src="img/contact/jam (2).png" alt="time" class="img-thumbnail" width="32px" height="auto">
                                    </div>
                                    <div class="col-9">
                                        <h3 class="text-left">Senin - Jumat</h3>
                                        <h4 class="text-left">08.00 - 17.00</h4>

                                    </div>
                                </div>

                            </div>
                            <div class="col-12 world">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-center">
                                        <img src="img/contact/mail (2).png" alt="world" class="img-thumbnail" width="50px" height="auto">
                                    </div>
                                    <div class="col-9">
                                        <h3 class="text-left">pt.mitra_prima_utama@yahoo.com</h3>
                                        <h4 class="text-left">Kirim Pesan Kapan Saja!</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 phone">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-start justify-content-center">
                                        <img src="img/contact/phone logo home.png" alt="phone" class="img-thumbnail" height="auto" width="65px">
                                    </div>
                                    <div class="col-9">
                                        <div class="row">
                                            <div class="col-4 col-md-12 col-lg-6">
                                                <h3>(021) 74704232</h3>
                                                <h4>KANTOR</h4>
                                            </div>
                                            <div class="col-6 col-md-12 col-lg-6">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-lg-6">
                                                <h3>0811-1652-95</h3>
                                                <h4>NUR M. BUSRO</h4>
                                            </div>
                                            <div class="col-6 col-md-12 col-lg-6">
                                                <h3>0812-9464-507</h3>
                                                <h4>RUDY</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-lg-6">
                                                <h3>0812-8103-332</h3>
                                                <h4>MUHSON</h4>
                                            </div>
                                            <div class="col-6 col-md-12 col-lg-6">
                                                <h3>0813-8400-5656</h3>
                                                <h4>ERANITA</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-lg-6">
                                                <h3>0812-9868-6601</h3>
                                                <h4>MAHFUD</h4>
                                            </div>
                                            <div class="col-6 col-md-12 col-lg-6">
                                                <h3>0813-8707-8803</h3>
                                                <h4>OZY</h4>
                                            </div>
                                        </div>
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

@push('contact')
    <script>
        document.getElementById('submit-verification').addEventListener('click', function() {
            document.getElementById('modal-nama').innerHTML = document.getElementById('nama').value.trim()
            document.getElementById('modal-email').innerHTML = document.getElementById('email').value.trim()
            document.getElementById('modal-judul').innerHTML = document.getElementById('judul').value.trim()
            document.getElementById('modal-pesan').innerHTML = document.getElementById('pesan').value.trim()
        })
    </script>
@endpush