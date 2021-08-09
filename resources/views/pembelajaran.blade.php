@extends('kompetensi-keahlian.master')
@section('konten')
<head>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 {{-- FANCY BOXXXX --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .item{
        margin: 0px;
        padding: 50px;
    }
</style>
</head>

<div class="section-title" style="margin-top: 50px;padding-top:80px;">
    <H2>PEMBELAJARAN</H2>
</div>
    <div class="latar" style="background-color: #eee;padding:100px;">
    <div class="container" style="">
        <div class="row" data-aos="fade-up">
          <div class="col-sm-12 col-md-6" style="padding: 20px;">
            <div class="card" style="max-width:350px;">
                <h4 class="card-text" style="margin:25px;">E-LEARNING</h4>
                <div class="icon" style="text-align: center;"><img class="card-img-top" src="assets/img/lppm_ri.png" style="max-width: 200px;" alt="Card image cap">
                </div>
                  <div class="card-body">
                  <h5 class="card-title">E-LEARNING</h5>
                  <p class="card-text" style="text-align: justify;"><b>E-LEARNING</b> adalah suatu sistem atau konsep pendidikan yang memanfaatkan teknologi informasi dalam proses belajar mengajar..</p>
                  <a href="https://elearning.smklppmribdg.sch.id/" class="btn btn-primary">LOGIN E-LEARNING</a>
                </div>
              </div>
          </div>
  <div class="col-sm-12 col-md-6" style="padding: 20px;">
    <div class="card" style="max-width:350px;">
        <h4 class="card-text" style="margin:25px;">MAIL</h4>
        <div class="icon" style="text-align: center;"><img class="card-img-top" src="assets/img/lppm_ri.png" style="max-width: 200px;" alt="Card image cap">
        </div>
          <div class="card-body">
          <h5 class="card-title">MAIL</h5>
          <p class="card-text" style="text-align: justify;"><b>MAIL</b> yang merupakan singkatan dari electronic mail sangat memungkinkan seseorang agar dapat mengirimkan pesan atau sebuah file dengan lebih efektif dan efisien, murah serta lebih cepat.</p>
          <a href="https://mail.smklppmribdg.sch.id/" class="btn btn-primary">LOGIN MAIL</a>
        </div>
      </div>
  </div>

<!--<div class="col-sm-12 col-md-4" style="padding: 20px;">-->
<!--  <div class="card" style="max-width:350px;">-->
<!--      <h4 class="card-text" style="margin:25px;">PPDB</h4>-->
<!--      <div class="icon" style="text-align: center;"><img class="card-img-top" src="assets/img/lppm_ri.png" style="max-width: 200px;" alt="Card image cap">-->
<!--      </div>-->
<!--        <div class="card-body">-->
<!--        <h5 class="card-title">PPDB</h5>-->
<!--        <p class="card-text" style="text-align: justify;"><b>PPDB</b> adalah sebuah sistem yang dirancang untuk melakukuan seleksi secara otomatis mulai dari proses pendaftaran, proses seleksi hingga pengumuman seleksi yang dilakukan secara online dan berbasis waktu nyata (realtime).</p>-->
<!--        <a href="https://sites.google.com/view/ppdblppmbdg" class="btn btn-primary">LOGIN PPDB</a>-->
<!--      </div>-->
<!--    </div>-->
<!--</div>-->
    

</div>
</div>
    </div>



@endsection