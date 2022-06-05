@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Dashboard</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <a class="btn btn-app bg-secondary" href="{{ url('User') }}">Daftar User</a>
                <a class="btn btn-app bg-success" href="{{ url('User/create') }}">Tambah User</a>
                <a class="btn btn-app bg-danger" href="{{ url('Buku') }}">Daftar Buku</a>
                <a class="btn btn-app bg-info" href="{{ url('Buku/create') }}">Tambah Buku</a>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
</div>
@endsection