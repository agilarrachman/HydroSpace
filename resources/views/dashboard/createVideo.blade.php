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
                        <h5 class="mb-0">Tambah Data Video</h5>

                        <div class="avatar avatar-online">
                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <a href="/dashboard/video" class="btn btn-primary">
                            <i class="bx bx-arrow-back me-2"></i>Kembali
                        </a>
                        <div class="authentication-wrapper authentication-basic container-p-y">
                            <div class="authentication-inner" style="max-width: 100%;">
                                <!-- Create Video -->
                                <div class="card">
                                    <div class="card-body">
                                        <form id="formAuthentication" class="mb-3" action="index.html" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="video" class="form-label">Video</label>
                                                <input type="file" class="form-control" id="video" name="video" accept="video/mp4" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="thumbnail" class="form-label">Thumbnail</label>
                                                <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Judul</label>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Masukkan slug" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="category_id" class="form-label">Kategori</label>
                                                <select class="form-control" id="category_id" name="category_id">
                                                    <option value="">Pilih kategori</option>
                                                    <!-- Add your categories here -->
                                                    <option value="1">Kategori 1</option>
                                                    <option value="2">Kategori 2</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description"></textarea>
                                            </div>
                                            <div class="objective g-2 mb-3">
                                                <div class="row g-2">
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="objective1" class="form-label">Objektif 1</label>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="floatingHeading"
                                                                placeholder="Masukkan judul objektif video"
                                                                aria-describedby="floatingHeadingHelp" />
                                                            <label for="floatingHeading">Judul Objektif</label>
                                                        </div>
                                                        <div class="form-floating">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="floatingDescription"
                                                                placeholder="Jelaskan secara singkat tujuan dari video ini"
                                                                aria-describedby="floatingDescriptionHelp" />
                                                            <label for="floatingDescription">Deskripsi Objektif</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="objective1" class="form-label">Objektif 2</label>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="floatingHeading"
                                                                placeholder="Masukkan judul objektif video"
                                                                aria-describedby="floatingHeadingHelp" />
                                                            <label for="floatingHeading">Judul Objektif</label>
                                                        </div>
                                                        <div class="form-floating">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="floatingDescription"
                                                                placeholder="Jelaskan secara singkat tujuan dari video ini"
                                                                aria-describedby="floatingDescriptionHelp" />
                                                            <label for="floatingDescription">Deskripsi Objektif</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="objective1" class="form-label">Objektif 3</label>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="floatingHeading"
                                                                placeholder="Masukkan judul objektif video"
                                                                aria-describedby="floatingHeadingHelp" />
                                                            <label for="floatingHeading">Judul Objektif</label>
                                                        </div>
                                                        <div class="form-floating">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="floatingDescription"
                                                                placeholder="Jelaskan secara singkat tujuan dari video ini"
                                                                aria-describedby="floatingDescriptionHelp" />
                                                            <label for="floatingDescription">Deskripsi Objektif</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="objective1" class="form-label">Objektif 4</label>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="floatingHeading"
                                                                placeholder="Masukkan judul objektif video"
                                                                aria-describedby="floatingHeadingHelp" />
                                                            <label for="floatingHeading">Judul Objektif</label>
                                                        </div>
                                                        <div class="form-floating">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="floatingDescription"
                                                                placeholder="Jelaskan secara singkat tujuan dari video ini"
                                                                aria-describedby="floatingDescriptionHelp" />
                                                            <label for="floatingDescription">Deskripsi Objektif</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <button class="btn btn-primary d-grid w-100" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /Create Product -->
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
</body>

</html>