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
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item list-inline-item" style="color: #1991EB">
            <a href="\" class="nav-link">
              <span class="fa-li">
                <i class="nav-icon fas fa-undo text-info ml-4"></i>
              </span>&nbsp; Kembali Ke Website
            </a>
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
    <a href="index3.html" class="brand-link">
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
            <a href="/dashboard/produk" class="nav-link">
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
          <h1>Inbox</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Inbox</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Folders</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item active">
                <a href="#" class="nav-link">
                  <i class="fas fa-inbox"></i> Inbox
                  <span class="badge bg-primary float-right">12</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-envelope"></i> Reply
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-trash-alt"></i> Trash
                </a>
              </li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Inbox</h3>

            <div class="card-tools">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search Mail">
                <div class="input-group-append">
                  <div class="btn btn-primary">
                    <i class="fas fa-search"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                <a href="menumailbox/compose.html" ><button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button></a>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
              </div>
              <!-- /.btn-group -->
              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
              <div class="float-right">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.float-right -->
            </div>
            <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tbody>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check1">
                      <label for="check1"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">5 mins ago</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check2">
                      <label for="check2"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                  <td class="mailbox-date">28 mins ago</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check3">
                      <label for="check3"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                  <td class="mailbox-date">11 hours ago</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check4">
                      <label for="check4"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">15 hours ago</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check5">
                      <label for="check5"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                  <td class="mailbox-date">Yesterday</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check6">
                      <label for="check6"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                  <td class="mailbox-date">2 days ago</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check7">
                      <label for="check7"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                  <td class="mailbox-date">2 days ago</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check8">
                      <label for="check8"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">2 days ago</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check9">
                      <label for="check9"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">2 days ago</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check10">
                      <label for="check10"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">2 days ago</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check11">
                      <label for="check11"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                  <td class="mailbox-date">4 days ago</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check12">
                      <label for="check12"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">12 days ago</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check13">
                      <label for="check13"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                  <td class="mailbox-date">12 days ago</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check14">
                      <label for="check14"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                  <td class="mailbox-date">14 days ago</td>
                </tr>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check15">
                      <label for="check15"></label>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                  <td class="mailbox-name"><a href="menumailbox/read.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                  <td class="mailbox-date">15 days ago</td>
                </tr>
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.card-body -->
          </div>
          </div>
          </section>
          </div>

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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
