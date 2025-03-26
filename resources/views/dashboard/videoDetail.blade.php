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
                        <h5 class="mb-0">Panduan Praktis Menanam Sawi Hidroponik</h5>

                        <div class="avatar avatar-online">
                            <img src="{{ asset('../storage/' . auth()->user()->profile_picture) }}" alt class="w-px-40 h-auto rounded-circle" />
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
                                        <div class="row gy-4 gx-5">
                                            <div class="col-12">
                                                <p class="col-lg-10 lead mb-0">🌱 Pemilihan & Perawatan Tanaman</p>
                                                <h4 class="text-uppercase mb-3">Panduan Praktis Menanam Sawi Hidroponik</h1>
                                                <div>
                                                    <video width="100%" controls class="video-player" poster="{{ asset('images/thumbnail/tips menanam bayam.jpeg') }}" style="max-width: 900px; aspect-ratio: 16 / 9; object-fit: cover;">
                                                        <source src="{{ asset('videos/1.mp4') }}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <h5 class="mb-0">Tentang Video</h5>
                                                <p>Ingin menanam sawi hidroponik sendiri di rumah? Video ini akan membimbingmu dari pemilihan bibit, perawatan nutrisi, hingga panen dengan hasil yang maksimal. Cocok untuk pemula maupun yang ingin meningkatkan teknik bercocok tanam hidroponik!</p>

                                                <h5 class="mb-2">Detail Video</h5>
                                                <table class="table table-bordered mb-4">
                                                    <tbody>
                                                        <tr>
                                                            <th>Durasi</th>
                                                            <td>10 menit</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tingkat Kesulitan</th>
                                                            <td>Pemula</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Gaya Penyampaian</th>
                                                            <td>Analisis & praktik langsung</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Objective 1</th>
                                                            <td>
                                                                <p class="fw-bold m-0">Memilih Bibit Sawi yang Unggul</p>
                                                                <p class="mb-0 text-wrap">Ketahui ciri-ciri bibit berkualitas tinggi untuk pertumbuhan sawi yang sehat dan hasil panen maksimal.</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Objective 2</th>
                                                            <td>
                                                                <p class="fw-bold m-0">Memilih Bibit Sawi yang Unggul</p>
                                                                <p class="mb-0 text-wrap">Ketahui ciri-ciri bibit berkualitas tinggi untuk pertumbuhan sawi yang sehat dan hasil panen maksimal.</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Objective 3</th>
                                                            <td>
                                                                <p class="fw-bold m-0">Memilih Bibit Sawi yang Unggul</p>
                                                                <p class="mb-0 text-wrap">Ketahui ciri-ciri bibit berkualitas tinggi untuk pertumbuhan sawi yang sehat dan hasil panen maksimal.</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Objective 4</th>
                                                            <td>
                                                                <p class="fw-bold m-0">Memilih Bibit Sawi yang Unggul</p>
                                                                <p class="mb-0 text-wrap">Ketahui ciri-ciri bibit berkualitas tinggi untuk pertumbuhan sawi yang sehat dan hasil panen maksimal.</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a class="btn btn-warning me-2" href="/dashboard/video/update">
                                                    <i class="bx bx-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="bx bx-trash"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Create Video -->
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