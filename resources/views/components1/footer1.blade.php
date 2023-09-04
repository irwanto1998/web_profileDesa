
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
          </a>
          <img src="/ass/img/logo2.png" style="width: 300px; height: auto;" alt="Logo">

          <p>Provinsi Kalimantan Barat, Kabupaten Kubu Raya, Kecamatan Kacamatan Sungai Ambawang</p>
          <div class="social-links d-flex mt-4">
            <!--         <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --> 
                      </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <ul>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Links</h4>
          <ul>
            <li><a href="{{ route('Halaman Utama.index') }}">Halaman Utama</a></li>
            <li><a href="{{ route('Tentang Desa.index') }}">Tentang Desa</a></li>
            <li><a href="{{ route('Pemerintah Desa.index') }}">Pemerintah</a></li>
            <li><a href="{{ route('Berita Desa.index') }}">Berita</a></li>
            <li><a href="{{ route('Kontak Kantor Desa.index') }}">Kontak</a></li>
          </ul>
        </div>
        
        @foreach ($kontaks as $kontak)
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Alamat Kantor</h4>
          <p>
            {{ $kontak->alamat }}<br>
            <strong>Email:</strong> {{ $kontak->email }}<br>
            <strong>Jam Oprasional:</strong> {{ $kontak->jmop }} WIB<br>
          </p>

        </div>
        @endforeach

      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>