
<section id="topbar" class="topbar d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    @foreach ($kontaks as $kontak)
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">{{ $kontak->email }}</a></i>
    </div>
    @endforeach
    <div class="social-links d-none d-md-flex align-items-center">
<!--       <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>--> 
    </div>
  </div>
</section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{ route('Halaman Utama.index') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="ass/img/logo.png" alt=""> -->
        <img src="ass/img/logo.png" alt class="w-px-200 h-auto">
        <h1>Desa <span style="color: rgb(248, 102, 102)">Ampera Raya</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('Halaman Utama.index') }}">Halaman Utama</a></li>
          <li class="dropdown"><a href="#"><span>Pemerintah</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('Tentang Desa.index') }}">Tentang Desa</a></li>
              <li><a href="{{ route('Pemerintah Desa.index') }}">Pemerintah</a></li>
            </ul>
          </li>
          <!--<li><a href="/infografis">Infografis</a></li>-->
          <li><a href="{{ route('Berita Desa.index') }}">Berita Desa</a></li>
          <li><a href="{{ route('Kontak Kantor Desa.index') }}">Kontak</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>