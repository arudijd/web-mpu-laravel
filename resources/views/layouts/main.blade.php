<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/manual/{{$css}}">
    <link rel="shortcut icon" href="img/shortcut-mpu.ico">
    <title>Mitra Prima Utama</title>
  </head>
  <body>

    
    
    <div class="container-baru">
        @include('partials.navbar')
        @yield('container')
    </div>
        

        <img src="img/transisi home.png" alt="transisi" width="100%" style="margin-top: 100px;">
        <footer class="footer">
            <div class="container">
                <div class="row justify-content-center">
                    <img src="img/logo.png" alt="" width="10%" height="auto">
                </div>
                <div class="row justify-content-center judul">
                    <h3>PT. MITRA PRIMA UTAMA</h3>
                </div>
                <div class="row justify-content-center deskripsi">
                            <p>
                                Jl. Pahlawan No.28, Cemp. Putih, Kec. Ciputat Tim., Kota Tangerang Selatan, Banten 15412
                            </p>
                </div>
                <div class="row justify-content-center sosmed">
                    <div class="col-sm-5">
                        <center>
                            <a href="">
                                <img class="wa" src="img/logo-wa.png" alt="wa" width="5%" height="auto">
                            </a>&emsp;
                            <a href="">
                                <img class="ig" src="img/logo-instagram.png" alt="ig" width="5%" height="auto">
                            </a>&emsp;
                            <a href="">
                                <img class="twitter" src="img/logo-twitter.png" alt="twitter" width="5%" height="auto">
                            </a>&emsp;
                            <a href="">
                                <img class="fb" src="img/logo-fb.png" alt="fb" width="5%" height="auto">
                            </a>&emsp;      
                        </center>
                    </div>
                </div>
                <div class="row list justify-content-center">
                    <hr>
                </div>
                <div class="row justify-content-left navigation">
                    <h6>Navigation</h6>
                </div>
                <div class="row sub-navigation">
                    <div class="col-sm-6 justify-content-left">
                        <p>
                            <a href="">
                                <span>Who we are ?</span>
                            </a>&emsp;
                            <a href="">
                                <span>Service Us</span>
                            </a>&emsp;
                            <a href="">
                                <span>Projects</span>
                            </a>&emsp;
                            <a href="">
                                <span>Business hours</span>
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4 justify-content-right">
                        <p class="text-right">Copyright 2020. <span>Mitra Prima Utama</span></p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="js/jquery-3.4.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="fontawesome/js/all.js"></script>
        
        
    
    
</body>
</html>