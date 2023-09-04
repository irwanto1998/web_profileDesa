<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">  
  @include('components/app')

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        @include('components/sidebar')
        
        <!-- Layout container -->
        <div class="layout-page">

          @include('components/navbar')
         
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
              <!-- Content -->

              <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /Berita Desa /</span>Detail</h4>

                <!-- Striped Rows -->
                
                <div class="col-md-12">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0"><b style="color: #696cff;">{{ $berita->created_at->format('d/m/Y') }}</b></h5>
                    </div>
                    <center>
                      <img src="{{ asset('storage/images/' . $berita->foto) }}" alt="Gambar Berita" width="500" height="auto"><p>
                    </center>
                    <div class="card-body">
                      <h3 class="card-title">{{ $berita->judul }}</h3>
                      <p class="card-text">
                        <p>{!! $berita->isi !!}</p>
                      </p>
                    </div>
                  </div>
                </div><br>                                                    
                <a href="#" onclick="window.history.back()" class="btn btn-success">Back</a>
                <!--/ Striped Rows -->
              </div>
            </div>
            <!-- Content wrapper -->

            </div>
            <!-- / Content -->

            @include('components/footer')

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    
      <!-- Include Scripts -->
      @include('components/scp')
  </body>
</html>