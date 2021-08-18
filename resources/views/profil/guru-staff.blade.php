@extends('master')
@section('konten')
<head>

    <style>
        .img{
            width: 100%;
            height: auto;
        }
        .kata{
            text-align: justify;
            margin: 15px;
        }
        .card{
            max-width: 250px;
            margin: 20px;
            text-align: center;
            margin-left: 80px;        
        }
        .item{
          padding: 10px;
        }
    </style>
</head>
<div class="section-title" style="margin-top: 50px;padding-top:50px;" data-aos="fade-up" enctype="multipart/form-data">
    <h2>GURU & STAFF</h2>
  </div>
  <br>
  <br>
  <div class="latar"style="background-color:#eee;">
    <h2 style="text-align: center">STAFF</h2>
    <br>
    <br>
    <div class="container-fluid" data-aos="fade-up">
      <div class="row">
        @foreach ($showPageGuru as $guru)    
        <div class="col" style="text-align: center;">
          <div class="item col-sm-12 col-md-12 ">   
            <a href="{{ asset('assets/img/gurustaff/'.$guru->foto_guru) }}" class="fancybox" data-fancybox="galeri1">
            <img src="{{ asset('assets/img/gurustaff/'.$guru->foto_guru) }}" alt="" class="img-fluid" style="max-width:300px;height:400px;"></a>
            <h1 style="font-size:25px;color:#3c4c6a;">{{$guru->nama_guru}}</h1>
            {{-- <h1 style="font-size:25px;color:#3c4c6a;" >{{$guru->mapel_diampu_guru}}</h1>   --}}
          </div>
        </div>
        @endforeach
      </div>
      <br>  
    </div>
    <br>
    <h2 style="text-align: center">Guru</h2>
    <div class="container-fluid" data-aos="fade-up">
      <div class="row">
        @foreach ($showPageGuru as $guru)    
        <div class="col" style="text-align: center;">
          <div class="item col-sm-12 col-md-12 ">   
            <a href="{{ asset('assets/img/gurustaff/'.$guru->foto_guru) }}" class="fancybox" data-fancybox="galeri1">
            <img src="{{ asset('assets/img/gurustaff/'.$guru->foto_guru) }}" alt="" class="img-fluid" style="max-width:300px;height:400px;"></a>
            <h1 style="font-size:25px;color:#3c4c6a;">{{$guru->nama_guru}}</h1>
            <h1 style="font-size:25px;color:#3c4c6a;" >{{$guru->mapel_diampu_guru}}</h1>  
          </div>
        </div>
        @endforeach
      </div>
      <br>
      <div class="d-flex justify-content-center">
     
      </div>    
    </div>
  </div>
<br>
<br>
</div>
@endsection