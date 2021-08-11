@extends('content.mastercontent')

@section('main')
<div class="section-header">
    <h1>Edit Ekstrakulikuler</h1>
</div>
<a href="/admincarousel" class="btn btn-primary">Kembali</a>

<form action="/admincarousel/{{ $editAdminCarousel->id }}" method="post" style="" enctype="multipart/form-data">
    @csrf
    @method('PUT')

   <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Nama Ekstrakurikuler</label>
                <input type="text" class="form-control" value="{{ $editAdminCarousel->caption }}" name="caption">
              </div>
              <div class="form-group">
                <label>Logo Ekstrakurikuler</label>
                <input type="file" class="form-control" name="gambar">
                <img src="{{ asset('assets/img/carousel/'.$editAdminCarousel->gambar) }}" width="70px" height="70px" alt="Image">    
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