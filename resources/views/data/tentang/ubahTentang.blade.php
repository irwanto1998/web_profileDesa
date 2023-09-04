<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">
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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /Tentang Desa /</span>Ubah
                                Data</h4>

                            <!-- Striped Rows -->
                            <div class="card">
                                <div class="table-responsive text-nowrap">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">Ubah Data Tentang Desa</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('tentangs.update', $tentang) }}" method="POST" enctype="multipart/form-data" onsubmit="showEditMechaConfirmationModal(event)">
                                            @csrf
                                            @method('PUT')
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" name="isi" rows="5" placeholder="Silahkan isi" 
                                                    required
                                                          oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                                          oninput="this.setCustomValidity('')">{{ $tentang->isi }}</textarea>
                                                        <br>
                                                    <h6><b>DATA RUKUN WARGA (RW) DAN RUKUN TETANGGA (RT)
                                                            DESA AMPERA RAYA KEC. SUNGAI AMBAWANG</b></h6>    
                                                    <img src="{{ asset('storage/images/' . $tentang->gambar) }}" alt="Gambar" width="50%" height="auto">
                                                        <p><br>
                                                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*"
                                                            id="basic-default-name" placeholder="Silahkan isi" /> 
  
                                                  </div>
                                                
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    
                                                    <a href="#" onclick="window.history.back()" class="btn btn-success">Kembali</a>
                                                </div>
                                            </div>
                                        </form>
                                        <script>
                                            function showEditMechaConfirmationModal(event) {
                                                event.preventDefault(); // Prevent form submission

                                                // Show the editMecha confirmation modal
                                                $('#editMechaConfirmationModal').modal('show');

                                                // Add a click event listener to the "editMecha" button inside the modal
                                                $('#editMechaButton').on('click', function() {
                                                    // Submit the form after the user confirms the deletion
                                                    event.target.submit();

                                                    // Hide the editMecha confirmation modal
                                                    $('#editMechaConfirmationModal').modal('hide');
                                                });
                                            }
                                        </script>
                                          
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
