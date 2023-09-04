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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /Pemerintahan /</span>Ubah
                                Data</h4>

                            <!-- Striped Rows -->
                            <div class="card">
                                <div class="table-responsive text-nowrap">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">Ubah Data Visi Dan Misi Pemerintahan Desa</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('pemerintahs.update', $pemerintah->id) }}" method="POST" enctype="multipart/form-data"
                                            onsubmit="showEditPemerintahConfirmationModal(event)">
                                            @csrf
                                            @method('PUT')
                                    
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" name="isi_1" id="isi_1" rows="5" placeholder="Silahkan isi" 
                                                    required
                                                          oninvalid="this.setCustomValidity('Harap Diisi Dahulu')"
                                                          oninput="this.setCustomValidity('')">{{ $pemerintah->isi_1 }}</textarea>
                                                  </div>
                                            </div>
                                    
                                            <div class="mb-3" style="display: none">
                                                <textarea name="isi_2" id="isi_2" rows="4">{{ $pemerintah->isi_2 }}</textarea>
                                                <input type="file" name="gambar_1" id="gambar_1">
                                                @if ($pemerintah->gambar_1)
                                                    <img src="{{ asset('storage/' . $pemerintah->gambar_1) }}" alt="Gambar 1" style="max-width: 200px;">
                                                @endif
                                                <input type="file" name="gambar_2" id="gambar_2">
                                                @if ($pemerintah->gambar_2)
                                                    <img src="{{ asset('storage/' . $pemerintah->gambar_2) }}" alt="Gambar 2" style="max-width: 200px;">
                                                @endif
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    
                                                    <a href="#" onclick="window.history.back()" class="btn btn-success">Kembali</a>
                                                </div>
                                            </div>
                                        </form>
                                        <script>
                                            function showEditPemerintahConfirmationModal(event) {
                                                event.preventDefault(); // Prevent form submission

                                                // Show the editPemerintah confirmation modal
                                                $('#editPemerintahConfirmationModal').modal('show');

                                                // Add a click event listener to the "editPemerintah" button inside the modal
                                                $('#editPemerintahButton').on('click', function() {
                                                    // Submit the form after the user confirms the deletion
                                                    event.target.submit();

                                                    // Hide the editPemerintah confirmation modal
                                                    $('#editPemerintahConfirmationModal').modal('hide');
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
