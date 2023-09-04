<!DOCTYPE html>
<html lang="en">

@include('components1/head')

<body>

  <!-- ======= Header ======= -->

  @include('components1/header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="home" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Selamat Datang</h2>
          <h2>Profil Desa Ampera Raya</h2>
          <p>Provinsi Kalimantan Barat, Kabupaten Kubu Raya, Kecamatan Kacamatan Sungai Ambawang</p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <center><img src="ass/img/logo.png" class="img-fluid" alt="" width="50%" data-aos="zoom-out" data-aos-delay="100"></center>
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-map"></i></div>
              <h4 class="title"><a href="{{ route('Tentang Desa.index') }}" class="stretched-link">Luas Area</a></h4>
              @foreach ($utamas as $utama)
                @if ($utama->id === 1)
                <font style="font-size: 25px; color: #ffffff;">{{ $utama->hasil }}</font>
                @endif
              @endforeach
                &nbsp;<font style="font-size: 25px; color: #ffffff;">Ha</font>
            </div>
          </div><!--End Icon Box -->
          

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-people"></i></div>
              <h4 class="title"><a href="{{ route('Tentang Desa.index') }}" class="stretched-link">Populasi Penduduk</a></h4>
              @foreach ($utamas as $utama)
                @if ($utama->id === 2)
                <font style="font-size: 25px; color: #ffffff;">{{ $utama->hasil }}</font>
                @endif
              @endforeach
              &nbsp;<font style="font-size: 25px; color: #ffffff;">Jiwa</font>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= Call To Action Section 
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a></div>
    </section> End Call To Action Section -->

    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            @foreach ($utamas as $utama)
            @if ($utama->id === 5)
            <div class="stats-item d-flex align-items-center">
              <p><strong style="font-size: 15px;">Dusun Desa Ampera Raya :
                &nbsp;&nbsp;</strong><b style="font-size: 18px;  color: #008374;">Ampera, Perumnas IV dan Anom</b></p>
            </div><!-- End Stats Item -->
            @endif
            @endforeach

            @foreach ($utamas as $utama)
            @if ($utama->id === 3)
            <div class="stats-item d-flex align-items-center">
              <font style="font-size: 25px; color: #008374;"><b>{{ $utama->hasil }}</b></font>
              &nbsp;&nbsp;&nbsp;<p><strong style="font-size: 18px;">Populasi Laki-Laki</strong></p>
            </div><!-- End Stats Item -->
            @endif
            @endforeach

            @foreach ($utamas as $utama)
            @if ($utama->id === 4)
            <div class="stats-item d-flex align-items-center">
              <font style="font-size: 25px; color: #008374;"><b>{{ $utama->hasil }}</b></font>
              &nbsp;&nbsp;&nbsp;<p><strong style="font-size: 18px;">Populasi Perempuan</strong></p>
            </div><!-- End Stats Item -->
            @endif
            @endforeach

          </div>

          <div class="col-lg-6">
            <img src="ass/img/stats-img.svg" alt="" class="img-fluid">
          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6">
            <p>
            @foreach ($tentangs as $tentang)
              @if ($tentang->id === 2)
              <a href="{{ asset('storage/images/' . $tentang->gambar) }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('storage/images/' . $tentang->gambar) }}" class="img-fluid" alt=""></a>
            @endif
                @endforeach
            @foreach ($tentangs as $tentang)
                  @if ($tentang->id === 1)
              {!! Str::limit($tentang->isi, 400, '...') !!}
              <a href="{{ route('Tentang Desa.index') }}">Baca selengkapnya...</a>
            </p>
            @endif
          @endforeach
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              @foreach ($pemerintahs as $pemerintah)
              @if ($pemerintah->id === 1)
              <p class="fst-italic">
                {!! Str::limit($pemerintah->isi_1, 1000, '...') !!}
                <a href="{{ route('Pemerintah Desa.index') }}">Baca selengkapnya...</a>
              </p>
              @endif
              @endforeach
              @foreach ($pemerintahs as $pemerintah)
              @if ($pemerintah->id === 2)
              <a href="{{ asset('storage/' . $pemerintah->gambar_1) }}" data-gallery="portfolio-gallery-app" class="glightbox">
                <img src="{{ asset('storage/' . $pemerintah->gambar_1) }}" class="img-fluid" alt="">
              </a>
              @endif
                  @endforeach
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Berita Desa</h2>
        </div>

       <div class="row gy-4">
          @foreach ($beritas as $index => $berita)
            @if ($index < 3) 
          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('storage/images/' . $berita->foto) }}" alt="" class="img-fluid">
              </div>

              <h2 class="title">
                <a href="{{route('berita.show', $berita->id)}}">{{ $berita->judul }}</a>
              </h2>
              <p class="post-date">
                <time datetime="2022-01-01">{{ $berita->created_at->format('d/m/Y') }}</time>
              </p>
              <div class="d-flex align-items-center">
               
                <div class="post-meta">
                  <p>{!! Str::limit($berita->isi, 70, '...') !!}
                  </p>
                  <a href="{{route('berita.show', $berita->id)}}">Baca selengkapnya...</a>
                </div> 
              </div>

            </article>
          </div>
          @endif
          @endforeach

        </div>

      </div>
    </section><!-- End Recent Blog Posts Section -->
<center>
    <section class="pricing sections-bg">
      <div class="container" data-aos="fade-up">
        <a href="{{ route('Berita Desa.index') }}" class="buy-btn">Berita Lainnya ...</a>
      </div>
    </section>
</center>
  </main><!-- End #main -->

  @include('components1/footer')

  @include('components1/scp')

</body>

</html>