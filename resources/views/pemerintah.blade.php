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
              <h2>Pemerintah</h2>
              <p>Desa Ampera Raya, Provinsi Kalimantan Barat, Kabupaten Kubu Raya, Kacamatan Sungai Ambawang</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
            <ol>
                <li><a href="index.html">Halaman Utama</a></li>
                <li>Pemerintahan</li>
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
                        <b>Visi Dan Misi</b>
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
                        <b>Struktur Pemerintah</b>
                      </button>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                      @foreach ($pemerintahs as $pemerintah)
                      @if ($pemerintah->id === 1)

                      <article class="blog-details">
                          <div class="col-lg-12 text-center">
                              <h2 class="title">VISI, MISI, TUJUAN DAN SASARAN</h2>
                          </div><br>

                          <div class="content">
                            <p>
                              {!! $pemerintah->isi_1 !!}
                            </p>
                          </div>
            
                      </article><!-- End blog post --><br>
                                  @endif
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                      @foreach ($pemerintahs as $pemerintah)
                      @if ($pemerintah->id === 2)

                      <article class="blog-details">

                        <div class="col-lg-12 text-center">
                          <h2 class="title">Struktur Pemerintahan Desa</h2>
                        </div>

                        <div class="content">
                          <div class="section-header">
                              <div class="row gy-4 portfolio-container">
                                  <p>
                                    <div class="portfolio-wrap">
                                      <a href="{{ asset('storage/' . $pemerintah->gambar_1) }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('storage/' . $pemerintah->gambar_1) }}" width="60%" class="img-fluid" alt=""></a>
                                    </div>
                                  </p>
                              </div><!-- End Portfolio Container -->
                          </div>
                        </div><!-- End post content -->
                        <div class="meta-bottom">
                        </div><!-- End meta bottom -->

                        <div class="col-lg-12 text-center">
                          <h2 class="title">Struktur BPD</h2>
                        </div>

                        <div class="content">
                          <div class="section-header">
                              <div class="row gy-4 portfolio-container">
                                  <p>
                                    <div class="portfolio-wrap">
                                      <a href="{{ asset('storage/' . $pemerintah->gambar_2) }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('storage/' . $pemerintah->gambar_2) }}" width="60%" class="img-fluid" alt=""></a>
                                    </div>
                                  </p>
                              </div><!-- End Portfolio Container -->
                          </div>
                        </div><!-- End post content -->

                        <div class="meta-bottom">
                        </div><!-- End meta bottom -->

                      </article><!-- End blog post -->
                              @endif
                    @endforeach
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