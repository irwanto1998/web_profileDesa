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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /</span> Pemerintahan</h4>

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
                          @foreach ($pemerintahs as $pemerintah)
                                    @if ($pemerintah->id === 1)
                          <li class="nav-item">
                            <button
                              type="button"
                              class="nav-link active"
                              role="tab"
                              data-bs-toggle="tab"
                              data-bs-target="#navs-top-home"
                              aria-controls="navs-top-home"
                              aria-selected="true"
                            ><b>Visi & Misi</b>
                             &nbsp;<a href="{{ route('pemerintahs.edit', $pemerintah) }}"><i class="bx bx-edit-alt me-1"></i>Ubah Isi</a>
                            </button>
                          </li>
                          @endif
                          @endforeach
                          @foreach ($pemerintahs as $pemerintah)
                                      @if ($pemerintah->id === 2)
                          <li class="nav-item">
                            <button
                              type="button"
                              class="nav-link"
                              role="tab"
                              data-bs-toggle="tab"
                              data-bs-target="#navs-top-profile"
                              aria-controls="navs-top-profile"
                              aria-selected="false"
                            ><b>Struktur</b>
                              &nbsp;<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editModalPemerintah" data-id="{{ $pemerintah->id }}">
                                <i class="bx bx-edit-alt me-1"></i>Ubah Isi</a>
                            </button>
                          </li>
                                      @endif
                          @endforeach
                        </ul>
                        <div class="tab-content">
                          @foreach ($pemerintahs as $pemerintah)
                                    @if ($pemerintah->id === 1)
                          <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                            <p><b>VISI :</b></p>
                            <p class="mb-0">
                              <p>{!! $pemerintah->isi_1 !!}</p>
                            </p><br>
                          </div>
                                    @endif
                          @endforeach
                          <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                            @foreach ($pemerintahs as $pemerintah)
                                      @if ($pemerintah->id === 2)
                            <p><b>STRUKTUR PEMERINTAH DESA :</b></p>
                            <p class="mb-0">
                              <img src="{{ asset('storage/' . $pemerintah->gambar_1) }}" alt="Gambar Berita" width="400" height="auto">
                            </p><br>
                            <p><b>STRUKTUR BPD :</b></p>
                            <p class="mb-0">
                              <img src="{{ asset('storage/' . $pemerintah->gambar_2) }}" alt="Gambar Berita" width="400" height="auto">
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
                      <div class="modal fade" id="editModalPemerintah" tabindex="-1" aria-labelledby="editModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                          <form action="{{ route('pemerintahs.update', $pemerintah->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel1">Ubah Data Struktur</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="editedData" class="form-label">Data yang Diubah</label><br>
                                            <p><b>STRUKTUR PEMERINTAH DESA :</b></p>
                                            <img src="{{ asset('storage/' . $pemerintah->gambar_1) }}" alt="Gambar Berita" width="50%" height="auto">
                                            <p><br>
                                              <input type="file" class="form-control" id="gambar_1" name="gambar_1" accept="image/*"
                                                id="basic-default-name" placeholder="Silahkan isi"/>
                                                <br>
                                            <p><b>STRUKTUR BPD :</b></p>
                                            <img src="{{ asset('storage/' . $pemerintah->gambar_2) }}" alt="Gambar Berita" width="50%" height="auto">
                                            <p><br>
                                              <input type="file" class="form-control" id="gambar_2" name="gambar_2" accept="image/*"
                                                id="basic-default-name" placeholder="Silahkan isi"/> 

                                        </div>
                                        <div class="mb-3" style="display: none">
                                          <textarea name="isi_1" id="isi_1" rows="4">{{ $pemerintah->isi_1 }}</textarea>
                                          <textarea name="isi_2" id="isi_2" rows="4">{{ $pemerintah->isi_2 }}</textarea>
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