@extends('layouts.admin')
@section('container-admin')
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
                      <a href="/dashboard/produk/edit" class="btn btn-sm btn-primary">
                        <i class="fas fa-user"></i> Edit
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        
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
@endsection