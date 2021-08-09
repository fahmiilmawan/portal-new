@extends('kompetensi-keahlian.master')
@section('konten')
<head>
    <style>
        /* .img{
            width: 100%;
            height: auto;
        } */
        .kata{
            text-align: justify;
            margin: 15px;
        }
        .container1{
            background-image: url('assets/img/foto2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
            
        }
        .container1, a {
           
            
        }
        .container2{
            width: 100%;
           
        }
        .container3{
          padding: 25px;
          margin: 
        }
    </style>
</head>
<div class="section-title" style="margin-top: 50px;padding-top:80px;">
    <h2>PRAMUKA</h2>
  </div>
 
   
<div class="container1" data-aos="fade-up" style="padding:50px;background-color:white;">

    
    <div class="foto" style="text-align:center;">
        <img src="assets/img/logo1.png" alt="" class="img-fluid" width="200px"height="50px">
        <h2 >PRAMUKA</h2>
        <p style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. A est quo vitae, minus reiciendis eius ducimus cupiditate nostrum corporis animi voluptatum possimus quam? Vel harum mollitia cumque illo non. Obcaecati!</p>
    </div>
    {{-- <a href="" class="btn btn-primary btn-lg">Prestasi Kompetensi</a>  --}}
</div>
<div class="section-title" style="margin-top: 50px;padding-top:80px;">
  <h2>KETUA <br> EKSTRAKURIKULER PRAMUKA</h2>
  
</div>
<div class="container-fluid" data-aos="fade-up" style="border: 0px solid black;margin:0;margin-top:20px;text-align:center;">
  <div class="card mb-3" style="max-width: 100%;text-align:center;">
    <div class="row g-0">
      <div class="col-sm-12 col-md-4">
        <img src="assets/img/people2.jpg" alt="..." style="max-width:800px;height:500px;">
      </div>
      <div class="col-sm-12 col-md-8">
        <div class="card-body" style="text-align:justify;">
          <h5 class="card-title" style="text-align:center;">KETUA <br> EKSTRAKURIKULER PRAMUKA</h5>
          <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur rerum quas maiores impedit iusto ipsa, unde maxime molestiae distinctio id pariatur deleniti error quae minus officiis? Tempore odit maxime voluptas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error reprehenderit nostrum inventore laborum eius, mollitia aspernatur repudiandae explicabo repellendus doloribus ipsum quaerat officiis molestias? Pariatur amet accusamus tempore. Soluta, atque.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container2">
    <div class="section-title"data-aos="fade-up" style="margin-top: 50px;">
        <h2>KEGIATAN EKSTRAKURIKULER</h2>
      </div>
      <div class="carousel1" style="margin-top:">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" style="height:;">
              <img class="d-block w-100" src="assets/img/foto4.jpg" alt="First slide">
             
            </div>
            <div class="carousel-item" style=";">
              <img class="d-block w-100" src="assets/img/foto2.jpg" alt="Second slide">
             
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/img/foto3.jpg" alt="Third slide">
              
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="">
            <span class="carousel-control-prev-icon" aria-hidden="true" style=""></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      
      </div>
    </div>
<br>

<br>
</div>
@endsection