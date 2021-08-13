@extends('admin.master')

@section('main')
<div class="section-header">
    <h1>Tambah Foto & Sambutan Kepsek</h1>
</div>

@if (session('status'))
    <<h6 class="alert alert-success">{{session('status')}}</h6>
    
@endif

<form action="/tambahadminkepsek" method="post"  enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Foto Kepala Sekolah</label>
                <input type="file" class="form-control" name="foto_kepsek">
              </div>
              <div class="form-group">
                <label>Sambutan Kepala Sekolah</label>
                <input type="text" class="form-control" name="sambutan_kepsek">
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