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
            .bg-menu-theme .menu-inner > .menu-item.active > .menu-link {
                background-color: rgba(53, 78, 51, 0.16) !important;
                color: #354e33;
            }

            .bg-menu-theme .menu-inner > .menu-item.active:before {
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

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <h5 class="mb-0">Dashboard</h5>

                            <ul class="navbar-nav flex-row align-items-center ms-auto">

                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-medium d-block">John Doe</span>
                                                        <small class="text-muted">Admin</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bx bx-user me-2"></i>
                                                <span class="align-middle">My Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bx bx-cog me-2"></i>
                                                <span class="align-middle">Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="d-flex align-items-center align-middle">
                                                    <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                    <span class="flex-grow-1 align-middle ms-1">Billing</span>
                                                    <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ User -->
                            </ul>
                        </div>
                    </nav>

                    <!-- / Navbar -->

                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->

                        <div class="container-xxl flex-grow-1 container-p-y">
                            <div class="row">
                                <div class="col-xl-6 mb-4 order-0">
                                    <div class="card h-100 d-flex align-items-center justify-content-center">
                                        <div class="d-flex align-items-center row">
                                            <div class="col-sm-4 text-center text-sm-left">
                                                <div class="card-body px-0 px-md-4">
                                                    <img
                                                        src="{{ asset('images/dashboard/hero-dashboard.png') }}"
                                                        height="100"
                                                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                        data-app-light-img="illustrations/man-with-laptop-light.png" />
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-2">Selamat Datang, John Doe! 👋</h5>
                                                    <p class="mb-0">
                                                        Pantau perkembangan penjualan dan kelola data dengan mudah disini.
                                                    </p>
                                                    {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-2 col-lg-4 col-md-12 col-6 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <span class="avatar-initial rounded bg-label-success"><i class="bx bx-dollar-circle"></i></span>
                                                </div>
                                            </div>
                                            <span class="fw-medium d-block mb-1">Pendapatan</span>
                                            <h3 class="card-title mt-2 mb-1">Rp98,1 jt</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-2 col-lg-4 col-md-12 col-6 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <span class="avatar-initial rounded bg-label-warning"><i class="bx bx-leaf"></i></span>
                                                </div>
                                            </div>
                                            <span class="fw-medium d-block mb-1">Jumlah Produk</span>
                                            <h3 class="card-title text-nowrap mt-2 mb-1">132</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-2 col-lg-4 col-md-12 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <span class="avatar-initial rounded bg-label-danger"><i class="bx bx-transfer"></i></span>
                                                </div>
                                            </div>
                                            <span class="fw-medium d-block mb-1">Transaksi</span>
                                            <h3 class="card-title mt-2 mb-1">41</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Order Statistics -->
                                <div class="col-md-6 col-lg-4 col-xl-4 order-1 order-lg-0 mb-4">
                                    <div class="card h-100">
                                        <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                            <div class="card-title mb-0">
                                                <h5 class="m-0 me-2">Produk Terlaris</h5>
                                            </div>
                                        </div>
                                        <div class="card-body pt-3">
                                            <ul class="p-0 m-0 d-flex flex-column h-100">
                                                <li class="d-flex pb-1 flex-grow-1 align-items-center">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <img src="{{ asset('images/slider/1-flip.jpg') }}" alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                        <div class="me-2">
                                                            <h6 class="mb-0">Tomat Apel</h6>
                                                            <small class="text-muted">Kategori Bibit Sayur</small>
                                                        </div>
                                                        <div class="user-progress">
                                                            <small class="fw-medium">Rp12,5 jt</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex pb-1 flex-grow-1 align-items-center">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <img src="{{ asset('images/slider/1-flip.jpg') }}" alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                        <div class="me-2">
                                                            <h6 class="mb-0">Tomat Apel</h6>
                                                            <small class="text-muted">Kategori Bibit Sayur</small>
                                                        </div>
                                                        <div class="user-progress">
                                                            <small class="fw-medium">Rp12,5 jt</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex pb-1 flex-grow-1 align-items-center">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <img src="{{ asset('images/slider/1-flip.jpg') }}" alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                        <div class="me-2">
                                                            <h6 class="mb-0">Tomat Apel</h6>
                                                            <small class="text-muted">Kategori Bibit Sayur</small>
                                                        </div>
                                                        <div class="user-progress">
                                                            <small class="fw-medium">Rp12,5 jt</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex pb-1 flex-grow-1 align-items-center">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <img src="{{ asset('images/slider/1-flip.jpg') }}" alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                        <div class="me-2">
                                                            <h6 class="mb-0">Tomat Apel</h6>
                                                            <small class="text-muted">Kategori Bibit Sayur</small>
                                                        </div>
                                                        <div class="user-progress">
                                                            <small class="fw-medium">Rp12,5 jt</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex pb-1 flex-grow-1 align-items-center">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <img src="{{ asset('images/slider/1-flip.jpg') }}" alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                        <div class="me-2">
                                                            <h6 class="mb-0">Tomat Apel</h6>
                                                            <small class="text-muted">Kategori Bibit Sayur</small>
                                                        </div>
                                                        <div class="user-progress">
                                                            <small class="fw-medium">Rp12,5 jt</small>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Order Statistics -->

                                <!-- Expense Overview -->
                                <div class="col-md-6 col-lg-8 order-0 order-lg-1 mb-4">
                                    <div class="card h-100">
                                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                            <h5 class="m-0 me-2">Grafik Pendapatan</h5>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Pilih Periode
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Tahunan</a></li>
                                                    <li><a class="dropdown-item" href="#">Bulanan</a></li>
                                                    <li><a class="dropdown-item" href="#">Harian</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body px-0">
                                            <div class="tab-content p-0">
                                                <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                                                    <div id="incomeChart" style="height: 350px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Expense Overview -->

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
