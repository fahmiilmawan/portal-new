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

    {{-- @foreach($showKKRPL as $rpl)
    <div class="col-sm-3 col-md-3" data-aos="zoom-in" data-aos-delay="100">
      <a href="/teknik_kendaraan_ringan_otomotif" > <div class="icon-box">
        <div class="icon" style="text-align: center;margin-bottom: 0px;"><img src="" width="100px" alt="" srcset=""></i></div>
        <h4>{{$rpl -> nama_jurusan}}</h4></a>
        <p style="text-align:justify;">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        
      </div>
      @endforeach
    </div>
    

@foreach($showKKBDP as $bdp)
<div class="col-sm-3 col-md-3 " data-aos="zoom-in" data-aos-delay="100">
  <a href="/teknik_kendaraan_ringan_otomotif" > <div class="icon-box">
    <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="" width="100px" alt="" srcset=""></i></div>
    <h4>{{$bdp -> nama_jurusan}}</h4></a>
    <p style="text-align:justify;">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
    
  </div>
  @endforeach
</div>


@foreach($showKKTBSM as $tbsm)
<div class="col-sm-3 col-md-3" data-aos="zoom-in" data-aos-delay="100">
  <a href="/teknik_kendaraan_ringan_otomotif" > <div class="icon-box">
    <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="" width="100px" alt="" srcset=""></i></div>
    <h4>{{$tbsm -> nama_jurusan}}</h4></a>
    <p style="text-align:justify;">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
    
  </div>
  @endforeach
</div>


@foreach($showKKAK as $ak)
<div class="col-sm-3 col-md-3" data-aos="zoom-in" data-aos-delay="100">
  <a href="/teknik_kendaraan_ringan_otomotif" > <div class="icon-box">
    <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="" width="100px" alt="" srcset=""></i></div>
    <h4>{{$ak -> nama_jurusan}}</h4></a>
    <p style="text-align:justify;">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
    
  </div>
  @endforeach
</div>


@foreach($showKKTKRO as $tkro)
<div class="col-sm-3 col-md-3 " data-aos="zoom-in" data-aos-delay="100">
  <a href="/teknik_kendaraan_ringan_otomotif" > <div class="icon-box">
    <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="" width="100px" alt="" srcset=""></i></div>
    <h4>{{$tkro -> nama_jurusan}}</h4></a>
    <p style="text-align:justify;">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
    
  </div>
  @endforeach
</div> --}}
<div class="row">
  @foreach($showKKRPL as $rpl)
    
  
<div class="col-sm-12 col-md-4" data-aos="zoom-in" data-aos-delay="100">
<div class="card" style="max-width:400px;">
  <div class="text-center"><img class="card-img-top" src="assets/img/lppm_ri.png" alt="Card image cap" style="text-align:center;width:150px;"></div>
  <div class="card-body">
    <a href="/teknik_kendaraan_ringan_otomotif">
      <div class="judul-jurusan" style="margin:20px;text-align:center;">
      <h4 class="card-text">{{$rpl -> nama_jurusan}}</h4>
  </a>
  </div>
  <br>
  <p class="card-text" style="text-align: justify;">Rekayasa Perangkat Lunak (RPL, atau dalam bahasa Inggris: Software Engineering atau SE) adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.</p>
  </div>
</div>
</div>
@endforeach
@foreach($showKKBDP as $bdp)
  

<div class="col-sm-12 col-md-4" data-aos="zoom-in" data-aos-delay="100">
  <div class="card" style="max-width:400px;;height:auto;">
    <div class="text-center"><img class="card-img-top" src="assets/img/lppm_ri.png" alt="Card image cap" style="text-align:center;width:150px;"></div>
    <div class="card-body">
      <div class="judul-jurusan" style="margin:20px;text-align:center;">
      <a href="/teknik_kendaraan_ringan_otomotif">
        <h4 class="card-text">{{$bdp -> nama_jurusan}}</h4>
    </a>
      </div>
    <br>
    <p class="card-text">Bisnis Daring dan Pemasaran adalah sebuah kompetensi keahlian (jurusan) yang mempelajari dasar - dasar kemampuan dan keilmuan menjadi seorang marketing baik marketing secara konvensional maupun melalui media daring (online/internet). Di Kompetensi Keahlian Bisnis Daring dan Pemasaran siswa akan mempelajari strategi pasar, kewirausahaan dan membaca peluang di dunia bisnis</p>
    </div>
  </div>
  </div>
  @endforeach
  @foreach($showKKTBSM as $tbsm)
    
 
  <div class="col-sm-12 col-md-4" data-aos="zoom-in" data-aos-delay="100">
    <div class="card" style="max-width:400px;">
      <div class="text-center"><img class="card-img-top" src="assets/img/lppm_ri.png" alt="Card image cap" style="text-align:center;width:150px;"></div>
      <div class="card-body">
        <div class="judul-jurusan" style="margin:20px;text-align:center;">
        <a href="/teknik_kendaraan_ringan_otomotif">
          <h4 class="card-text">{{$tbsm -> nama_jurusan}}</h4>
      </a>
        </div>
      <br>
      <p class="card-text">Teknik dan Bisnis Sepeda Motor (TBSM) adalah salah satu cabang ilmu teknik mesin yang mempelajari tentang bagaimana merancang, membuat dan mengembangkan alat-alat transportasi darat yang menggunakan mesin, terutama sepeda motor</p>
      </div>
    </div>
    </div>
  </div>
    @endforeach
    <div class="row" style="margin:25px;">
    @foreach($showKKAK as $ak)
      
    
    <div class="col-sm-12 col-md-6" data-aos="zoom-in" data-aos-delay="100">
      <div class="card" style="max-width: 400px;">
        <div class="text-center"><img class="card-img-top" src="assets/img/lppm_ri.png" alt="Card image cap" style="text-align:center;width:150px;"></div>
        <div class="card-body">
          <div class="judul-jurusan" style="margin:20px;text-align:center;">
          <a href="/teknik_kendaraan_ringan_otomotif">
            <h4 class="card-text">{{$ak -> nama_jurusan}}</h4>
        </a>
      </div>
        <br>
        <p class="card-text" style="text-align:justify;">Secara umum, pengertian akuntansi adalah suatu proses mencatat, meringkas, mengklasifikasikan, mengolah, dan menyajikan data transaksi, serta berbagai aktivitas yang berhubungan dengan keuangan, sehingga informasi tersebut dapat digunakan oleh seseorang yang ahli di bidangnya dan menjadi bahan untuk mengambil suatu keputusan</p>
        </div>
      </div>
      </div>
      @endforeach
      @foreach($showKKTKRO as $tkro)
      
    
    <div class="col-sm-12 col-md-6" data-aos="zoom-in" data-aos-delay="100">
      <div class="card" style="max-width: 400px;">
        <div class="text-center"><img class="card-img-top" src="assets/img/lppm_ri.png" alt="Card image cap" style="text-align:center;width:150px;"></div>
        <div class="card-body">
          <div class="judul-jurusan" style="margin:20px;text-align:center;">
          <a href="/teknik_kendaraan_ringan_otomotif">
            <h4 class="card-text">{{$tkro -> nama_jurusan}}</h4>
        </a>
          </div>
        <br>
        <p class="card-text">Teknik Kendaraan Ringan adalah ilmu yang mempelajari tentang alat-alat transportasi darat yang menggunakan mesin, terutama mobil yang mulai berkembang sebagai cabang ilmu seiring dengan diciptakannya mesin mobil.</p>
        </div>
      </div>
      </div>
      @endforeach
  </div>

</section>


{{-- <div class="col-sm-12 col-md-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
  <a href="/teknik_kendaraan_ringan_otomotif" > <div class="icon-box">
    <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="" width="100px" alt="" srcset=""></i></div>
    <h4>{{$tkro -> nama_jurusan}}</h4></a>
    <p style="text-align:justify;">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
  </div>
</div>

<div class="col-sm-12 col-md-3 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
  <a href="/ekstrakurikuler2"><div class="icon-box">
    <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="assets/img/lppm_ri.png" width="100px" alt="" srcset=""></i></div>
    <h4>SEPAK BOLA</h4></a>
    <p style="text-align:justify;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
  </div>
</div>

<div class="col-sm-12 col-md-3 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
  <a href="/ekstrakurikuler3"><div class="icon-box">
    <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="assets/img/lppm_ri.png" width="100px" alt="" srcset=""></i></div>
    <h4>TEATER</h4></a>
    <p style="text-align:justify;">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
  </div>
</div>

<div class="col-sm-12 col-md-3 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
  <a href="/ekstrakurikuler4"><div class="icon-box">
    <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="assets/img/lppm_ri.png" width="100px" alt="" srcset=""></i></div>
    <h4>PRAMUKA</h4></a>
    <p style="text-align:justify;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
  </div>
</div> --}}

@endsection