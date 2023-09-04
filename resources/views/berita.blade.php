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
              <h2>Berita Desa</h2>
              <p>Desa Ampera Raya, Provinsi Kalimantan Barat, Kabupaten Kubu Raya, Kacamatan Sungai Ambawang</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Halaman Utama</a></li>
            <li>Berita Desa</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="berita" class="blog">
      <div class="container" data-aos="fade-up">

       
        <div class="container" data-aos="fade-up">
          <div class="row gy-4 posts-list">
              @foreach ($beritas as $berita)
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
                      <p>{!! Str::limit($berita->isi, 70, '...') !!}</p>
                      <a href="{{route('berita.show', $berita->id)}}">Baca selengkapnya...</a>
                    </div>
                  </div>
    
                </article>
              </div><!-- End post list item -->
              @endforeach
          </div><!-- End blog posts list --><br>
      
          <div class="blog-pagination1">
            {{ $beritas->links('pagination::bootstrap-4') }}
          </div><!-- End blog pagination -->
      </div>
      <!-- End blog posts list -->


    </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  @include('components1/footer')

  @include('components1/scp')

</body>

</html>