@extends('admin.master')

@section('main')
<div class="section-header">
  <h1>Tambah Pengunguman</h1>
</div>

<form action="/addannounce-process" method="post">
  @csrf

  <div class="row">
      <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label>Pengunguman</label>
              <textarea class="form-control" name="pengunguman" id="" cols="50" rows="30"></textarea>
            </div>
            <div class="form-group">
              <label for="">Status artikel</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="cek1" value="publish">
                  <label class="form-check-label" for="cek1">
                    Publish
                  </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="cek2" value="draft">
                  <label class="form-check-label" for="cek2">
                    Draft
                  </label>
              </div>
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