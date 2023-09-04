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
        <nav>
          <div class="container">
              <ol>
                  <li><a href="index.html">Halaman Utama</a></li>
                  <li>Kontak</li>
                </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->

    <section id="kontak" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Kontak</h2>
            <p>Silahkan hubungi kontak dibawah ini, apabila ada yang ingin ditanyakan</p>
          </div>
  
          <div class="row gx-lg-0 gy-4">
  
            <div class="col-lg-4">
              @foreach ($kontaks as $kontak)
              <div class="info-container d-flex flex-column align-items-center justify-content-center">
                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Lokasi Kantor Desa:</h4>
                    <p>{{ $kontak->alamat }}</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <p>{{ $kontak->email }}</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-clock flex-shrink-0"></i>
                  <div>
                    <h4>Jam Oprasional:</h4>
                    <p>{{ $kontak->jmop }} WIB</p>
                  </div>
                </div><!-- End Info Item -->
              </div>
              @endforeach
            </div>
  
            <div class="col-lg-8">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249.36358760261726!2d109.3855692590177!3d-0.03888196791054393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1693380021126!5m2!1sid!2sid" 
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
              </form>
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  
  @include('components1/footer')

  @include('components1/scp')

</body>

</html>