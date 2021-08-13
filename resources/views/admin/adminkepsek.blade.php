@extends('admin.master')

@section('main')
<div class="section-header">
  <h1>Kepala Sekolah</h1>
</div>

<div class="container" style="margin-top: 50px;">

    <a href="/tambahadminkepsek" class="btn btn-primary mb-3" style="">
      <i class="fas fa-plus"></i>
      Tambah
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
          <th scope="col">Foto Kepala Sekolah</th>
          <th scope="col">Sambutan</th>
        </tr>
      </thead>
      <tbody>
        @foreach($showAdmKepsek as $i => $a)
          <tr>
            <td>{{ ++$i }}</td>
            <td>
                <img src="{{ asset('assets/img/kepsek/'.$a->foto_kepsek) }}" width="70px" height="70px" alt="Image">    
            </td>
            <td>{{ $a->sambutan_kepsek }}</td>
            <td>
              <a href="/adminkepsek/{{$a->id}}/editadminkepsek">
                <button class="btn btn-success">
                  <i class="fas fa-pen"></i>
                </button>
              </a>
              <a href="/adminkepsek/{{$a->id}}/deleteadminkepsek">
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