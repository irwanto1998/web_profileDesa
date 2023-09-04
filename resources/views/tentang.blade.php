<!DOCTYPE html>
<html lang="en">

@include('components1/head')

<body>

  <!-- ======= Header ======= -->

  @include('components1/header')
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Tentang Desa</h2>
              <p>Desa Ampera Raya, Provinsi Kalimantan Barat, Kabupaten Kubu Raya, Kacamatan Sungai Ambawang</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
            <ol>
                <li><a href="index.html">Halaman Utama</a></li>
                <li>Tentang Desa</li>
              </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-xl-12">
                <div class="nav-align-top mb-4">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <button
                        type="button"
                        class="nav-link active"
                        role="tab"
                        data-bs-toggle="tab"
                        data-bs-target="#navs-top-home"
                        aria-controls="navs-top-home"
                        aria-selected="true">
                        <b>Sejarah Desa</b>
                      </button>
                    </li>
                    <li class="nav-item">
                      <button
                        type="button"
                        class="nav-link"
                        role="tab"
                        data-bs-toggle="tab"
                        data-bs-target="#navs-top-profile"
                        aria-controls="navs-top-profile"
                        aria-selected="false">
                        <b>Geografis Desa</b>
                      </button>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                      <article class="blog-details">
                        <div class="col-lg-12 text-center">
                            <h2 class="title">Desa Ampera Raya</h2>
                        </div>
                        @foreach ($tentangs as $tentang)
                          @if ($tentang->id === 1)
          
                        <div class="content">
                          <p>
                            {!! $tentang->isi !!}
                          </p><br>
                        
                            <h6><b>DATA RUKUN WARGA (RW) DAN RUKUN TETANGGA (RT)
                              DESA AMPERA RAYA KEC. SUNGAI AMBAWANG</b></h6>
                              <a href="{{ asset('storage/images/' . $tentang->gambar) }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('storage/images/' . $tentang->gambar) }}" width="60%" class="img-fluid" alt=""></a>
                        </div>
                          @endif
                        @endforeach<!-- End post content --><br>
                        
                        <div class="meta-bottom">
                        </div><!-- End meta bottom -->
                      </article><!-- End blog post --><br>
                    </div>
                    <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                      <article class="blog-details">
                        <div class="col-lg-12 text-center">
                        <h2 class="title" style="text-align: center">Geografis Desa</h2> 
                        @foreach ($tentangs as $tentang)
                          @if ($tentang->id === 2)
                        <div class="content">
                          <p style="text-align: center">
                            <a href="{{ asset('storage/images/' . $tentang->gambar) }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('storage/images/' . $tentang->gambar) }}" width="60%" class="img-fluid" alt=""></a>
                          </p>
                        </div>
                          @endif
                        @endforeach<!-- End post content -->
          
                        <div class="meta-bottom">
                        </div><!-- End meta bottom -->
                      </article><!-- End blog post --><br>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->


  @include('components1/footer')

  @include('components1/scp')

</body>

</html>