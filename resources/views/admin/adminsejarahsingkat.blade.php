@extends('admin.master')

@section('main')

<div class="section-header">
  <h1>Pengaturan Sejarah Singkat</h1>
</div>

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
              <th scope="col">Sejarah Singkat</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($showAdminSejarahSingkat as $i => $d)
              <tr>
                <td>{{ ++$i }}</td>
                
                <td>{{$d->sejarah_singkat}}</td>
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
@foreach ($showAdminSejarahSingkat as $d)
<div class="modal fade" id="exampleModal{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah</h5>
        
      </div>
      <div class="modal-body">
        <form action="/adminsejarahsingkat/{{$d->id}}" method="POST" enctype="multipart/form-data" >
          @csrf
          @method('PUT')
         

          
          {{-- <div class="form-group">
            <input type="file" class="form-control" name="foto">
          </div> --}}
          <div class="form-group">
            <label>Sejarah Singkat</label>
            <textarea class="form-control" name="sejarah_singkat" id="" cols="50" rows="30"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Ubah</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endforeach


{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
<script>
  CKEDITOR.replace('editorSejarahSingkat', {
  filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
  })

</script>
@endsection