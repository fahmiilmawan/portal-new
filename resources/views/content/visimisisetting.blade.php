@extends('admin.master')

@section('main')

<div class="section-header">
  <h1>Pengaturan Visi & Misi</h1>
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
              <th scope="col">Visi</th>
              <th scope="col">Misi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($showAdminVisiMisi as $i => $d)
              <tr>
                <td>{{ ++$i }}</td>
                {{-- <td><img src="assets/img/{{ $d->img }}" alt="" srcset="" width="250"></td> --}}
                <td>{{$d->content}}</td>
                <td></td>
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
@foreach ($showAdminVisiMisi as $d)
<div class="modal fade" id="exampleModal{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>
      <div class="modal-body">
        <form action="/pengaturan-visimisi/{{$d->id}}" method="POST" enctype="multipart/form-data" >
          @csrf
          @method('PUT')
         

          
          {{-- <div class="form-group">
            <input type="file" class="form-control" name="foto">
          </div> --}}
          <div class="form-group">
            <label>Visi</label>
            <textarea class="form-control" name="content" id="" cols="50" rows="30"></textarea>
          </div>
          <div class="form-group">
            <label>Misi</label>
            <textarea class="form-control" name="content" id="" cols="50" rows="30"></textarea>
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

{{-- <form action="" method="post">
  @csrf

  <div class="row">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <label>Visi</label>
            <textarea class="form-control" name="pengunguman" id="" cols="50" rows="30"></textarea>
          </div>
          <div class="form-group">
            <label for="">Status artikel</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="cek1" value="publish">
                <label class="form-check-label" for="cek1">
                  Publish
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="cek2" value="draft">
                <label class="form-check-label" for="cek2">
                  Draft
                </label>
            </div>
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-plus"></i>
                  Tambah
              </button>
          </div>
        </div>
      </div>

</form> --}}

{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
<script>
  CKEDITOR.replace('visiMisi', {
  filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
  })

  // $(document).ready(function(){

  //   $('body').on('submit', '#submitform', function(e){
  //     e.preventDefault();

  //     $.ajax({
  //       url: $(this).attr('action'),
  //       data: new FormData(this),
  //       type: 'POST',
  //       contentType: false,
  //       cache: false,
  //       processData: false,
  //       success: function(data){
  //         alert(data.msg);
  //       }
  //     })
  //   })

  // })
</script>
@endsection