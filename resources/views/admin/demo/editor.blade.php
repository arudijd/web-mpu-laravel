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
  <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('css/summernote/summernote-bs4.css') }}">
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
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
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
      </li>
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
      <img src="../../img/logo.png"
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
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
          <li class="nav-item has-treeview">
            <a href="../index3.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-header text-danger">INFORMATION</li>
          <li class="nav-item has-treeview">
            <a href="../klient.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Klient MPU
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="../kontak.html" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Kontak MPU
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="../berita.html" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Information & News
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="../demo.html" class="nav-link active">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Demo
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-header text-danger">Akun</li>
          <li class="nav-item">
            <a href="../akun.html" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Ganti Password</p>
            </a>
          </li>
          <li class="nav-header text-warning">Website</li>
          <li class="nav-item">
            <a href="../../index.html" class="nav-link">
              <i class="nav-icon fas fa-undo text-info"></i>
              <p>Kembali Ke Website</p>
            </a>
          </li>
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
            <h1>Demo</h1>
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
      <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Header Blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Masukan Judul Navbar dan Blog</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-BPHTB">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Masukan Deskripsi Awal</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-BPHTB adalah layanan perpajakan tentang transaksi jual beli tanah dan atau bangunan yang terintegrasi secara online">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Gambar Alur Aplikasi</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
        </div>
              <!-- /.card-body -->
       </div>
            <!-- /.card -->
    


        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Edit Isi Blog Demo
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          PENGERTIAN BPHTB
                          
                          Bea Perolehan Hak atas Tanah dan Bangunan adalah pungutan atas perolehan hak atas tanah dan atau bangunan. Perolehan hak atas tanah dan atau bangunan adalah perbuatan atau peristiwa hukum yang mengakibatkan diperolehnya hak atas dan atau bangunan oleh orang pribadi atau badan.
                          </textarea>
              </div>
            </div>
          </div>
        </div>

       <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Area Feature</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form role="form">
            <div class="row">
              <div class="col-sm-4">
                <!-- textarea -->
                <div class="form-group">
                  <label>Feature 1</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
              </div>
              <div class="col-sm-4">
                <!-- textarea -->
                <div class="form-group">
                  <label>Feature 2</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
              </div>
              <div class="col-sm-4">
                <!-- textarea -->
                <div class="form-group">
                  <label>Feature 3</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Feature 4</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                </div>
                <div class="col-sm-4">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Feature 5</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                </div>
                <div class="col-sm-4">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Feature 6</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                </div>
                <div class="card-footer">
                    <a href="../demo.html"><button class="btn btn-primary">Simpan Semua</button></a>
                  </div>
              </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

        
    
      <!-- ./row -->
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
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>
