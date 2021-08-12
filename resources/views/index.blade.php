<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMK LPPM RI BONANG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/index.css" rel="stylesheet">
  <style>
    .artikel{
      display: flex;
    }
    /* .carousel-control-prev-icon{
      border: 0px solid #6777ef;
      width: 50px;
      height: 50px;
      background-color: #6777ef
      
      
      
    } */
    /* .carousel-control-next-icon{
      
      border: 0px solid #6777ef;
      width: 50px;
      height:50px;
      background-color: #6777ef
    } */
    /* .kata{
      border: 0px solid black;
      width:1000px;
      position: absolute;
      top: 200px;
      left: 150px;
      text-align: center;
      background-color: #6777ef;
      color: aliceblue;
      margin: 50px;
      font-size: 60px;
      

    } */
    @media only screen and(max-width:1199px){
    }
    @media only screen and(max-width:991px){
    }
    @media only screen and(max-width:767px){
    }
    @media only screen and(max-width:575px){
    }
    .carousel-item{
      height: 32rem;
      position: relative;
      background-color: black;
      background-position: center;
      background-size: cover;
      
    }
    .container-carousel{
      position: absolute;
      color: white;
      text-align: center;
      padding-right: 50px;
      padding-left: 50px; 
      top: 100px;
      left: 0;
      right: 0;
      padding-bottom: 50px;

    }
    .container-caption{
      object-position: center ;
      
    }
    .overlay-image{
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      top: 0;
      background-position: center;
      background-size: cover;
      opacity: 0.5;
    }
    .h3{
        
    }
        
    
  </style>

  <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
   <header id="header" class="fixed-top "style="background-color: rgba(60, 76, 106, 0.5);">
    <div class="container d-flex align-items-center">
      
      <h1 class="logo mr-auto" style=""><a href="/"><img src="assets/img/lppm_ri.png" alt="" srcset="" style="margin-right:10px;width: 40px;margin-bottom: 10px;">LPPM RI</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class=""><a href="/">Beranda</a></li>
          <li class="drop-down"><a href="/profilsekolah">Profil Sekolah</a>
            <ul>
              <li><a href="/sejarah-singkat">Sejarah Singkat</a></li>
              <li><a href="/visi-misi">Visi & Misi</a></li>
              <li><a href="/guru-staff">Guru & Staff</a></li>
              <li><a href="/kompetensi-keahlian">Kompetensi Keahlian</a></li>
              <li><a href="/ekstrakurikuler">Ekstrakurikuler</a></li>
            </ul>
          </li>
          <li><a href="/list-artikel">Artikel</a></li>
          <li><a href="/galery">Galeri</a></li>
          <li><a href="https://sites.google.com/view/ppdblppmbdg">PPDB</a></li>
          <li class="drop-down"><a href="/pembelajaran">Pembelajaran</a>
            <ul>
              <li><a href="https://elearning.smklppmribdg.sch.id/" target="_blank">E-Learning</a></li>
              <li><a href="https://mail.smklppmribdg.sch.id/" target="_blank">Mail</a></li>
            </ul>
          </li>
          <li><a href="/contact">Hubungi Kami</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      

    </div>
  </header><!-- End Header -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    @foreach ($carousel1 as $a) 
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="5000">
        <div class="overlay-image"style="background-image: url('assets/img/carousel{{$a->gambar}}');">
        
        </div>
         
        <div class="container-carousel">
          <img src="{{ asset('assets/img/carousel/'.$a->gambar) }}" class="img-fluid" width="150px"alt="" style="padding-bottom:25px;" data-aos="fade-up">
        <h2 style="font-size: 50px;" data-aos="fade-up">{{$a->caption}}</h2>   
    </div>
     @endforeach
  </div>
  @foreach ($carousel2 as $a)
    <div class="carousel-item">
      {{-- <div class="overlay-image"style="background-image: url('assets/img/{{$carousel_->content}}');">
        
      </div> --}}
      
      <div class="container-carousel">
        <img src="{{ asset('assets/img/carousel/'.$a->gambar) }}" class="img-fluid" width="150px"alt="" style="padding-bottom:25px;" data-aos="fade-up"> 
      <h2 style="font-size: 50px;" data-aos="fade-up">{{$a->caption}}</h2>
    </div>
  @endforeach
  </div>
</div>
  <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
    <span class="sr-only">Previous</span>
    <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
  </a>
  <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
    <span class="sr-only">Previous</span>
    <span class="carousel-control-next-icon" aria-hidden="true" ></span>
  </a>
</div>
{{-- TAMPILAN PENGUMUMAN  --}}
<div class="section-title">
  <h2 style="padding:40px;">PENGUMUMAN</h2>
</div>

    @foreach ($announce as $a)
    <div class="container" style="" >
    <div class="card" data-aos="fade-up">
        <!--<h5 class="card-header" style="text-align: center;">PENGUMUMAN</h5>-->
        <div class="card-body">
          <p class="card-text" style="text-align: justify;">{{$a->created_at}}</p>
          <p class="card-text" style="text-align: justify;">{{$a->announcement}}</p>

        </div>
      </div>
    </div>
   
    @endforeach
<!--<div class="section-title">-->
<!--  <h2 style="padding:40px;">PENGUMUMAN</h2>-->
<!--</div>-->
<!--@foreach ($announce as $a)-->
<!--  <div class="card" data-aos="fade-up">-->
    <!--<h5 class="card-header" style="text-align: center;">PENGUM</h5>-->
<!--    <div style="text-align:justify;">-->
<!--    <div class="card-body"style="text-align:center;">-->
<!--      <p class="card-text" style="text-align:center;">{{$a->created_at}}</p>-->
<!--      <p class="card-text" style="text-align:center;">{{$a->announcement}}</p>-->
<!--      <small class="form-text text-muted">-->
<!--        SMK LPPM RI BANDUNG-->
<!--      </small>-->
<!--    </div>-->
<!--  </div>-->
<!--  </div>-->
<!--@endforeach-->
{{-- END TAMPILAN PENGUMUMAN --}}

    <!-- ======= About Us Section ======= -->

        <div class="section-title">
          <h2 style="padding:50px;">KEPALA SEKOLAH</h2>
        </div>
        <div class="latar" style="background-color:#eee">
            <br>
            <br>
        <div class="container" style="">
            
            
        <section id="why-us" class="why-us">
          
    
            <div class="row">
    
              <div class="col-sm-5 col-md-8 justify-content-left   order-2 order-lg-1">
    
                <!--<div class="section-title">-->
                <!--  <h3 >KEPALA SEKOLAH</strong></h3>-->
                <!--</div>-->
                
                 <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"> SAMBUTAN KEPALA SEKOLAH <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                      <div class="sambutan" style="text-align:justify;">
                    <p style="text-align:left;">
                      Assalamu'alaikum Warrahmatullahi Wabarakatuh
                      </p>
<br>
Selamat datang di Website Official SMK LPPM RI Bandung
<br\>

SMK LPPM RI Bandung merupakan salah satu sekolah di wilayah Kota Bandung tepatnya di Kecamatan Nilem. Seiring dengan perkembangan teknologi dan informasi, maka saya selaku Kepala Sekolah meresmikan website SMK LPPM RI Bandung sebagai salah satu media informasi bagi masyarakat umum dan khusunya bagi warga sekolah, dimana semua informasi dimuat didalam website ini.

<br>
<p style="text-align:right;"><b>
Bandung, Januari 2021
<br>
Kepala Sekolah


 <br>
 <br>
 <br>

Rd. Neneng Marlina, S.H.,MM
</b>
</p>

                    </p>
                    </div>
                  </div>
                </li>



              </ul>
            </div>
                
          </div>
          <div class="col-sm-7 col-md-4" style="text-align:center;padding-right:px;">
              
                <img src="assets/img/bu_neneng.jpg" alt="" class="img-fluid" width="600px" height="100px">
                
          </div>
          </div>
          </div>
          <br>
          <br>
          </div>

          <!--<div class="col-sm-6 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>-->
       
              <!--  <div class="accordion-list">-->
              <!--    <ul>-->
              <!--      <li>-->
              <!--        <a data-toggle="collapse" class="collapse" href="#accordion-list-1"> SAMBUTAN KEPALA SEKOLAH <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>-->
              <!--        <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">-->
              <!--          <p style=>-->
              <!--            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut sit quod voluptates modi ea accusantium consequuntur ducimus! Fuga deleniti aliquam molestiae quis est repellendus exercitationem, optio modi sapiente eveniet voluptatum?-->
              <!--          </p>-->
              <!--        </div>-->
              <!--      </li>-->
    
    
    
              <!--    </ul>-->
                <!--</div>-->
    
              <!--</div>-->
    
            <!--  <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>-->
            <!--</div>-->
    
     

      
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    {{-- <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>KEPALA SEKOLAH</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"> SAMBUTAN KEPALA SEKOLAH <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut sit quod voluptates modi ea accusantium consequuntur ducimus! Fuga deleniti aliquam molestiae quis est repellendus exercitationem, optio modi sapiente eveniet voluptatum?
                    </p>
                  </div>
                </li>



              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section --> --}}

    <main id="main">


      {{-- Artikel --}}
      <br>
      <div class="section-title">
        <h2>ARTIKEL</h2>
      </div>
      <section class="services section-bg">
        <div class="container" data-aos="fade-up">
          <div class="row">
              
          @foreach($artikel as $a)
          <div class="col-sm-12 col-md-4" data-aos="zoom-in" data-aos-delay="100" style="margin-bottom:50px;">
            
                <div class="card" style="height:500px;">
                    <div class="gambar" style="text-align:center">
  <img class="card-img-top" src="/content/{{$a->thumbnail}}" alt="Card image cap" style="width:300px;margin:25px;">
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$a->title}}</h5>
    <p class="card-text" style="overflow:hidden">{{$a->deskripsi}}</p>
    
  <div class="card-text bg-transparent btn btn-info"><a href="/detail-artikel/{{$a->slug}}">Baca Selengkapnya</a></div>
  </div>
</div>

                <!--<div class="card" style="overflow:visible;;margin-bottom: 50px; max-width:500px;height:300px;">-->
                <!--<img src="/content/{{$a->thumbnail}}"class="card-image-top"max-width="300px" style="" alt="" srcset=""></i>-->
                
                <!--<div class="card-body">-->
                <!--    <h4 class="card-title">{{$a->title}}</h4>-->
                <!--<p class="card-text">{{$a->deskripsi}}</p>-->
                <!--<a href="/detail-artikel/{{ $a->slug }}" class="btn btn-info">Baca</a>    -->
                <!--</div>-->
                <!--</div>-->
              </div>
             
            
            <br>
            <br>
          @endforeach 
          </div>
        </div>
        <div class="tombol" style="text-align:center;padding-top:25px;">
        <a href="/list-artikel" class="btn btn-primary" >Lihat Selengkapnya</a>
      </div>
    </div>
    </section>
  
      {{-- /Artikel --}}

    <!-- ======= Cta Section ======= -->
    <!-- End Cta Section -->


  



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
          
        <div class="row">
            
            <div class="col-sm-2 col-md-2" style="">
                <div class="gambar" style="width:150px;padding-botttom:25px;">
            <img src="assets/img/lppm_ri.png" class="img-fluid" alt="">
            </div>
            </div>
          <div class="col-sm-4 col-md-4 footer-contact" style="">
            <h3>SMK LPPM RI</h3>
            <p>
              Jl. Ters. Nilem Barat No. 49, B No.Kel, Pasirluyu, Kec. Regol, Kota Bandung, Jawa Barat 40254
              <br>
              <strong>Phone:</strong> +62 8139 5101 110 (Agil)<br>
              <strong>Email:</strong> info@smklppmribdg.sch.id<br>
            </p>
          </div>



          <div class="col-sm-6 col-md-6 footer-links">
            <h4>Siapa Kami</h4>
            <p style="text-align:justify;">Sekolah ini menyediakan berbagai fasilitas penunjang pendidikan bagi anak didiknya. Terdapat guru-guru dengan kualitas terbaik yang kompeten dibidangnya, kegiatan penunjang pembelajaran seperti ekstrakurikuler (ekskul), organisasi siswa, komunitas belajar, tim olahraga, dan perpustakaan sehingga siswa dapat belajar secara maksimal. Proses belajar dibuat senyaman mungkin bagi murid dan siswa.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
   

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>TARPAN TECH COMMUNITY</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Developed by <a href="https://smktarpan1.sch.id/">TARPAN TECH COMMUNITY</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>