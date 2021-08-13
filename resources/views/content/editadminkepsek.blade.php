@extends('content.mastercontent')

@section('main')
<div class="section-header">
    <h1>Edit Foto / Sambutan Kepala Sekolah</h1>
</div>


<form action="/adminkepsek/{{ $editAdmKp->id }}" method="post" style="" enctype="multipart/form-data">
    @csrf
    @method('PUT')

   <div class="row">

        <div class="col-12 col-md-6 col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Foto Kepala Sekolah</label>
                <input type="file" class="form-control"  name="foto_kepsek">
                <img src="{{ asset('assets/img/kepsek/'.$editAdmKp->foto_kepsek) }}" width="70px" height="70px" alt="Image">
              </div>
              <div class="form-group">
                <label>Sambutan Kepala Sekolah</label>
                <input type="text" class="form-control" value="{{ $editAdmKp->sambutan_kepsek }}" name="sambutan_kepsek">          
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                      Update
                  </button>
                  <a href="/adminkepsek" class="btn btn-primary">Kembali</a>
              </div>
              
            </div>
          </div>
</form>

@endsection