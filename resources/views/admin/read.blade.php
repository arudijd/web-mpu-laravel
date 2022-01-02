@extends('layouts.admin')
@section('container-admin')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Read Message</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Read Message</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="/dashboard/kontak" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

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
                      <a href="/dashboard/kontak" class="nav-link">
                        <i class="fas fa-inbox"></i> Inbox
                        <span class="badge bg-primary float-right">12</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/dashboard/kontak/favorite" class="nav-link">
                        <i class="fas fa-star"></i> Favorite
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
              <h3 class="card-title">Read Mail</h3>

              <div class="card-tools">
                <form action="/dashboard/kontak/{{ $kritik->id_kritik }}" method="post">
                    @csrf
                <button type="submit" name="buttonDelete" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                    <i class="far fa-trash-alt"></i></button>
                <button type="submit" name="buttonFav" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Favorite">
                    @if ($kritik->isFavorite == true)
                    <i class="fas fa-star text-warning"></i></button>    
                    @else
                    <i class="far fa-star "></i></button>
                    @endif 
                    
                
                    </form>
            
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5>{{ $kritik->judul }} <span class="mailbox-read-time float-right">{{ $kritik->created_at }}</span></h5>
                <h6>From: {{ $kritik->penulis }} ({{ $kritik->email }})
                  </h6>
              </div>
              <!-- /.mailbox-read-info -->
              
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                {{ $kritik->body }}
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-white">
            
            </div>
            <!-- /.card-footer -->

            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection