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
                        <h5 class="mb-0">{{ $product->name }}</h5>

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
                        <a href="/dashboard/products" class="btn btn-primary">
                            <i class="bx bx-arrow-back me-2"></i>Kembali
                        </a>
                        <div class="authentication-wrapper authentication-basic container-p-y">
                            <div class="authentication-inner" style="max-width: 100%;">
                                <!-- Create Product -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row gy-4 gx-5">
                                            <div class="col-md-6">
                                                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @php
                                                                $picture = 'picture' . $i;
                                                            @endphp
                                                            @if (!empty($product->$picture))
                                                                <div class="carousel-item {{ $i === 1 ? 'active' : '' }}" style="max-width: 625px; max-height: 625px">
                                                                    <img src="{{ asset('storage/' . $product->$picture) }}" alt="Product Image {{ $i }}" class="rounded-2" style="object-fit: cover; width: 100%; height: 100%;">
                                                                </div>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <div class="mt-3 d-flex justify-content-center gap-2">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @php
                                                            $picture = 'picture' . $i;
                                                        @endphp
                                                        @if (!empty($product->$picture))
                                                            <img src="{{ asset('storage/' . $product->$picture) }}" class="img-thumbnail" style="width: 18%; aspect-ratio: 1 / 1; object-fit: cover;" onclick="changeCarouselImage({{ $i - 1 }})">
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="cat_4">{{ $product->category->name }}</label>
                                                <h2 class="fs-40">{{ $product->name }}</h2>
                                                <p class="col-lg-10">{!! $product->description !!}</p>
                                                <div class="d-flex mb-4 align-items-center">
                                                    <div>
                                                        <h3 class="fs-32 mb-0 me-2">Rp {{ number_format($product->price, 0, ',', '.') }}</h3>
                                                    </div>
                                                </div>

                                                <div class="group mb-4 d-flex gap-2">
                                                    <h5 class="mb-3">Tersisa</h5>
                                                    <p>{{ $product->stock }}</p>
                                                </div>

                                                <a class="btn btn-warning me-2" href="/dashboard/products/{{ $product->slug }}/edit">
                                                    <i class="bx bx-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-danger" href="/dashboard/products/{{ $product->slug }}" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin?')) document.getElementById('delete-form-{{ $product->slug }}').submit();">
                                                    <i class="bx bx-trash me-1"></i> Hapus
                                                </a>
                                                <form id="delete-form-{{ $product->slug }}" action="/dashboard/products/{{ $product->slug }}" method="post" style="display: none;">
                                                    @method('delete')
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>

                                        <script>
                                            function changeCarouselImage(index) {
                                                $('#productCarousel').carousel(index);
                                            }
                                        </script>
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
