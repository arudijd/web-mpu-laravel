@extends('layouts.admin')
@section('container-admin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-4">
          <div class="info-box bg-gradient-primary">
            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Klient</span>
              <span class="info-box-number">121</span>
              <span class="progress-description">
                Klien MPU All Produk
              </span>
            </div>
          </div><!-- end info-box -->
        </div><!-- end col -->
        <div class="col-sm-4">
          <div class="info-box bg-gradient-success">
            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Masukan</span>
              <span class="info-box-number">16</span>
              <span class="progress-description">
                Kritik Dan Saran Web MPU
              </span>
            </div>
          </div><!-- end info-box -->
        </div><!-- end col -->
        <div class="col-sm-4">
          <div class="info-box bg-gradient-warning">
            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Berita</span>
              <span class="info-box-number">3</span>
              <span class="progress-description">
                Informasi dan Berita
              </span>
            </div>
          </div><!-- end info-box -->
        </div><!-- end col -->
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

  <section class="chart">
    <div class="container">
      <!-- DONUT CHART -->
      <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Informasi Pengunjung</h3>
        </div>
        <div class="card-body">
          <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      
    </div>
    </section>
  </div>
<!-- /.content-wrapper -->
@endsection