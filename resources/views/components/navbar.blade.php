<!-- Navbar -->
     
@if(session('login-success'))
<script>
    // Fungsi untuk menampilkan popup notifikasi
    function showNotification(message) {
        // Buat elemen div untuk popup notifikasi
        var notificationDiv = document.createElement('div');
        notificationDiv.className = 'notification-popup';
        notificationDiv.innerText = message;

        // loginkan elemen div ke dalam body
        document.body.appendChild(notificationDiv);

        // Hapus popup notifikasi setelah beberapa detik (misalnya 3 detik)
        setTimeout(function () {
            document.body.removeChild(notificationDiv);
        }, 3000);
    }

      // Panggil fungsi showNotification dengan pesan notifikasi dari sesi
      showNotification("{{ session('login-success') }}");
  </script>
@endif
   
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>
        
        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
        
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="{{ asset('assets') }}/img/admin.png" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="#">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar avatar-online">
                                <img src="{{ asset('assets') }}/img/admin.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                        </div>
                    </a>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exLargeModal">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Profil Admin</span>
                    </a>
                </li>
                    
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                  
                <li>
                  <form action="{{ route('auth.logout') }}" method="post">
                      @csrf
                      <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal">
                          <i class="bx bx-power-off me-2"></i> Logout
                      </button>
                  </form>
                </li>
            </ul>
        </div>
    </nav>

    

                   <!-- Modal logout -->
                   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin keluar?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                <form action="{{ route('auth.logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Ya</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

<!-- Extra Large Modal -->
<div class="modal fade" id="exLargeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel4">My Profile</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        
        <form action="{{ route('users.update', ['user' => auth()->user()->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="basic-default-name" value="{{ auth()->user()->name }}"/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Username</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control" name="username"
                    id="basic-default-company"
                    value="{{ auth()->user()->username }}"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Password</label>
                <div class="col-sm-10">
                  <input
                    type="password"
                    class="form-control" name="password"
                    id="basic-default-company"
                    value="{{ auth()->user()->password }}"
                    placeholder=""
                  />
                </div>
              </div>
          
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Batal
              </button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
      </div>
    </div>
</div>
 <!-- / Navbar -->

<!-- Modal USERS -->

<!-- Add Confirmation Modal ADD USERS -->
<div class="modal fade" id="addConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="addConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Ingin menyimpan data ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary" id="addButton">Ya</button>
            </div>
        </div>
    </div>
  </div>
  
<!-- Edit Confirmation Modal EDIT USERS -->
<div class="modal fade" id="editConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="editConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin ingin merubah data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary" id="editButton">Ya</button>
            </div>
        </div>
    </div>
  </div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-danger" id="deleteButton">Ya</button>
            </div>
        </div>
    </div>
  </div>

  <!-- Modal BERITA -->

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteBeritaConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteBeritaConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteBeritaConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-danger" id="deleteBeritaButton">Hapus</button>
            </div>
        </div>
    </div>
  </div>
  
  <!-- Add Confirmation Modal -->
  <div class="modal fade" id="addBeritaConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="addBeritaConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBeritaConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Ingin menyimpan data ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary" id="addBeritaButton">Ya</button>
            </div>
        </div>
    </div>
  </div>
  
  <!-- Edit Confirmation Modal -->
  <div class="modal fade" id="editBeritaConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="editBeritaConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBeritaConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin ingin merubah data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary" id="editBeritaButton">Ya</button>
            </div>
        </div>
    </div>
  </div>
 
  
  <!-- Modal TENTANGS -->

<!-- Edit Confirmation Modal -->
<div class="modal fade" id="editMechaConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="editMechaConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMechaConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin ingin merubah data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary" id="editMechaButton">Ya</button>
            </div>
        </div>
    </div>
  </div>

    <!-- Modal PEMERINTAHS -->

<!-- Edit Confirmation Modal -->
<div class="modal fade" id="editPemerintahConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="editPemerintahConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPemerintahConfirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin ingin merubah data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary" id="editPemerintahButton">Ya</button>
            </div>
        </div>
    </div>
  </div>

