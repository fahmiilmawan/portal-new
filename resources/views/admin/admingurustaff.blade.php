@extends('admin.master')

@section('main')
<div class="section-header">
  <h1>Guru & Staff</h1>
</div>

<div class="container" style="margin-top: 50px;">

    <a href="/tambahadmingurustaff" class="btn btn-primary mb-3" style="">
      <i class="fas fa-plus"></i>
      Tambah Guru & Staff
    </a>

  @if (session('success'))

  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  
  @endif
  
  @if (session('delete'))
  
    <div class="alert alert-danger" role="alert">
      {{ session('delete') }}
    </div>
  @endif

<div class="card-body" style="width: 70rem; margin: 0 auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <table class="table table-hover">
      <thead>
        <tr>
          {{-- <th scope="col">No</th> --}}
          <th scope="col">NIP</th>
          <th scope="col">Nama Guru</th>
          <th scope="col">Foto Guru</th>
          <th scope="col">Jabatan Guru</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Biodata</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($showAdminGuruStaff as $i => $a)
          <tr>
            <td>{{ $a->nip_guru }}</td>
            <td>{{ $a->nama_guru }}</td>
            <td>
              <img src="{{ asset('assets/img/gurustaff/'.$a->foto_guru) }}" width="70px" height="70px" alt="Image">    
            </td>
            <td>{{ $a->jabatan_guru }}</td>
            <td>{{ $a->mapel_diampu_guru }}</td>
            <td>{{ $a->jenis_kelamin_guru }}</td>
            <td>{{ $a->biodata_guru }}</td>
            <td>
              <a href="/admingurustaff/{{$a->id}}/editadmingurustaff">
                <button class="btn btn-success">
                  <i class="fas fa-pen"></i>
                </button>
              </a>
              <a href="/admingurustaff/{{$a->id}}/deleteadmingurustaff">
                <button class="btn btn-danger">
                  <i class="fas fa-trash"></i>
                </button>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    
  </div>
</div>


@endsection