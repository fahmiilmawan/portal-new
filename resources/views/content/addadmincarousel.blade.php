@extends('admin.master')

@section('main')
<div class="section-header">
    <h1>Tambah Carousel</h1>
</div>

<form action="/tambahadmincarousel" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Caption</label>
                <input type="text" class="form-control" name="caption">
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar">
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