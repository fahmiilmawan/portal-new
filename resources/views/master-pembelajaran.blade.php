<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMK LPPM RI BANDUNG</title>
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

  <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .wrapper{
      display:grid;
      grid-template-columns: 80% 20%;
      border: 1px solid black;
      margin: 0px;
    }
    .wrapper h1{
      padding: 25px;
    }
    .wrapper h4{
      padding-bottom: 20px; 
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top "style="background-color: rgba(60, 76, 106, 0.5);">
    <div class="container d-flex align-items-center">
      
      <h1 class="logo mr-auto" style=""><a href="/"><img src="assets/img/logo1.png" alt="" srcset="" style="margin-right:10px;width: 40px;margin-bottom: 10px;">LPPM RI</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class=""><a href="/">Beranda</a></li>
          <li class="drop-down"><a href="/profil">Profil Sekolah</a>
            <ul>
              <li><a href="/sejarah-singkat">Sejarah Singkat</a></li>
              <li><a href="/visi-misi">Visi & Misi</a></li>
              <li><a href="/guru-staff">Guru & Staff</a></li>
              <li><a href="/kompetensi-keahlian">Kompetensi Keahlian</a></li>
            </ul>
          </li>
          <li><a href="/list-artikel">Artikel</a></li>
          <li><a href="/galery">Galeri</a></li>
          <li class="drop-down"><a href="/pembelajaran">Pembelajaran</a>
            <ul>
              <li><a href="https://elearning.smklppmribdg.sch.id/" target="_blank">E-Learning</a></li>
              <li><a href="https://mail.smklppmribdg.sch.id/" target="_blank">E-Raport</a></li>
            </ul>
          </li>
          <li><a href="/contact">Hubungi Kami</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  {{-- <div class="container1" data-aos="fade-up" style="padding:50px;background-color: #37517e;height:400px;color:white;
  background-image:url('assets/img/foto3.jpg');background-size:cover;background-repeat:no-repeat;">

    
    <div class="foto" style="text-align: center">
        <img src="assets/img/logo1.png" alt="" class="img-fluid" width="150px"height="50px" style="padding-top:50px;padding-bottom:20px;">
        <h1 >PEMBELAJARAN</h1>
        </div>
    
</div> --}}
  {{-- <section id="hero" class="d-flex align-items-center">

    <div class="container" >
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>SMK LPPM RI </h1>
          <h2><u>Jl. Ters. Nilem Barat No. 49, B No.Kel, Pasirluyu, Kec. Regol, Kota Bandung, Jawa Barat 40254</h2></u>
          <div class="d-lg-flex">
           </div> <u></u>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          
          <img src="assets/img/logo1.png" class="" alt="" style="width:250px;margin-left: 100px;margin-bottom: 50px;">
         
        </div>
      </div>
    </div>

  </section> --}}

  <!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    
    <!-- End Cliens Section -->
    <h1></h1>

    @yield('konten')
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
