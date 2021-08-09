@extends('kompetensi-keahlian.master')
@section('konten')
<div class="section-title" style="margin-top: 50px;padding-top:80px;" data-aos="fade-up">
    <h2>ARTIKEL</h2>
  </div>
  <div class="latar" style="background-color: #eee">
      <br>
      <br>
      <section class="services section-bg">
        <div class="container" data-aos="fade-up">
          <div class="row">
          @foreach($list as $a)
            <div class="col-sm-12 col-md-3" data-aos="zoom-in" data-aos-delay="100" width="">
              <div class="icon-box">
                <div class="icon" style="text-align: center;margin-bottom: 50px;"><img src="/content/{{$a->thumbnail}}" width="100px" alt="" srcset=""></i></div>
                <h4>{{$a->title}}</h4>
                <p>{{$a->deskripsi}}</p>
                <a href="/detail-artikel/{{ $a->slug }}" class="btn btn-info">Baca</a>
              </div>
            </div>   
          @endforeach 
          </div>
        </div>
        
         <ul class="pagination justify-content-center" >
           {{$list->links()}}
         </ul>
     
      </section>
      <br>
      <br>
      <div class="section-title" style="" data-aos="fade-up">
        <h2>KATEGORI ARTIKEL</h2>
      </div>
      {{-- <div class="col-lg-3 col-md-6 footer-links">
        
        <ul style="text-decoration: none">
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div> --}}
  </div>
@endsection