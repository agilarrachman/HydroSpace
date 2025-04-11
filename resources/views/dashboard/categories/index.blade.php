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
                        <h5 class="mb-0">Daftar Kategori</h5>
                        <div class="avatar avatar-online">
                            <img src="{{ asset('../storage/' . auth()->user()->profile_picture) }}" alt class="w-px-40 rounded-circle object-fit-cover" />
                        </div>
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div>
                    <!-- Content -->

                    <div class="container-xxl container-p-y">
                        <div class="row justify-content-between align-items-center">
                            <h5 class="mb-3 col-lg-6 d-flex align-items-center"><i class="menu-icon tf-icons bx bx-category me-2"></i> Kategori Produk</h5>
                            <div class="d-flex mb-4 col-lg-6 justify-content-end">
                                <a href="/dashboard/product-categories/create" class="btn btn-primary me-2">
                                    <i class="bx bx-plus-circle me-2"></i> Tambah Kategori
                                </a>
                                <form action="/dashboard/categories" class="d-flex">
                                    <div class="input-group">
                                        <input type="text" name="searchProductCategory" class="form-control outline-secondary" placeholder="Cari kategori produk" value="{{ request('searchProductCategory') }}">
                                        <button class="border-none p-0" type="submit">
                                            <span class="input-group-text h-100" style="border-top-left-radius: 0rem; border-top-right-radius: 0.375rem; border-bottom-right-radius: 0.375rem; border-bottom-left-radius: 0rem;">
                                                <i class="bx bx-search"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        @if(session()->has('productSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('productSuccess') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if(session()->has('productError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('productError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <!-- Striped Rows -->
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><strong>#</strong></th>
                                            <th><strong>Nama Kategori</strong></th>
                                            <th><strong>Slug</strong></th>
                                            <th class="text-center"><strong>Aksi</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($productCategories as $productCategory)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $productCategory->name }}</td>
                                            <td>{{ $productCategory->slug }}</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="/dashboard/product-categories/{{ $productCategory->slug }}/edit"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <form action="/dashboard/product-categories/{{ $productCategory->slug }}" method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn p-0" onclick="return confirm('Apakah kamu yakin akan menghapus data kategori produk ini?')">
                                                                    <i class="bx bx-trash me-2"></i>
                                                                    <div data-i18n="Delete Account">Delete</div>
                                                                </button>
                                                            </form>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Striped Rows -->
                    </div>

                    <div class="container-xxl container-p-y">
                        <div class="row justify-content-between align-items-center">
                            <h5 class="mb-3 col-lg-6 d-flex align-items-center"><i class="menu-icon tf-icons bx bx-category me-2"></i> Kategori Video</h5>
                            <div class="d-flex mb-4 col-lg-6 justify-content-end">
                                <a href="/dashboard/video-categories/create" class="btn btn-primary me-2">
                                    <i class="bx bx-plus-circle me-2"></i> Tambah Kategori
                                </a>
                                <form action="/dashboard/categories" class="d-flex">
                                    <div class="input-group">
                                        <input type="text" name="searchVideoCategory" class="form-control outline-secondary" placeholder="Cari kategori video" value="{{ request('searchVideoCategory') }}">
                                        <button class="border-none p-0" type="submit">
                                            <span class="input-group-text h-100" style="border-top-left-radius: 0rem; border-top-right-radius: 0.375rem; border-bottom-right-radius: 0.375rem; border-bottom-left-radius: 0rem;">
                                                <i class="bx bx-search"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        @if(session()->has('videoSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('videoSuccess') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if(session()->has('videoError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('videoError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <!-- Striped Rows -->
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><strong>#</strong></th>
                                            <th><strong>Nama Kategori</strong></th>
                                            <th><strong>Slug</strong></th>
                                            <th class="text-center"><strong>Aksi</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($videoCategories as $videoCategory)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $videoCategory->name }}</td>
                                            <td>{{ $videoCategory->slug }}</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="/dashboard/video-categories/{{ $videoCategory->slug }}/edit"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <form action="/dashboard/video-categories/{{ $videoCategory->slug }}" method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn p-0" onclick="return confirm('Apakah kamu yakin akan menghapus data kategori video ini?')">
                                                                    <i class="bx bx-trash me-2"></i>
                                                                    <div data-i18n="Delete Account">Delete</div>
                                                                </button>
                                                            </form>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Striped Rows -->
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
