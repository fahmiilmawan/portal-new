@extends('master')

@section('konten')
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
   .img{
            width: 100%;
            height: auto;
        }
        .item{
          padding: 10px;
        }
</style>
</head>

  {{-- GALERI  --}}
  <div class="section-title" style="margin-top: 50px;padding-top:25px;">
    <H2>GALERI</H2>
</div>

<div class="container-fluid" style="text-align:center;margin:0px;">
  <div class="row">
    @foreach ($galeri as $g)
      <div class="col-sm-12 col-md-4">
        <div class="item ">
          <a href="assets\img\galeri\{{$g->content}}" class="fancybox" data-fancybox="galeri1">
          <img src="assets\img\galeri\{{$g->content}}" alt="" class="img-fluid" style="width:400px;height:300px;">
        </a>
        </div>
      </div>    
    @endforeach      
  </div>
</div>

{{-- END GALERI --}}
<div class="d-flex justify-content-center">
{{$galeri ->links()}}
</div>
    
@endsection