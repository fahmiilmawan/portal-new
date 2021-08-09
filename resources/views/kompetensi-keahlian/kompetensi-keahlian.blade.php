@extends('kompetensi-keahlian.master')
@section('konten')
<head>
<style>
  .section-title{
    position: relative;
    padding-top:80px;
    
  }
</style>
</head>

<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up" style="">

    <div class="section-title" style="padding-top:80px;text-align:center;">
      <h2>KOMPETENSI KEAHLIAN</h2>
      <p style="text-align:center;">Kompetensi Keahlian merupakan bagian pokok dari pendidikan dan pelatihan di sebuah Sekolah Menengah Kejuruan (SMK).</p>
    </div>

@foreach($showKKRPL as $rpl)
    <div class="row">
      <div class="col-sm-12 col-md-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <a href="/rekayasa-perangkat-lunak" > <div class="icon-box">
          <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="assets/img/logo1.png" width="100px" alt="" srcset=""></i></div>
          <h4>{{$rpl -> nama_jurusan}}</h4></a>
          <p style="text-align:justify;"><b>Rekayasa Perangkat Lunak (RPL)</b><br> adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas</p>
        </div>
      </div>
@endforeach

@foreach($showKKBDP as $bdp)
      <div class="col-sm-12 col-md-3 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <a href="/teknik_bisnis_sepeda_motor"><div class="icon-box">
          <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="assets/img/logo1.png" width="100px" alt="" srcset=""></i></div>
          <h4>{{$bdp-> nama_jurusan}}</h4></a>
          <p style="text-align:justify;"><br><b>Teknik Sepeda Motor </b><br>adalah kompetensi keahlian pada Bidang Studi Keahlian Teknologi dan Rekayasa Program Studi Keahlian Teknik Otomotif yang menekankan pada keterampilan pelayanan jasa mekanik kendaraan sepeda motor roda dua.</p>
        </div>
      </div>
@endforeach

@foreach($showKKTBSM as $tbsm)
      <div class="col-sm-12 col-md-3 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
        <a href="/akuntansi"><div class="icon-box">
          <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="assets/img/logo1.png" width="100px" alt="" srcset=""></i></div>
          <h4>{{$tbsm -> nama_jurusan}}</h4></a>
          <p style="text-align:justify;"><br><br><b>Akuntansi</b><br> adalah pengukuran, penjabaran, atau pemberian kepastian mengenai informasi yang akan membantu manajer, investor, otoritas pajak dan pembuat keputusan lain untuk membuat alokasi sumber daya keputusan di dalam perusahaan, organisasi, dan lembaga pemerintah.</p>
        </div>
      </div>
@endforeach

@foreach($showKKAK as $ak)
      <div class="col-sm-12 col-md-3 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
        <a href="/bisnis_daring_pemasaran"><div class="icon-box">
          <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="assets/img/logo1.png" width="100px" alt="" srcset=""></i></div>
          <h4>{{$ak -> nama_jurusan}} </h4></a>
          <p style="text-align:justify;"><b>Bisnis Daring dan Pemasaran</b><br> adalah sebuah kompetensi keahlian (jurusan) yang mempelajari dasar - dasar kemampuan dan keilmuan menjadi seorang marketing baik marketing secara konvensional maupun melalui media daring (online/internet).</p>
        </div>
      </div>
@endforeach

@foreach($showKKTKRO as $tkro)
      <div class="col-sm-12 col-md-3 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
        <a href="/teknik_kendaraan_ringan_otomotif"><div class="icon-box">
          <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="assets/img/logo1.png" width="100px" alt="" srcset=""></i></div>
          <h4>{{$tkro -> nama_jurusan}} </h4></a>
          <p style="text-align:justify;"><b>Bisnis Daring dan Pemasaran</b><br> adalah sebuah kompetensi keahlian (jurusan) yang mempelajari dasar - dasar kemampuan dan keilmuan menjadi seorang marketing baik marketing secara konvensional maupun melalui media daring (online/internet).</p>
        </div>
      </div>
@endforeach
    </div>

  </div>
</section>


      {{-- <div class="row">
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="assets/img/logo1.png" width="100px" alt="" srcset=""></i></div>
            <h4>REKAYASA PERANGKAT LUNAK</h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="assets/img/logo1.png" width="100px" alt="" srcset=""></i></div>
            <h4>TEKNIK SEPEDA MOTOR</h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="assets/img/logo1.png" width="100px" alt="" srcset=""></i></div>
            <h4>AKUNTANSI</h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="assets/img/logo1.png" width="100px" alt="" srcset=""></i></div>
            <h4>PEMASARAN</h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>

    </div> --}}

@endsection