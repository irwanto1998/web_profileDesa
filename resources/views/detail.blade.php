<!DOCTYPE html>
<html lang="en">

@include('components1/head1')

<body>

  <!-- ======= Header ======= -->

  @include('components1/header1')
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Detail Berita Desa</h2>
              <p>Desa Ampera Raya, Provinsi Kalimantan Barat, Kabupaten Kubu Raya, Kacamatan Sungai Ambawang</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
            <ol>
                <li>Halaman Utama</li>
                <li><a href="{{ route('Berita Desa.index') }}">Berita Desa</a></li>
                <li>Detail Berita Desa</li>
              </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-12">

            <article class="blog-details">

                <div class="post-img text-center">
                  <img src="{{ asset('storage/images/' . $berita->foto) }}" width="100%">
                </div>
  
                <h2 class="title">{{ $berita->judul }}</h2>
  
                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{ $berita->created_at->format('d/m/Y') }}</time></a></li>
                  </ul>
                </div><!-- End meta top -->
  
                <div class="content">
                  <p>{!! $berita->isi !!}</p>
  
                </div><!-- End post content -->
                <div class="meta-bottom">
                </div><!-- End meta bottom -->
            
  
              </article><!-- End blog post -->



          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->


  @include('components1/footer1')

  @include('components1/scp1')

</body>

</html>