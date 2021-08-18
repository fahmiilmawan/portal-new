@extends('master')
@section('konten')
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <style>
      .img{
          width: 100%;
          height: auto;
      }
      .kata{
          text-align: ;
          margin: 15px;   
      }
      .item{
        padding: 10px;
      }
  </style>
</head>

@foreach( $showSejarahSingkat as $ss)

<div class="section-title" style="margin-top: 50px;padding-top:80px;" data-aos="fade-up">
    <h2>PROFIL SEKOLAH</h2>
  </div>
  <div class="latar"style="background-color:#eee;">
    <br>
    <br>
    <div class="container" style="" >
    <div class="card" data-aos="fade-up">
        <h5 class="card-header" style="text-align: center;font-size:20px;color:#3c4c6a;">SEJARAH SMK LPPM RI</h5>
        <div class="card-body">
          <p class="card-text" style="text-align: justify;"><b>LPPM-RI </b> ( Lembaga Pendidikan & Pengetahuan Masyarakat -Republik Indonesia)
        <br>
        <br> {{$ss -> sejarah_singkat}}</p>
          {{-- <a href="/sejarah-singkat" class="btn btn-primary" style="text-align: left;">Lihat Selengkapnya</a> --}}
        </div>
      </div>
    </div>

@endforeach
@foreach($showVisiMisi as $v)
  

<div class="latar"style="background-color:#eee;">
  <br>
  <br>
  <div class="container" style="" >
  <div class="card" data-aos="fade-up">
      <h5 class="card-header" style="text-align: center;font-size:20px;color:#3c4c6a;">VISI SMK LPPM RI</h5>
      <div class="card-body">
      <br> 
      <p>{{$v-> visi}}</p>
      @endforeach
      </div>
    </div>
    
      
    
    <div class="card" data-aos="fade-up">
      <h5 class="card-header" style="text-align: center;font-size:20px;color:#3c4c6a;">MISI SMK LPPM RI</h5>
      <div class="card-body">
      <br> 
      @foreach($showVisiMisi as $m)
        <br> 
        <p>{{$m-> misi}}</p>
        @endforeach
      </div>
    </div>
  </div>

   

      <div class="section-title" style="margin-top: 50px;padding-top:25px;" data-aos="fade-up">
        <h2>GURU & STAFF</h2>
      </div>
  <div class="latar"style="background-color:#eee;">
    <br>
    <br>
    <div class="container-fluid" data-aos="fade-up">
      <div class="row">

        @foreach ($showGuru as $guru)

        <div class="col" style="">
          <div class="item col-sm-12 col-md-3 ">   
            {{-- <a href="{{$guru->foto_guru}}" class="fancybox" data-fancybox="galeri1"> --}}
            <img src="{{ asset('assets/img/gurustaff/'.$guru->foto_guru) }}" alt="" class="img-fluid" style="max-width:300px;height:350px;"></a>
    
            <h1 style="font-size:25px;color:#3c4c6a;text-align:center;">{{$guru->nama_guru}}</h1>
            <h1 style="font-size:25px;color:#3c4c6a;text-align:center;">{{$guru->mapel_diampu_guru}}</h1>
        </div>

        @endforeach
        <div class="tombol" style="text-align:center;padding:50px;" >
          <a href="/guru-staff" class="btn btn-primary" style="">Lihat Selengkapnya</a>
        </div>
        </div>
        
      </div>
    </div>
   
      <br>
      <br>
@endsection