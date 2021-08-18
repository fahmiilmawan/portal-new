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
        <div class="col-12 col-md-6 col-lg-12">
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
                  <input type="text" name="jabatan_guru" class="form-control "value="{{ $editAdminGuruStaff->jabatan_guru }}"readonly></option>
                </select>
              </div>
              <div class="form-group">
                @if($editAdminGuruStaff->jabatan_guru == 'Guru') 
                  <label>Mapel Diampu</label>
                  <input type="text" class="form-control" value="{{ $editAdminGuruStaff->mapel_diampu_guru }}" @if($editAdminGuruStaff->jabatan_guru=='Staff')readonly @endif  name="mapel_diampu_guru">
                @else
                
                @endif
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin_guru" id="" class="form-control" value="{{ $editAdminGuruStaff->jenis_kelamin_guru }}">
                <option value="L" @if($editAdminGuruStaff->jenis_kelamin_guru == 'L') echo selected @endif
                  >L</option>
                  
                <option value="P" @if($editAdminGuruStaff->jenis_kelamin_guru == 'P') echo selected @endif >
                  P</option>
                </select>
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