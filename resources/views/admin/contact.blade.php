@extends('layouts.admin')
@section('container-admin')
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
              
              <!-- /.float-right -->
            </div>
            <div class="table-responsive mailbox-messages">
              <table class="table table-hover ">
                <tbody>
                  @foreach ($kritik as $k)
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>  
                  @if ($k->isFavorite==true)
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                  @else
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star"></i></a></td>   
                  @endif
                    <td class="mailbox-name"><a href="menumailbox/read.html">{{ $k->penulis }}</a></td>
                    <td class="mailbox-subject"><b>{{ $k->judul }}</b> - {{ $k->excerpt() }}
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">{{ $k->created_at }}</td>
                  </tr>      
                  @endforeach
                
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
@endsection