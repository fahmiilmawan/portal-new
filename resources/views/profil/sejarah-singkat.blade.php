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
    </style>
</head>
<div class="section-title" style="margin-top: 50px;padding-top:80px;" data-aos="fade-up">
    <h2>SEJARAH SINGKAT</h2>
  </div>
  <div class="latar"style="background-color:#eee;">
    <br>
    <br>
<div class="container" data-aos="fade-up" style="padding:50px;background-color:white;">
    <div class="foto" style="text-align: center">
        <h2>SMK LPPM RI BANDUNG</h2>
        <br>
        <img src="assets/img/lppm_ri.png" alt="" class="img-fluid" width="250px"height="345px">
    </div>

    @foreach ($showSejarahSingkat as $sejarahSingkat)
        
    
    <div class="kata">
        <p style="text-align: center"><b>LPPM-RI </b> ( Lembaga Pendidikan & Pengetahuan Masyarakat -Republik Indonesia)</p>
        <p> {{$sejarahSingkat->sejarah_singkat}}
        </p>
       
    </div>
    @endforeach
    
    
</div>
<br>

<br>
</div>

    
@endsection