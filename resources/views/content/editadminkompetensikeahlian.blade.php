@extends('content.mastercontent')

@section('main')

<form action="" method="post" style="" enctype="multipart/form-data">
    <div class="" style="width:2000px">
      <div class="row" style="">
          <div class="col-sm-3 col-md-6 ">
            <div class="card">
              <div class="card-body">
                <div class="section-header">
                    <h3>Edit Kompetensi Keahlian</h3>
                </div>
                <div class="form-group">
                  <label>No</label>
                  <input type="text" class="form-control" name="title" value="" readonly>
                </div>
                    <div class="form-group">
                        <label for="">Nama Jurusan</label>
                        <br>
                        <input type="text" class="form-control" name="" id="">
                    </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" name="" id="" class="form-control" value="" >
                        </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <br>
                                <textarea name="" class ="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                                <div class="form-group">
                                    <label>Foto Kepala Program</label>
                                    <input type="file" name="" id="" class="form-control" value="" >
                                </div>
                                    <div class="form-group">
                                        <label for="">Sambutan Kepala Program</label>
                                        <br>
                                        <textarea name="" class ="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                        <div class="form-group">
                                            <label>Foto Kegiatan Program</label>
                                            <input type="file" name="" id="" class="form-control" value="" >
                                        </div>
                                             <div class="form-group">
                                                <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-plus"></i>
                                                Update
                                            </button>
                                            <a href="/adminkompetensikeahlian" class="btn btn-danger">Batal</a>
                {{-- <div class="form-group">
                  <label for="">Kategori</label>
                  <select id="inputState" class="form-control" name="category" style="width: 55rem"> 
                      @foreach ($edit as $t)
                        <option name="category" value="{{ $t->title }}" required>{{ $t->title }}</option>    
                      @endforeach
                  </select>
                  <small class="form-text text-muted">
                    Pilih kategori sesuai isi artikel
                  </small>
                </div>
                <div class="form-group">
                  <label for="">Status artikel</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="cek1" value="publish" required>
                      <label class="form-check-label" for="cek1">
                        Publish
                      </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="cek2" value="draft" required>
                      <label class="form-check-label" for="cek2">
                        Draft
                      </label>
                  </div>
                </div>
                <div class="form-group">
                  <textarea name="konten" id="content">{{$artikel->content}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                      <i class="fas fa-plus"></i>
                        Update
                    </button>
                </div>
              </div>
            </div>
          </div> - --}}
</form>
@endsection
