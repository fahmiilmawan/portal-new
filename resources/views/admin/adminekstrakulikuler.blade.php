@extends('admin.master')

@section('main')
<div class="section-header">
  <h1>Ekstrakurikuler</h1>
</div>

<div class="container" style="margin-top: 50px;">

    <a href="/tambahadminekstrakulikuler" class="btn btn-primary mb-3" style="">
      <i class="fas fa-plus"></i>
      Tambah Ekstrakurikuler
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
          <th scope="col">No</th>
          <th scope="col">Nama Ekstrakurikuler</th>
          <th scope="col">Logo</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($showAdminEkstrakuliker as $i => $a )
          <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $a->nama_ekstrakulikuler }}</td>
            <td>{{ $a->logo_ekstrakulikuler }}</td>
            <td>{{ $a->keterangan_ekstrakulikuler}}</td>
            <td>
              <a href="/adminekstrakulikuler/{{$a->id}}/editadminadminekstrakulikuler">
                <button class="btn btn-success">
                  <i class="fas fa-pen"></i>
                </button>
              </a>
              <a href="/adminekstrakulikuler/{{$a->id}}/deleteadminadminekstrakulikuler">
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