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
        <h5 class="card-header" style="text-align: center;">SEJARAH SMK LPPM RI</h5>
        <div class="card-body">
          <p class="card-text" style="text-align: justify;"><b>LPPM-RI </b> ( Lembaga Pendidikan & Pengetahuan Masyarakat -Republik Indonesia)
        <br>
        <br> {{$ss -> sejarah_singkat}}</p>
          {{-- <a href="/sejarah-singkat" class="btn btn-primary" style="text-align: left;">Lihat Selengkapnya</a> --}}
        </div>
      </div>
    </div>

@endforeach

    <div class="row" style="padding:25px;"data-aos="fade-up">
      <div class="col-md-6">
      <div class="card" >
          <h5 class="card-header" style="text-align: center;">VISI</h5>
          <div class="card-body">
            <p class="card-text" style="text-align: justify;"><b>VISI SMK LPPM RI</b></p>
            <p class="card-text" style="text-align: justify;">
              <ul>
                <li> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt commodi nostrum, dolore accusantium nulla dicta cum doloribus! Illo natus commodi fugiat! Eum vero vitae iusto beatae mollitia illum nemo magnam!</li>
                <li> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est ut iure praesentium suscipit. Distinctio laudantium qui velit ea nesciunt alias officia quod molestiae nostrum enim! Nulla a modi dolorem nesciunt!</li>
                <li> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi fugiat debitis praesentium quia rem ipsam, corporis soluta consectetur pariatur similique explicabo! Id aspernatur aliquid ea ad! Earum voluptatibus repellat necessitatibus!</li>
                <li> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae facilis magnam saepe earum placeat porro et distinctio impedit ex cumque assumenda fuga dolor nam necessitatibus laborum iste officia, rerum voluptate?</li>
              </ul>
            </p>
            {{-- <a href="/visi-misi" class="btn btn-primary" style="text-align: left;">Lihat Selengkapnya</a> --}}
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card" >
          <h5 class="card-header" style="text-align: center;">MISI</h5>
          <div class="card-body">
            <p class="card-text" style="text-align: justify;"><b>MISI SMK LPPM RI </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptate nihil exercitationem provident explicabo. Iusto id atque voluptate nostrum sapiente neque beatae quaerat ut accusamus recusandae? Facilis ea veniam esse! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum dolore eius mollitia, ea alias nostrum velit obcaecati perferendis neque voluptatem, hic voluptates repudiandae ut tempore vel dolorem minima facilis atque.</p>
            {{-- <a href="/visi-misi" class="btn btn-primary" style="text-align: left;">Lihat Selengkapnya</a> --}}
          </div>
        </div>
      </div>
      </div>
  </div>
      {{-- GALERI --}}

<div class="section-title" style="margin-top: 50px;padding-top:50px;" data-aos="fade-up">
    <h2>GURU & STAFF</h2>
  </div>
  <div class="latar"style="background-color:#eee;">
    <br>
    <br>
    <div class="container-fluid" data-aos="fade-up">
      <div class="row">
        <div class="col" style="text-align: center;">
          <div class="item col-sm-12 col-md-12 ">
            <a href="assets/img/people2.jpg" class="fancybox" data-fancybox="galeri1">
            <img src="assets/img/people2.jpg" alt="" class="img-fluid" style="max-width:300px;height:500px;">
            <h1 style="font-size:25px;color:#3c4c6a;">Bapak Udin</h1>
              <h1 style="font-size:25px;color:#3c4c6a;">Guru Bahasa Indonesia</h1>
          </a>
          </div>
        </div>
      <div class="col" style="text-align: center;">
        <div class="item col-sm-12 col-md-12 ">
          <a href="assets/img/people2.jpg" class="fancybox" data-fancybox="galeri1">
          <img src="assets/img/people2.jpg" alt="" class="img-fluid" style="max-width:300px;height:500px;">
          <h1 style="font-size:25px;color:#3c4c6a;">Bapak Udin</h1>
            <h1 style="font-size:25px;color:#3c4c6a;">Guru Bahasa Indonesia</h1>
        </a>
        </div>
      </div>
      <div class="col" style="text-align: center;">
        <div class="item col-sm-12 col-md-12 ">
          <a href="assets/img/people2.jpg" class="fancybox" data-fancybox="galeri1">
          <img src="assets/img/people2.jpg" alt="" class="img-fluid" style="max-width:300px;height:500px;">
          <h1 style="font-size:25px;color:#3c4c6a;">Bapak Udin</h1>
            <h1 style="font-size:25px;color:#3c4c6a;">Guru Bahasa Indonesia</h1>
        </a>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col" style="text-align: center;">
          <div class="item col-sm-12 col-md-12 ">
            <a href="assets/img/people2.jpg" class="fancybox" data-fancybox="galeri1">
            <img src="assets/img/people2.jpg" alt="" class="img-fluid" style="max-width:300px;height:500px;">
            <h1 style="font-size:25px;color:#3c4c6a;">Bapak Udin</h1>
              <h1 style="font-size:25px;color:#3c4c6a;">Guru Bahasa Indonesia</h1>
          </a>
          </div>
        </div>
        <div class="col" style="text-align: center;">
          <div class="item col-sm-12 col-md-12 ">
            <a href="assets/img/people2.jpg" class="fancybox" data-fancybox="galeri1">
            <img src="assets/img/people2.jpg" alt="" class="img-fluid" style="max-width:300px;height:500px;">
            <h1 style="font-size:25px;color:#3c4c6a;">Bapak Udin</h1>
              <h1 style="font-size:25px;color:#3c4c6a;">Guru Bahasa Indonesia</h1>
          </a>
          </div>
        </div>
        <div class="col" style="text-align: center;">
          <div class="item col-sm-12 col-md-12 ">
            <a href="assets/img/people2.jpg" class="fancybox" data-fancybox="galeri1">
            <img src="assets/img/people2.jpg" alt="" class="img-fluid" style="max-width:300px;height:500px;">
            <h1 style="font-size:25px;color:#3c4c6a;">Bapak Udin</h1>
              <h1 style="font-size:25px;color:#3c4c6a;">Guru Bahasa Indonesia</h1>
          </a>
            </div>
          </div>
        </div>
        <div class="tombol" style="text-align:center;padding:25px;">
        <a href="/guru-staff" class="btn btn-primary" style="">Lihat Selengkapnya</a>
      </div>
      </div>
    </div>
   
      <br>
      <br>
@endsection