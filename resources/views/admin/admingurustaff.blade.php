@extends('admin.master')

@section('main')
<div class="section-header">
  <h1>Guru & Staff</h1>
</div>

<div class="card-body" style="width: 70rem; margin: 0 auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIP</th>
          <th scope="col">Nama Guru</th>
          <th scope="col">Jabatan Guru</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Biodata</th>
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