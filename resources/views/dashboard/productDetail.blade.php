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
                        <h5 class="mb-0">Produk Bibit Sawi</h5>

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
                        <a href="javascript:history.back()" class="btn btn-primary">
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
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('images/shop/bibit-benih/bibit-sawi.png') }}" class="d-block w-100 h-100" alt="Product Image 1" style="object-fit: cover;">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('images/shop/bibit-benih/bibit-sawi2.png') }}" class="d-block w-100 h-100" alt="Product Image 2" style="object-fit: cover;">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('images/shop/bibit-benih/bibit-sawi3.jpg') }}" class="d-block w-100 h-100" alt="Product Image 3" style="object-fit: cover;">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('images/shop/bibit-benih/bibit-sawi4.webp') }}" class="d-block w-100 h-100" alt="Product Image 3" style="object-fit: cover;">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('images/shop/bibit-benih/bibit-sawi5.jpg') }}" class="d-block w-100 h-100" alt="Product Image 3" style="object-fit: cover;">
                                                        </div>
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
                                                <div class="mt-3 d-flex justify-content-between">
                                                    <img src="{{ asset('images/shop/bibit-benih/bibit-sawi.png') }}" class="img-thumbnail" style="width: 18%; aspect-ratio: 1 / 1;" onclick="changeCarouselImage(0)">
                                                    <img src="{{ asset('images/shop/bibit-benih/bibit-sawi2.png') }}" class="img-thumbnail" style="width: 18%; aspect-ratio: 1 / 1;" onclick="changeCarouselImage(1)">
                                                    <img src="{{ asset('images/shop/bibit-benih/bibit-sawi3.jpg') }}" class="img-thumbnail" style="width: 18%; aspect-ratio: 1 / 1;" onclick="changeCarouselImage(2)">
                                                    <img src="{{ asset('images/shop/bibit-benih/bibit-sawi4.webp') }}" class="img-thumbnail" style="width: 18%; aspect-ratio: 1 / 1;" onclick="changeCarouselImage(3)">
                                                    <img src="{{ asset('images/shop/bibit-benih/bibit-sawi5.jpg') }}" class="img-thumbnail" style="width: 18%; aspect-ratio: 1 / 1;" onclick="changeCarouselImage(4)">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="cat_4">🌱 Bibit & Benih</label>
                                                <h2 class="fs-40">Bibit Sawi</h2>
                                                <p class="col-lg-10">
                                                    Dapatkan bibit sawi berkualitas tinggi yang siap tumbuh dengan cepat dan subur! Cocok untuk sistem hidroponik maupun tanah, bibit ini memiliki tingkat keberhasilan tinggi dan daya tahan yang baik. Dengan perawatan yang tepat, Anda bisa menikmati panen sawi segar dalam waktu singkat.
                                                    <br><br>🔹 <b>Keunggulan:</b>
                                                    <br>✅ Pertumbuhan cepat & hasil melimpah
                                                    <br>✅ Cocok untuk hidroponik & kebun konvensional
                                                    <br>✅ Tingkat keberhasilan tinggi & bebas hama
                                                    <br><br>Kemasan: Dikemas secara kedap udara untuk menjaga kesegaran bibit. <br>
                                                    Berat Bersih: 50 gram (±5.000 butir biji). <br>
                                                    Daya Tumbuh: ≥85% dengan perawatan yang tepat. <br>
                                                    Masa Panen: 25-30 hari setelah semai. <br>
                                                    Media Tanam: Cocok untuk hidroponik, tanah, atau polybag. <br>
                                                    Petunjuk Penyemaian: Direndam selama 6-12 jam sebelum ditanam untuk mempercepat perkecambahan. <br>
                                                    Kualitas Terjamin: Bebas dari hama & penyakit, siap tumbuh dengan optimal.
                                                </p>
                                                <div class="d-flex mb-4 align-items-center">
                                                    <div>
                                                        <h3 class="fs-32 mb-0 me-2">Rp15.000</h3>
                                                    </div>
                                                    <div>
                                                        <span class="fs-18 fw-600 px-3 rounded-20px bg-color-2 text-white">Sale</span>
                                                    </div>
                                                </div>

                                                <div class="group mb-4">
                                                    <h5 class="mb-3">Stok</h5>
                                                    <p>100 pcs</p>
                                                </div>

                                                <a class="btn btn-warning me-2" href="/dashboard/product/update">
                                                    <i class="bx bx-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="bx bx-trash"></i> Delete
                                                </a>
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