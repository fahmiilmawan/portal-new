@extends('admin.master')

@section('main')

<div class="section-header">
  <h1>Pengaturan foto carousel</h1>
</div>

{{-- Tabel --}}

<div class="container">
@if (session('success'))

<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>

@endif
  
  <div class="card-body" style="width: 70rem; margin: 0 auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($carousel as $i => $d)
            <tr>
              <td>{{ ++$i }}</td>
              <td><img src="assets/img/{{ $d->content }}" alt="" srcset="" width="250"></td>
              <td>
                  <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{$d->id}}">
                    <i class="fas fa-pen"></i>
                  </button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  
  {{-- /Tabel --}}
</div>

<!-- Modal -->
@foreach ($carousel as $d)
<div class="modal fade" id="exampleModal{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/pengaturan-carousel-update/{{$d->id}}" method="POST" enctype="multipart/form-data" >
          @csrf
          @method('PUT')

          <div class="form-group">
            <input type="file" class="form-control" name="carousel">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Ubah foto</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endforeach

@endsection