@extends('layouts.admin')
@section('container-admin')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Produk</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Produk  </li>
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
              <h3 class="card-title">Edit Detil Blog</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/dashboard/produk/{{ $detil->slug }}/edit" method="post" enctype="multipart/form-data">

              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Masukan Judul Produk</label>
                  <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1" placeholder="{{ $detil->nama_produk }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Masukan Deskripsi Produk</label>
                  <input type="text" name="deskripsi_produk" class="form-control" id="exampleInputEmail1" placeholder="{{ $detil->excerpt() }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Gambar Produk</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image_produk" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleTextArea">Edit Tujuan Produk</label>
                  <div class="card-body ">
                    <div class="">
                      <textarea class="textarea" placeholder="Place some text here" name="tujuan"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                {{ $detil->tujuan }}
                                </textarea>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-primary" type="submit">Simpan Semua</button>
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
  


     

     

      
  
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
@endsection
@push('editor')
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
@endpush