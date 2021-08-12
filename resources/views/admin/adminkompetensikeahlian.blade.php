@extends('admin.master')

@section('main')
<div class="section-header">
  <h1>Kompetensi Keahlian</h1>
</div>

<div class="card-body" style="width: 70rem; margin: 0 auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" enctype="multipart/form-data">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Jurusan</th>
          <th scope="col">Logo</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Foto Kepala Jurusan</th>
          <th scope="col">Sambutan Kepala Jurusan</th>
          <th scope="col">Foto Kegiatan Jurusan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($showKompetensiKeahlian as $i => $a)
          <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $a->nama_jurusan }}</td>
            <td><img src="{{ asset('assets/img/kompetensikeahlian/'.$a->logo_jurusan) }}" width="70px" height="70px" alt="Image">    </td>         
            <td>{{ $a->keterangan }}</td>
            <td><img src="{{ asset('assets/img/kompetensikeahlian/'.$a->foto_kepala_jurusan) }}" width="70px" height="70px" alt="Image">    </td>
            <td>{{ $a->sambutan_kepala_jurusan }}</td>
            <td><img src="{{ asset('assets/img/kompetensikeahlian/'.$a->foto_kegiatan_jurusan) }}" width="70px" height="70px" alt="Image">    </td>       
            <td>
              <a href="/adminkompetensikeahlian/{{$a->id}}/editadminkompetensikeahlian">
                <button class="btn btn-success">
                  <i class="fas fa-pen"></i>
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