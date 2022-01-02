@extends('layouts.admin')
@section('container-admin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Klient MPU</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Klient MPU</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

 <!-- Main content -->
 <section class="content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Kolom</th>
                <th>Nama Kab</th>
                <th>Jenis Pulau</th>
                <th>Tanggal Ditambahkan</th>
              </tr>
            </thead>
            <tbody>
              @foreach($clients as $client)
              <tr>
                <td>{{ $client->id_klien }}</td>
                <td>{{ $client->nama_kota }}</td>
                <td>{{ $client->nama_pulau }}</td>
                <td>{{ $client->created_at }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>

</section><br>
<!-- /.content -->

  <section class="form-klient">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form action="/dashboard/client" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card card-primary collapsed-card">
            <div class="card-header">
              <h3 class="card-title">Edit</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="form-group">
                <label for="inputStatus">Pilih Yang Diedit</label>
                    <select class="form-control custom-select" name="kota_lama">
                      <option selected disabled>Select one</option>
                      @foreach($clients as $client)
                      <option>{{ $client->nama_kota }}</option>
                      @endforeach
                    </select>
              </div>
              <div class="form-group">
                <label for="inputName">Nama Kabupaten</label>
                <input type="text" name="nama_kota" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputStatus">Pilih Jenis Pulau</label>
                    <select class="form-control custom-select" name="nama_pulau">
                      <option selected disabled>Select one</option>
                      <option>Sumatra</option>
                      <option>Jawa</option>
                      <option>Sulawesi</option>
                      <option>Papua</option>
                      <option>Kalimantan</option>
                    </select>
              </div>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="img_klien">
                  <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                </div>
              </div>
            </div>
          </form>
             
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="formEdit">Save</button>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
        <div class="col-md-12">
          <form action="/dashboard/client" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card card-primary collapsed-card">
            <div class="card-header">
              <h3 class="card-title">Tambah</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            
            <div class="card-body">
              
              <div class="form-group">
                <label for="inputName">Nama Kabupaten</label>
                <input type="text" name="nama_kota" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputStatus">Pilih Jenis Pulau</label>
                    <select class="form-control custom-select" name="nama_pulau">
                      <option selected disabled>Select one</option>
                      <option>Sumatra</option>
                      <option>Jawa</option>
                      <option>Sulawesi</option>
                      <option>Papua</option>
                      <option>Kalimantan</option>
                    </select>
              </div>
              
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="img_klien">
                  <label class="custom-file-label" for="inputFile">Pilih Gambar</label>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="formAdd">Tambah</button>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </form>
        <!-- /.card -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection