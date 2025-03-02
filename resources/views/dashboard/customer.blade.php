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

                        <div class="navbar-nav-right d-flex align-items-center justify-content-between" id="navbar-collapse">
                            <h5 class="mb-0">Daftar Kustomer</h5>

                            <div class="avatar avatar-online">
                                <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                        </div>
                    </nav>

                    <!-- / Navbar -->

                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->

                        <div class="container-xxl flex-grow-1 container-p-y">
                            <a href="/dashboard/customer/create" class="btn btn-primary mb-4">
                                <i class="bx bx-plus-circle me-2"></i>Tambah Kustomer
                            </a>

                            <!-- Striped Rows -->
                            <div class="card">
                                {{-- <h5 class="card-header">Striped rows</h5> --}}
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Avatar</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Bergabung</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" style="height: 100%; max-height: 40px;" />
                                                </td>
                                                <td>barryallen</td>
                                                <td>barryallen@gmail.com</td>
                                                <td>12-25-2025</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" style="height: 100%; max-height: 40px;" />
                                                </td>
                                                <td>johndoe</td>
                                                <td>johndoe@gmail.com</td>
                                                <td>12-28-2025</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle" style="height: 100%; max-height: 40px;" />
                                                </td>
                                                <td>asepsurasep</td>
                                                <td>binkasep@gmail.com</td>
                                                <td>12-31-2025</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
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
