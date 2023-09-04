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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /</span> Tentang Desa</h4>

                @if(session('tambah-success'))
                <script>
                    // Fungsi untuk menampilkan popup notifikasi
                    function showNotification(message) {
                        // Buat elemen div untuk popup notifikasi
                        var notificationDiv = document.createElement('div');
                        notificationDiv.className = 'notification-popup';
                        notificationDiv.innerText = message;
            
                        // Tambahkan elemen div ke dalam body
                        document.body.appendChild(notificationDiv);
            
                        // Hapus popup notifikasi setelah beberapa detik (misalnya 3 detik)
                        setTimeout(function () {
                            document.body.removeChild(notificationDiv);
                        }, 3000);
                    }
            
                      // Panggil fungsi showNotification dengan pesan notifikasi dari sesi
                      showNotification("{{ session('tambah-success') }}");
                  </script>
                @endif
             
                <!-- Striped Rows -->
                  <div class="row">
                    <div class="col-xl-12">
                      <div class="nav-align-top mb-4">
                        <ul class="nav nav-tabs" role="tablist">
                          @foreach ($tentangs as $tentang)
                                    @if ($tentang->id === 1)
                          <li class="nav-item">
                            <button
                              type="button"
                              class="nav-link active"
                              role="tab"
                              data-bs-toggle="tab"
                              data-bs-target="#navs-top-home"
                              aria-controls="navs-top-home"
                              aria-selected="true"
                            ><b>Tentang Desa</b>
                             &nbsp;<a href="{{ route('tentangs.edit', $tentang) }}"><i class="bx bx-edit-alt me-1">Ubah Isi</i></a>
                            </button>
                          </li>
                          @endif
                          @endforeach
                          @foreach ($tentangs as $tentang)
                                      @if ($tentang->id === 2)
                          <li class="nav-item">
                            <button
                              type="button"
                              class="nav-link"
                              role="tab"
                              data-bs-toggle="tab"
                              data-bs-target="#navs-top-profile"
                              aria-controls="navs-top-profile"
                              aria-selected="false"
                            ><b>Geografis Desa</b>
                              &nbsp;<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editModalTentang" data-id="{{ $tentang->id }}">
                                <i class="bx bx-edit-alt me-1">Ubah Isi</i></a>
                            </button>
                          </li>
                            @endif
                            @endforeach
                        </ul>
                        <div class="tab-content">
                          @foreach ($tentangs as $tentang)
                                    @if ($tentang->id === 1)
                          <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                            <p class="mb-0">
                              <p>{!! $tentang->isi !!}</p>
                            </p><br>
                            <p>
                              <h6><b>DATA RUKUN WARGA (RW) DAN RUKUN TETANGGA (RT)
                                DESA AMPERA RAYA KEC. SUNGAI AMBAWANG</b></h6>
                              <img src="{{ asset('storage/images/' . $tentang->gambar) }}" alt="Gambar Berita" width="400" height="auto">
                            </p>
                          </div>
                                    @endif
                          @endforeach
                          <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                            @foreach ($tentangs as $tentang)
                                      @if ($tentang->id === 2)
                            <p>
                              <img src="{{ asset('storage/images/' . $tentang->gambar) }}" alt="Gambar Berita" width="400" height="auto">
                            </p>
                                      @endif
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Tabs -->
                <!--/ Striped Rows -->
              </div>
            </div>
            <!-- Content wrapper -->

                      <!-- MODAL EDIT -->
                      <div class="modal fade" id="editModalTentang" tabindex="-1" aria-labelledby="editModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                          <form id="editForm" action="{{ route('tentangs.update', $tentang) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel1">Ubah Data Peta Geografis</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="editedData" class="form-label">Data yang Diubah</label><br>
                                            <img src="{{ asset('storage/images/' . $tentang->gambar) }}" alt="Gambar" width="50%" height="auto">
                                            <p><br>
                                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*"
                                              id="basic-default-name" placeholder="Silahkan isi" /> 
                                        </div>
                                        <div class="mb-3" style="display: none">
                                          <textarea
                                          id="basic-default-message"
                                          class="form-control"
                                          aria-label="Hi, Do you have a moment to talk Joe?"
                                          aria-describedby="basic-icon-default-message2"
                                          name="isi"
                                        >{{ $tentang->isi }}</textarea>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary" id="saveChangesBtn">Simpan</button>
                                </div>
                            </div>
                          </form>
                        </div>
                      </div>

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