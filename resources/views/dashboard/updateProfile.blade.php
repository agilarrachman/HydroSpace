<!DOCTYPE html>
<html lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>{{ $title }}</title>
    <link rel="icon" href="{{ asset('images/icon.webp') }}" type="image/gif" sizes="16x16">
    <meta name="description" content="" />

    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" /> --}}
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('layouts/dashboard/css/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('layouts/dashboard/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('layouts/dashboard/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('layouts/dashboard/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('layouts/dashboard/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('layouts/dashboard/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('layouts/dashboard/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('layouts/dashboard/js/config.js') }}"></script>

    <style>
        .bg-menu-theme .menu-inner>.menu-item.active>.menu-link {
            background-color: rgba(53, 78, 51, 0.16) !important;
            color: #354e33;
        }

        .bg-menu-theme .menu-inner>.menu-item.active:before {
            background-color: #354e33;
        }

        .app-brand .layout-menu-toggle {
            background-color: #354e33 !important;
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('partials.sidebar-dashboard')

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav
                    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center justify-content-between" id="navbar-collapse">
                        <h5 class="mb-0">Edit Profil Admin</h5>

                        <div class="avatar avatar-online">
                            <img src="{{ asset('../storage/' . auth()->user()->profile_picture) }}" alt class="w-px-40 rounded-circle object-fit-cover" />
                        </div>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-12 mb-4 order-0">
                                <div class="card h-100 d-flex align-items-center justify-content-center">
                                    <form id="formAuthentication" class="mb-3" action="/dashboard/profile/{{ auth()->user()->username }}" method="post" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="d-flex align-items-center row">
                                            <div class="col-sm-5 px-5 text-center">
                                                <img id="profileImagePreview" src="{{ asset('../storage/' . $admin->profile_picture) }}" alt="" class="rounded-circle mx-auto mx-lg-0 mb-3" style="width: 140px; height: 140px; object-fit: cover;">
                                                <input type="file" name="profile_picture" id="profile_picture" class="form-control mx-auto @error('profile_picture') is-invalid @enderror" accept="image/*" onchange="previewImage(event)">
                                                @error('profile_picture')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <div id="rulesProfileImage" class="form-text text-start">Silakan unggah gambar profil dengan format file gambar (jpeg, png, jpg, gif) dan ukuran maksimum 5 MB</div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="card-body">
                                                    <form>
                                                        <div class="row align-items-center">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="username" class="form-label">Username</label>
                                                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', $admin->username) }}" autofocus>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="name" class="form-label">Nama Lengkap</label>
                                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $admin->name) }}">
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $admin->email) }}">
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="phone_number" class="form-label">Nomor Handphone</label>
                                                                <input type="number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number', $admin->phone_number) }}" placeholder="Cth: 081512341234">
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                                                <div class="d-flex">
                                                                    <div class="form-check me-3">
                                                                        <input class="form-check-input" type="radio" name="gender" id="Pria" value="Pria" checked>
                                                                        <label class="form-check-label" for="Pria">
                                                                            Laki-laki
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="gender" id="Wanita" value="Wanita">
                                                                        <label class="form-check-label" for="Wanita">
                                                                            Perempuan
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="date_joined" class="form-label">Tanggal Bergabung</label>
                                                                <input type="text" class="form-control" id="date_joined" name="date_joined" value="{{ $admin->created_at->format('d/m/Y') }}" readonly>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <a href="/dashboard/profile/{{ auth()->user()->username }}" class="btn btn-outline-primary w-100">Batal</a>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <button type="submit" class="btn btn-primary w-100">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

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

    <script src="{{ asset('layouts/dashboard/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('layouts/dashboard/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('layouts/dashboard/js/bootstrap.js') }}"></script>
    <script src="{{ asset('layouts/dashboard/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('layouts/dashboard/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('layouts/dashboard/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('layouts/dashboard/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('layouts/dashboard/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
        // Menampilkan Preview Profile Image
        function previewImage(event) {
            var reader = new FileReader(); // Create FileReader object

            reader.onload = function() {
                var output = document.getElementById('profileImagePreview'); // Get the image preview element
                output.src = reader.result; // Set the src attribute with the file's data
            };

            reader.readAsDataURL(event.target.files[0]); // Read the file as a data URL
        }
    </script>
</body>

</html>