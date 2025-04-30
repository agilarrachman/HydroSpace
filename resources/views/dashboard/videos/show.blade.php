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

        .thumbnail img {
            display: block;
            margin: auto;
            object-fit: cover;
            /* Pastikan gambar tetap proporsional */
            height: 100%;
            /* Sesuaikan tinggi agar gambar memenuhi container */
        }
    </style>

    <link href="/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="/css/styleVideoDashboard.css" rel="stylesheet" type="text/css">
    <link href="/css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="/css/colors/scheme-01.css" rel="stylesheet" type="text/css">
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
                        <h5 class="mb-0">{{ $video->title }}</h5>

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
                        <a href="javascript:history.back()" class="btn btn-primary" onclick="history.back();">
                            <i class="bx bx-arrow-back me-2"></i>Kembali
                        </a>
                        <div class="authentication-wrapper authentication-basic container-p-y">
                            <div class="authentication-inner" style="max-width: 100%;">
                                <!-- Create Video -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-start mb-3">
                                            <div class="col-lg-6 col-12">
                                                <p class="col-lg-10 lead mb-0">{{ $video->videoCategory->name }}</p>
                                                <h4 class="text-uppercase mb-0" style="word-wrap: break-word; white-space: normal;">{{ $video->title }}</h1>
                                                    <p class="mt-0 mb-3 p-0">Diunggah oleh <b>{{ $video->admin->name }}</b></p>

                                                    <div class="relative overflow-hidden rounded-1">
                                                        <!-- Thumbnail -->
                                                        <div id="thumbnail" class="thumbnail relative overflow-hidden rounded-1" onclick="playVideo()">
                                                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                                                <div class="player wow scaleIn"><span></span></div>
                                                            </div>
                                                            <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                                                            <img src="{{ asset('../storage/' . $video->thumbnail) }}" class="w-100 hover-scale-1-1" alt="">
                                                        </div>

                                                        <!-- Video (Hidden by default) -->
                                                        <video id="video" controls class="video w-100 rounded-1" style="display: none;" poster="/images/thumbnail/tips menanam bayam.jpeg">
                                                            <source src="{{ asset('../storage/' . $video->video) }}" type="video/mp4">
                                                            Browser Anda tidak mendukung pemutaran video.
                                                        </video>
                                                    </div>
                                            </div>

                                            <div class="col-lg-6 ps-lg-5 text-dark mt-5">
                                                <div class="video-about mt-5">
                                                    <div class="me-lg-3">
                                                        <h5 class="text-uppercase">Tentang Video</h5>
                                                        <p class="text-dark text-wrap fs-16 lh-1-5 fw-500">
                                                            {{ $video->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="my-1">
                                                <div class="video-detail mt-4">
                                                    <h5 class="text-uppercase mb-3">Video Details</h5>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="fw-bold">Durasi</div>
                                                        <div style="color: #798D7A;">{{ $video->duration }} menit</div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="fw-bold">Tingkat Kesulitan</div>
                                                        <div style="color: #798D7A;">{{ $video->difficulty_level }}</div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="fw-bold">Gaya Penyampaian</div>
                                                        <div style="color: #798D7A;">{{ $video->delivery_style }}</div>
                                                    </div>
                                                    <div class="w-100 d-flex justify-content-between">
                                                        <div class="w-100 d-flex justify-content-between">
                                                            <div class="col-4 fw-bold">Produk yang Dibutuhkan</div>
                                                            <div class="text-wrap col-8 text-end ps-2" id="products">
                                                                @if ($video->videoProducts && $video->videoProducts->count())
                                                                @foreach ($video->videoProducts as $videoProduct)
                                                                @if ($videoProduct->product) <!-- Pastikan relasi product ada -->
                                                                <a href="#" style="text-decoration: none;">{{ $videoProduct->product->name }}</a>@if (!$loop->last), @endif
                                                                @endif
                                                                @endforeach
                                                                @else
                                                                <span style="color: #798D7A;">Tidak ada produk yang dibutuhkan</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <h5 class="mb-4">OBJECTIVE VIDEO</h5>
                                            <table class="table table-bordered mb-4">
                                                <tbody>
                                                    <tr>
                                                        <th>Objective 1</th>
                                                        <td>
                                                            <p class="fw-bold m-0">{{ $video->objective_heading1 }}</p>
                                                            <p class="mb-0 text-wrap">{{ $video->objective_description1 }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Objective 2</th>
                                                        <td>
                                                            <p class="fw-bold m-0">{{ $video->objective_heading2 }}</p>
                                                            <p class="mb-0 text-wrap">{{ $video->objective_description2 }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Objective 3</th>
                                                        <td>
                                                            <p class="fw-bold m-0">{{ $video->objective_heading3 }}</p>
                                                            <p class="mb-0 text-wrap">{{ $video->objective_description3 }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Objective 4</th>
                                                        <td>
                                                            <p class="fw-bold m-0">{{ $video->objective_heading4 }}</p>
                                                            <p class="mb-0 text-wrap">{{ $video->objective_description4 }}</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="d-flex">
                                                <button class="btn btn-warning me-2" onclick="navigateToEdit('{{ $video->slug }}')">
                                                    <i class="bx bx-edit  me-2"></i> Edit
                                                </button>
                                                <form action="/dashboard/videos/{{ $video->slug }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger" onclick="return confirm('Apakah kamu yakin akan menghapus data video ini?')">
                                                        <i class="bx bx-trash me-2"></i>
                                                        <div data-i18n="Delete Account">Delete</div>
                                                    </button>
                                                </form>
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

    <script src="/js/plugins.js"></script>
    <script src="/js/designesia.js"></script>

    <script>
        function playVideo() {
            document.getElementById("thumbnail").style.display = "none"; // Sembunyikan thumbnail
            let video = document.getElementById("video");
            video.style.display = "block"; // Tampilkan video
            video.play(); // Mulai video secara otomatis
        }

        function navigateToEdit(slug) {
            window.location.href = `/dashboard/videos/${slug}/edit`;
        }
    </script>
</body>

</html>