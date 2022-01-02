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
      <li class="nav-item">
        <a href="/" class="nav-link">
          <i class="nav-icon fas fa-undo text-info"></i>
          <p>Kembali Ke Website</p>
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
    <a href="/dashboard" class="brand-link">
      <img src="{{ asset('img/logo.png') }}"
           alt=""
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin MPU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ ($title === "Dashboard" ? 'active' : '') }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-header text-danger">INFORMATION</li>
          <li class="nav-item">
            <a href="/dashboard/client" class="nav-link {{ ($title === "Klien" ? 'active' : '') }}">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Klient MPU
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/dashboard/kontak" class="nav-link {{ ($title === "Kontak" ? 'active' : '') }}">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Kontak MPU
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/dashboard/produk" class="nav-link {{ ($title === "Produk" ? 'active' : '') }}">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Produk
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>