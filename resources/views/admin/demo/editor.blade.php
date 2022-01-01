@extends('layouts.admin')
@section('container-admin')
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
@endsection