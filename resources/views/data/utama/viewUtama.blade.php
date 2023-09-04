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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /</span> Halaman Utama</h4>


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
                    @foreach ($utamas as $utama)
                                  @if ($utama->id === 1)
                    <div class="col-lg-4 mb-4 order-0">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <i class='bx bxs-map-alt' style='font-size: 50px;'></i>
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editModal1" data-id="{{ $utama->id }}">
                                  <i class="bx bx-edit-alt me-1"></i> Ubah Data
                                </a>                                
                              </div>
                            </div>
                          </div>
                          <br>
                            <span class="d-block mb-1"><b style="color: #696cff;">LUAS AREA</b></span>
                            <h3 class="card-title text-nowrap mb-2"> {{ $utama->hasil }} 
                              &nbsp;<font style="font-size: 25px; color: #566a7f;">Ha</font>
                            </h3>
                        </div>
                      </div>
                    </div>
                    @endif
                    @endforeach
                    
                    @foreach ($utamas as $utama)
                    @if ($utama->id === 2)
                    <div class="col-lg-4 mb-4 order-0">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <i class='bx bxs-user-account' style='font-size: 50px;'></i>
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editModal2" data-id="{{ $utama->id }}">
                                  <i class="bx bx-edit-alt me-1"></i> Ubah Data
                                </a>
                              </div>
                            </div>
                          </div>
                          <br>
                            <span class="fw-semibold d-block mb-1"><b  style="color: #696cff;">POPULASI PENDUDUK</b></span>
                              <h3 class="card-title mb-2"> {{ $utama->hasil }}
                              &nbsp;<font style="font-size: 25px; color: #566a7f;">Jiwa</font>
                            </h3>
                        </div>
                      </div>
                    </div>
                    @endif
                    @endforeach

                    <div class="col-lg-4 col-md-4 order-1">
                      <div class="row">

                        @foreach ($utamas as $utama)
                        @if ($utama->id === 3)
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                          <div class="card">
                            <div class="card-body">
                              <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                  <i class='bx bx-male-sign' style='font-size: 50px;'></i>
                                </div>
                                <div class="dropdown">
                                  <button
                                    class="btn p-0"
                                    type="button"
                                    id="cardOpt3"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                  >
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editModal3" data-id="{{ $utama->id }}">
                                      <i class="bx bx-edit-alt me-1"></i> Ubah Data
                                    </a>                                
                                  </div>
                                </div>
                              </div><br>
                              <span class="d-block mb-1"><b style="color: #696cff;">LAKI-LAKI</b></span>
                                <h3 class="card-title text-nowrap mb-2"> {{ $utama->hasil }} 
                                &nbsp;<font style="font-size: 25px; color: #566a7f;">Jiwa</font>
                                </h3>
                            </div>
                          </div>
                        </div>
                        @endif
                        @endforeach

                        @foreach ($utamas as $utama)
                        @if ($utama->id === 4)
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                          <div class="card">
                            <div class="card-body">
                              <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                  <i class='bx bx-female-sign' style='font-size: 50px;'></i>
                                </div>
                                <div class="dropdown">
                                  <button
                                    class="btn p-0"
                                    type="button"
                                    id="cardOpt6"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                  >
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editModal4" data-id="{{ $utama->id }}">
                                      <i class="bx bx-edit-alt me-1"></i> Ubah Data</a>
                                  </div>
                                </div>
                              </div><br>
                              <span class="fw-semibold d-block mb-1"><b  style="color: #696cff;">PEREMPUAN</b></span>
                                <h3 class="card-title mb-2"> {{ $utama->hasil }}
                                  &nbsp;<font style="font-size: 25px; color: #566a7f;">Jiwa</font>
                                </h3>
                            </div>
                          </div>
                        </div>
                        @endif
                        @endforeach

                      </div>
                    </div>
                  </div>
                <!-- / Content -->


                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="row">
                      @foreach ($utamas as $utama)
                                    @if ($utama->id === 1)

                      <!-- MODAL EDIT -->
                      <div class="modal fade" id="editModal1" tabindex="-1" aria-labelledby="editModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                          <form id="editForm" action="{{ route('utamas.update', $utama) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel1">Ubah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="editedData" class="form-label">Data yang Diubah</label>
                                            <input type="text" class="form-control" id="editedData" name="hasil" value="{{ $utama->hasil }}">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary" id="saveChangesBtn">Simpan</button>
                                </div>
                            </div>
                          </form>
                          <script>
                            function showEdit1ConfirmationModal(event) {
                                event.preventDefault(); // Prevent form submission
                        
                                // Show the Edit1 confirmation modal
                                $('#Edit1ConfirmationModal').modal('show');
                        
                                // Edit1 a click event listener to the "Edit1" button inside the modal
                                $('#Edit1Button').on('click', function () {
                                    // Submit the form after the user confirms the deletion
                                    event.target.submit();
                        
                                    // Hide the Edit1 confirmation modal
                                    $('#Edit1ConfirmationModal').modal('hide');
                                });
                            }
                          </script>
                        </div>
                      </div>
                      @endif
                      @endforeach
                      
                      @foreach ($utamas as $utama)
                                    @if ($utama->id === 2)

                      <!-- MODAL EDIT -->
                      <div class="modal fade" id="editModal2" tabindex="-1" aria-labelledby="editModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                          <form id="editForm" action="{{ route('utamas.update', $utama) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel1">Ubah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="editedData" class="form-label">Populasi Seluruh Penduduk</label>
                                            <input type="text" class="form-control" id="editedData" name="hasil" value="{{ $utama->hasil }}"><br>
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
                      @endif
                      @endforeach


                      @foreach ($utamas as $utama)
                        @if ($utama->id === 3)

                      <!-- MODAL EDIT -->
                      <div class="modal fade" id="editModal3" tabindex="-1" aria-labelledby="editModalLabel3" aria-hidden="true">
                        <div class="modal-dialog">
                          <form id="editForm" action="{{ route('utamas.update', $utama) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel3">Ubah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="editedData" class="form-label">Populasi Laki-Laki</label>
                                            <input type="text" class="form-control" id="editedData" name="hasil" value="{{ $utama->hasil }}">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary" id="saveChangesBtn">Simpan</button>
                                </div>
                            </div>
                          </form>
                          <script>
                            function showEdit1ConfirmationModal(event) {
                                event.preventDefault(); // Prevent form submission
                        
                                // Show the Edit1 confirmation modal
                                $('#Edit1ConfirmationModal').modal('show');
                        
                                // Edit1 a click event listener to the "Edit1" button inside the modal
                                $('#Edit1Button').on('click', function () {
                                    // Submit the form after the user confirms the deletion
                                    event.target.submit();
                        
                                    // Hide the Edit1 confirmation modal
                                    $('#Edit1ConfirmationModal').modal('hide');
                                });
                            }
                          </script>
                        </div>
                      </div>
                      @endif
                      @endforeach

                      @foreach ($utamas as $utama)
                                    @if ($utama->id === 4)
                                  
                      <!-- MODAL EDIT -->
                      <div class="modal fade" id="editModal4" tabindex="-1" aria-labelledby="editModalLabel4" aria-hidden="true">
                        <div class="modal-dialog">
                          <form id="editForm" action="{{ route('utamas.update', $utama) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel4">Ubah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="editedData" class="form-label">Populasi Perempuan</label>
                                            <input type="text" class="form-control" id="editedData" name="hasil" value="{{ $utama->hasil }}"><br>
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
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <!-- Tabs -->
                <!--/ Striped Rows -->
                
                <div class="card">
                  <div class="table-responsive text-nowrap">
                      <div class="card-header d-flex align-items-center justify-content-between">
                          <h5 class="mb-0">Data Kontak Kantor Desa Ampera Raya</h5>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="cardOpt4"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                              <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editModalKontak" data-id="{{ $utama->id }}">
                                <i class="bx bx-edit-alt me-1"></i> Ubah Data
                            </a>                                
                            </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                            @foreach ($kontaks as $kontak)
                            <table class="table table-bordered">
                                <thead>
                                </thead>
                            <tbody>
                                <tr>
                                <td>Alamat Kantor Desa</td>
                                <td><b>{{ $kontak->alamat }}</b></td>
                                </tr>
                                <tr>
                                <td>Email</td>
                                <td><b>{{ $kontak->email }}</b></td>
                                </tr>
                                <tr>
                                <td>Jam Oprasional</td>
                                <td><b>{{ $kontak->jmop }}-{{ $kontak->jmop_2 }}</b></td>
                                </tr>
                            </tbody>
                            </table>
                            
                      <!-- MODAL EDIT -->
                      <div class="modal fade" id="editModalKontak" tabindex="-1" aria-labelledby="editModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                          <form id="editForm" action="{{ route('kontaks.update', $kontak) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel1">Ubah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="editedData" class="form-label">Alamat Kantor Desa</label>
                                            <textarea class="form-control" name="alamat" rows="5" placeholder="Silahkan alamat" 
                                                    required
                                                          oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                                          oninput="this.setCustomValidity('')">{{ $kontak->alamat }}</textarea>
                                            <br>
                                            <label for="editedData" class="form-label">Email </label>
                                            <input type="text" class="form-control" name="email" value="{{ $kontak->email }}">
                                            <br>
                                            <label for="editedData" class="form-label">Jam Buka </label><br>
                                            <input class="form-control" type="time" id="jmop" name="jmop" value="{{ Carbon\Carbon::parse($kontak->jmop)->format('H:i') }}">
                                            <br>
                                            <label for="editedData" class="form-label">Jam Tutup </label><br>
                                            <input class="form-control" type="time" id="jmop_2" name="jmop_2" value="{{ Carbon\Carbon::parse($kontak->jmop_2)->format('H:i') }}">
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

                            @endforeach
                        </div>
                      </div>
                  </div>
                </div><br>
                                
                <div class="card">
                  <div class="table-responsive text-nowrap">
                      <div class="card-header d-flex align-items-center justify-content-between">
                          <h5 class="mb-0">Data Kepala Desa Ampera Raya</h5>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="cardOpt4"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                              <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editModalKontak" data-id="{{ $utama->id }}">
                                <i class="bx bx-edit-alt me-1"></i> Ubah Data
                            </a>                                
                            </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                            @foreach ($kontaks as $kontak)
                            <table class="table table-bordered">
                                <thead>
                                </thead>
                            <tbody>
                                <tr>
                                <td>Nama Lengkap</td>
                                <td><b>{{ $kontak->alamat }}</b></td>
                                </tr>
                                <tr>
                                <td>NIP</td>
                                <td><b>-</b></td>
                                </tr>
                                <tr>
                                <td>Jabatan</td>
                                <td><b>{{ $kontak->jmop }}-{{ $kontak->jmop_2 }}</b></td>
                                </tr>
                            </tbody>
                            </table>
                            
                      <!-- MODAL EDIT -->
                      <div class="modal fade" id="editModalKontak" tabindex="-1" aria-labelledby="editModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                          <form id="editForm" action="{{ route('kontaks.update', $kontak) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel1">Ubah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="editedData" class="form-label">Alamat Kantor Desa</label>
                                            <textarea class="form-control" name="alamat" rows="5" placeholder="Silahkan alamat" 
                                                    required
                                                          oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                                          oninput="this.setCustomValidity('')">{{ $kontak->alamat }}</textarea>
                                            <br>
                                            <label for="editedData" class="form-label">Email </label>
                                            <input type="text" class="form-control" name="email" value="{{ $kontak->email }}">
                                            <br>
                                            <label for="editedData" class="form-label">Jam Buka </label><br>
                                            <input class="form-control" type="time" id="jmop" name="jmop" value="{{ Carbon\Carbon::parse($kontak->jmop)->format('H:i') }}">
                                            <br>
                                            <label for="editedData" class="form-label">Jam Tutup </label><br>
                                            <input class="form-control" type="time" id="jmop_2" name="jmop_2" value="{{ Carbon\Carbon::parse($kontak->jmop_2)->format('H:i') }}">
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

                            @endforeach
                        </div>
                      </div>
                  </div>
                </div>
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