@extends('kompetensi-keahlian.master')
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

  

    

@foreach($showVisiMisi as $v)
    

<div class="section-title" style="margin-top: 50px;padding-top:80px;" data-aos="fade-up">
    <h2>VISI & MISI</h2>
  </div>
  <div class="latar"style="background-color:#eee;">
    <br>
    <br>
<div class="container" data-aos="fade-up" style="padding:50px;background-color:white;">

    
    <div class="foto" style="text-align: center">
        <h2 > VISI & MISI</h2>
        <h2> SMK LPPM RI BANDUNG</h2>
        <img src="assets/img/foto2.jpg" alt="" class="img-fluid" width="600px"height="345px">
    </div>
    <div class="kata">
        <p>{{$v->content}} </p>
    </div>
    @endforeach    
    
</div>
<br>

<br>
</div>

    
@endsection