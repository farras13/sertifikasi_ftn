@extends('layoutuser.master')
@section('content')
@include('layoutuser.navbar')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
  <div class="container position-relative">
    <div class="row gy-5" data-aos="fade-in">
      <img src="user/assets/img/buku.jpg" class="img-fluid" style="height: 500px;" alt="" data-aos="zoom-out" data-aos-delay="100">
      <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>Welcome to Toko Buku</h2>
        <p>Unggul dalam kualitas dan produk original</p>
      </div>
    </div>
  </div>
</section>
<!-- End Hero Section -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>ABOUT US</h2>
    </div>
    <div class="row gy-4">
      <div class="col-lg-6">
        <h3>Toko Buku Online Terbaik</h3>
        <img src="user/assets/img/toko1.png" class="img-fluid rounded-4" style="height: 60%; width:80%" alt=""><br><br>
        <p>Toko buku online Tobunesia adalah toko buku terbaik di Indonesia. Kami hanya menjual buku-buku original dengan kualitas terbaik 100% garansi jaminan buku original. Untuk menanyakan stok buku, kamu bisa menyapa Teh Euis admin terbaik kami.</p>
      </div>
      <div class="col-lg-6">
        <div class="content ps-0 ps-lg-5"><br><br><br>
          <p>Selain itu berikut ini adalah video mengenai Toko Buku kami. </p>
          <p>Biar kalian tidak penasaran apa saja yang ada di dalam Toko Buku kami, segera tonton video profilnya.</p>
          <div class="position-relative mt-4">
            <img src="user/assets/img/toko2.png" class="img-fluid rounded-4" alt="">
            <a href="https://www.youtube.com/watch?" class="glightbox play-btn"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End About Us Section -->

<!-- ======= Our Services Section ======= -->
<section id="services" class="services sections-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>KEUNGGULAN</h2>
    </div>

    <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-6 col-md-6">
        <div class="service-item  position-relative">
          <div class="icon">
            <i class="bi bi-laptop"></i>
          </div>
          <h3>TERUPDATE</h3>
          <p>Buku yang dijual pada toko kami merupakan keluaran terbaru.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6 col-md-6">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-journal-bookmark"></i>
          </div>
          <h3>ORIGINAL</h3>
          <p>Buku yang ada di toko kami merupakan original.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6 col-md-6">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-book"></i>
          </div>
          <h3>BERVARIASI</h3>
          <p>Terdapat berbagai macam jenis buku yang ada pada toko kami.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6 col-md-6">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-bounding-box-circles"></i>
          </div>
          <h3>LENGKAP</h3>
          <p>Banyak dan lengkap macam buku yang kami sediakan.</p>
        </div>
      </div><!-- End Service Item -->
    </div>

  </div>
</section><!-- End Our Services Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>CONTACT US</h2>
    </div>

    <div class="row gx-lg-0 gy-4">

      <div class="col-lg-4">

        <div class="info-container d-flex flex-column align-items-center justify-content-center">
          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h4>Location:</h4>
              <p>Jl.Soekarno Hatta</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>Email:</h4>
              <p>tokobuku@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>Call:</h4>
              <p>(0342) 551634</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-clock flex-shrink-0"></i>
            <div>
              <h4>Open Hours:</h4>
              <p>Mon-Sat: 9AM - 21PM</p>
            </div>
          </div><!-- End Info Item -->
        </div>

      </div>

      <div class="col-lg-8">
        <form action="" method="post" role="form" class="php-email-form">
          @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>
</section><!-- End Contact Section -->


@include('layoutuser.footer')
@endsection