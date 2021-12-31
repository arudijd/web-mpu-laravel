<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Web Admin MPU</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset("fontawesome/css/all.min.css") }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css") }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset("css/manual/admin/css/adminlte.min.css") }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto list-inline">
      <li class="nav-item list-inline-item" style="color: #1991EB">
            <a href="/dashboard" class="nav-link">
              <span class="fa-li">
                <i class="nav-icon fas fa-undo text-info ml-4"></i>
              </span>&nbsp; Kembali Ke Website
            </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../img/logo.png"
           alt=""
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin MPU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Frennandi Ade Ilyas</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-header text-danger">INFORMATION</li>
          <li class="nav-item">
            <a href="/dashboard/client" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Klient MPU
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/dashboard/kontak" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Kontak MPU
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/dashboard/demo" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Produk
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-header text-danger">Akun</li>
          <li class="nav-item">
            <a href="akun.html" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Ganti Password</p>
            </a>
          </li>
          <!-- <li class="nav-header text-warning">Website</li>
          <li class="nav-item">
            <a href="../index.html" class="nav-link">
              <i class="nav-icon fas fa-undo text-info"></i>
              <p>Kembali Ke Website</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Produk MPU</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Demo</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">
          @foreach($produk as $p)
          <div class="col-6 col-sm-4 col-md-3 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
              </div>
              <div class="card-body pt-0">
                <div class="row">
                    <img src="{{ asset("img/produk/$p->image_produk") }}" class="rounded" alt="" width="95%" height="auto" >
                      <br>
                    <ul class="mt-4 ml-0 mb-0 fa-ul">
                      <li><h2 class="lead"><b>{{ $p->nama_produk }}</b></h2></li>
                      <li><h5 class="text-muted text-sm" style="">{{ $p->jenis_produk }}</h5></li>
                    </ul> 
                </div>
              </div>
              <div class="card-footer text-white bg-secondary mb-3">
                <div class="text-left text-sm">
                  <div class="row">
                    <div class="col-8 footer">
                      <span class="fa-li">
                        <i class="fas fa-sm fa-clock ml-4"></i>
                      </span>&nbsp; Terakhir Di edit: <br> &nbsp;&nbsp;20/02/2082
                    </div>
                    <div class="col-4">
                      <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                        <i class="fas fa-user"></i> Edit
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>E-SIMPATDA</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> BPHTB adalah Bea Perolehan Hak Atas .... </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Terakhir Di edit : 20/02/2082</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i id="demo_logo" class="fas fa-cart-plus"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>E-SIG</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> BPHTB adalah Bea Perolehan Hak Atas .... </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Terakhir Di edit : 20/02/2082</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i id="demo_logo" class="fas fa-map-marked-alt"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>E-SPPT</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> BPHTB adalah Bea Perolehan Hak Atas .... </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Terakhir Di edit : 20/02/2082</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i id="demo_logo" class="fas fa-hotel text-black"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>E-RETRIBUSI</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> BPHTB adalah Bea Perolehan Hak Atas .... </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Terakhir Di edit : 20/02/2082</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i id="demo_logo" class="fas fa-cash-register"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>E-POTENSI</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> BPHTB adalah Bea Perolehan Hak Atas .... </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Terakhir Di edit : 20/02/2082</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i id="demo_logo" class="fas fa-bullhorn"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>WEB PAJAK DAERAH</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> BPHTB adalah Bea Perolehan Hak Atas .... </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Terakhir Di edit : 20/02/2082</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i id="demo_logo" class="fas fa-images"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>E-SPOP</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> BPHTB adalah Bea Perolehan Hak Atas .... </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Terakhir Di edit : 20/02/2082</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i id="demo_logo" class="fas fa-bookmark"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>E-SPTPD</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> BPHTB adalah Bea Perolehan Hak Atas .... </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Terakhir Di edit : 20/02/2082</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i id="demo_logo" class="fas fa-laptop"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>E-DASHBOARD</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> BPHTB adalah Bea Perolehan Hak Atas .... </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Terakhir Di edit : 20/02/2082</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i id="demo_logo" class="fab fa-audible"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>SMS-GATEWAY</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> BPHTB adalah Bea Perolehan Hak Atas .... </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Terakhir Di edit : 20/02/2082</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i id="demo_logo" class="fas fa-sms"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>SIM-PBB</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> BPHTB adalah Bea Perolehan Hak Atas .... </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Terakhir Di edit : 20/02/2082</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i id="demo_logo" class="fas fa-address-book"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>API PEMBAYARAN ONLINE</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> BPHTB adalah Bea Perolehan Hak Atas .... </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Terakhir Di edit : 20/02/2082</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i id="demo_logo" class="fas fa-bacon"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>MONITORING ONLINE TAPPING</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> BPHTB adalah Bea Perolehan Hak Atas .... </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Terakhir Di edit : 20/02/2082</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <i id="demo_logo" class="fas fa-info-circle"></i>
                  </div>
                </div>
              </div> -->
              <!-- <div class="card-footer">
                <div class="text-right">
                  <a href="menudemo/editor.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.4
    </div>
    <strong>Copyright &copy; 2020 <a href="#">Mitra Prima Utama</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/admin/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
</body>
</html>
