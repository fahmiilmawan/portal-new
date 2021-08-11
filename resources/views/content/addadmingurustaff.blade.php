@extends('admin.master')

@section('main')
<div class="section-header">
    <h1>Tambah Guru & Staff</h1>
</div>

@if (session('status'))
    <h6 class="alert alert-success">{{session('status')}}</h6>
@endif

<form action="/tambahadmingurustaff" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>NIP</label>
                <input type="text" class="form-control" name="nip_guru">
              </div>
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_guru">
              </div>
              <div class="form-group">
                <label>Foto</label>
                <input type="file" class="form-control" name="foto_guru">
              </div>
              <div class="form-group">
                <label>Jabatan</label>
                <input type="text" class="form-control" name="jabatan_guru">
              </div>
              <div class="form-group">
                <label>Mapel Diampu</label>
                <input type="text" class="form-control" name="mapel_diampu_guru">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin_guru">
              </div>
              <div class="form-group">
                <label>Biodata</label>
                <input type="text" class="form-control" name="biodata_guru">
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