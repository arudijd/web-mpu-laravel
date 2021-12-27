<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset("/css/bootstrap.css") }}">
    <link rel="stylesheet" type="text/css" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="{{ asset("$css") }}">
    <link rel="shortcut icon" href="/img/shortcut-mpu.ico">
    <title>Mitra Prima Utama</title>
  </head>

  <body>
    <div class="container-baru">
        @include('partials.navbar')
        @yield('container')
    </div>
        

        <img src="{{ asset("img/transisi home.png") }}" alt="transisi" width="100%">
        <footer class="footer">
            <div class="container">
                <div class="row justify-content-center">
                    <img src="{{ asset("img/logo.png") }}" alt="" width="10%" height="auto">
                </div>
                <div class="row justify-content-center judul">
                    <h3>PT. MITRA PRIMA UTAMA</h3>
                </div>
                <div class="row justify-content-center deskripsi">
                            <p>
                                Jl. Pahlawan No.28, Cemp. Putih, Kec. Ciputat Tim., Kota Tangerang Selatan, Banten 15412
                            </p>
                </div>
                <div class="row list justify-content-center">
                    <div class="col-11 garis">
                        <hr>
                    </div>
                </div>
                <div class="row sub-navigation justify-content-center">
                    <div class="col-sm-4 justify-content-center">
                        <p class="text-center">Copyright 2020. <span>Mitra Prima Utama</span></p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset("js/jquery-3.4.1.slim.min.js") }}"></script>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="fontawesome/js/all.js"></script> 
</body>
</html>