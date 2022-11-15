@extends('layoutuser.master')
@section('content')
@include('layoutuser.navbarnologin')

<!-- ======= Galeri Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>PRODUK</h2>
    </div>

    <div class="row gy-4 portfolio-container">
      @foreach($data as $i => $buku)
      <div class="col-xl-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
          <a href="{{ url('/storage/'.$buku->gambar_buku) }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ url('/storage/'.$buku->gambar_buku) }}" class="img-fluid" style="width:100%; height:80%" alt=""></a>
          <div class="portfolio-info">
            <h4><a href="portfolio-details.html" title="More Details">{{$buku->judul}}</a></h4>
          </div>
        </div>
      </div><!-- End Galeri Item -->
      @endforeach

    </div><!-- End Portfolio Container -->

  </div>

  </div>
</section><!-- End Portfolio Section -->

@include('layoutuser.footer')
@endsection