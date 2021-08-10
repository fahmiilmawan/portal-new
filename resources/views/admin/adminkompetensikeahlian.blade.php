@extends('admin.master')

@section('main')
<div class="section-header">
  <h1>Kompetensi Keahlian</h1>
</div>

<div class="card-body" style="width: 70rem; margin: 0 auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Jurusan</th>
          <th scope="col">Logo</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Gambar Kepala Jurusan</th>
          <th scope="col">Sambutan Kepala Jurusan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach($ as $ ) --}}
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <a href="">
                <button class="btn btn-success">
                  <i class="fas fa-pen"></i>
                </button>
              </a>
              <a href="">
                <button class="btn btn-danger">
                  <i class="fas fa-trash"></i>
                </button>
              </a>
            </td>
          </tr>
        {{-- @endforeach --}}
      </tbody>
    </table>
    
  </div>
</div>


@endsection