@extends('content.mastercontent')

@section('main')
<div class="section-header">
    <h1>Edit Guru Staff</h1>
</div>
<a href="/admingurustaff" class="btn btn-primary">Kembali</a>

<form action="/admingurustaff/{{ $editAdminGuruStaff->id }}" method="post" style="" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>NIP</label>
                <input type="text" class="form-control" value="{{ $editAdminGuruStaff->nip_guru }}" name="nip_guru">
              </div>
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" value="{{ $editAdminGuruStaff->nama_guru }}"  name="nama_guru">
              </div>
              <div class="form-group">
                <label>Foto</label>
                <input type="file" class="form-control" name="foto_guru">
                <img src="{{ asset('assets/img/gurustaff/'.$editAdminGuruStaff->foto_guru) }}" width="70px" height="70px" alt="Image">    
              </div>
              <div class="form-group">
                <label>Jabatan</label>
                <input type="text" class="form-control" value="{{ $editAdminGuruStaff->jabatan_guru }}"  name="jabatan_guru">
              </div>
              <div class="form-group">
                <label>Mapel Diampu</label>
                <input type="text" class="form-control" value="{{ $editAdminGuruStaff->mapel_diampu_guru }}"  name="mapel_diampu_guru">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <input type="text" class="form-control" value="{{ $editAdminGuruStaff->jenis_kelamin_guru }}"  name="jenis_kelamin_guru">
              </div>
              <div class="form-group">
                <label>Biodata</label>
                <input type="text" class="form-control"  value="{{ $editAdminGuruStaff->biodata_guru }}" name="biodata_guru">
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                      Update
                  </button>
              </div>
            </div>
          </div>
</form>

@endsection