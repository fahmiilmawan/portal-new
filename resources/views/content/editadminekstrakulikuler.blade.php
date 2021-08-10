@extends('content.mastercontent')

@section('main')
<div class="section-header">
    <h1>Edit Ekstrakulikuler</h1>
</div>
<a href="/adminekstrakulikuler" class="btn btn-primary">Kembali</a>

<form action="/adminekstrakulikuler/{{ $editAdminEkstrakulikuler->id }}" method="post" style="" enctype="multipart/form-data">
    @csrf
    @method('PUT')

   <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Nama Ekstrakurikuler</label>
                <input type="text" class="form-control" value="{{ $editAdminEkstrakulikuler->nama_ekstrakulikuler }}" name="nama_ekstrakulikuler">
              </div>
              <div class="form-group">
                <label>Logo Ekstrakurikuler</label>
                <input type="file" class="form-control" name="logo_ekstrakulikuler">
                <img src="{{ asset('assets/img/ekstrakulikuler/'.$editAdminEkstrakulikuler->logo_ekstrakulikuler) }}" width="70px" height="70px" alt="Image">    
              </div>
              <div class="form-group">
                <label>Keterangan Ekstrakurikuler</label>
                <input type="text" class="form-control" value="{{ $editAdminEkstrakulikuler->keterangan_ekstrakulikuler }}" name="keterangan_ekstrakulikuler">
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