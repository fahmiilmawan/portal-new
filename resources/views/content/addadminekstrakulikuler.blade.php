@extends('admin.master')

@section('main')
<div class="section-header">
    <h1>Tambah Ekstrakurikuler</h1>
</div>

@if (session('status'))
    <<h6 class="alert alert-success">{{session('status')}}</h6>
    
@endif

<form action="/tambahadminekstrakulikuler" method="post"  enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Nama Ekstrakurikuler</label>
                <input type="text" class="form-control" name="nama_ekstrakulikuler">
              </div>
              <div class="form-group">
                <label>Logo Ekstrakurikuler</label>
                <input type="file" class="form-control" name="logo_ekstrakulikuler">
              </div>
              <div class="form-group">
                <label>Keterangan Ekstrakurikuler</label>
                <input type="text" class="form-control" name="keterangan_ekstrakulikuler">
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                      Tambah
                  </button>
              </div>
            </div>
          </div>
</form>

@endsection