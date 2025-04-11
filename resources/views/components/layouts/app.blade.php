<!DOCTYPE html>
@if (request()->is('dashboard/chat/*') && $role == 'Admin')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSpace | Chat Customer</title>

    <link rel="icon" href="{{ asset('images/icon.webp') }}" type="image/gif" sizes="16x16">
    <meta name="description" content="" />

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
    <script src="{{ asset('layouts/dashboard/js/config.js') }}"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

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

        .admin .profile-picture {
            background-color: #354e33;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 100px !important;
        }

        .admin .profile-picture img {
            height: 100% !important;
            object-fit: cover !important;
            border-radius: 100% !important;
        }

        .chat-bubble.admin {
            background-color: #354e33;
            color: white;
            margin-left: auto;
            align-self: flex-end;
        }

        .chat-bubble.admin h5 {
            color: #354e33;
        }

        .user img {
            width: 40px;
            height: 40px;
            border-radius: 100px;
            object-fit: cover;
        }

        @media (min-width: 992px) {
            .h-lg-90 {
                height: 90% !important;
            }
        }

        /* Container Chatadmin styling */
        .chat-window {
            padding: 15px;
            height: 400px;
            border-radius: 10px;
            background-color: white;
            font-size: 16px;
        }

        .chat-window .chat {
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }

        /* Chat bubble styling */
        .chat-bubble {
            padding: 10px 15px;
            border-radius: 15px;
            margin: 5px 0;
            /* Mengatur margin untuk jarak antar chat */
            max-width: 80%;
            display: inline-block;
        }

        .chat-bubble.user {
            background-color: #E1EBE2;
            color: #354e33;
            margin-right: auto;
            align-self: flex-start;
        }

        .chat-bubble.user h5 {
            color: #354e33;
        }

        /* Chatadmin styling Start */
        .chat-input {
            display: flex;
            padding-top: 10px;
        }

        .chat-input input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #354e33;
            border-radius: 5px;
            margin-right: 10px;
        }

        .chat-input button {
            background-color: #354e33;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .chat-input button:hover {
            background-color: #2E452C;
        }

        @media (max-width: 1024px) {

            /* Tablet ke bawah */
            .chatadmin {
                margin-top: 140px;
            }

            .chat-window {
                height: 600px;
            }
        }

        @media (min-width: 1024px) {

            .tab-content {
                height: 100% !important;
            }
        }

        /* Chatadmin styling End */
    </style>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('partials.sidebar-dashboard')

            {{ $slot }}
        </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>

    @livewireScripts

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
@elseif (request()->is('chat') && $role == 'Customer')
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
    <link rel="icon" href="{{ asset('images/icon.webp') }}" type="image/gif" sizes="16x16">
    <meta name="description" content="" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('layouts/dashboard/css/fonts/boxicons.css') }}" />

    <link rel="stylesheet" href="{{ asset('layouts/dashboard/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('layouts/dashboard/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('layouts/dashboard/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('layouts/dashboard/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('layouts/dashboard/libs/apex-charts/apex-charts.css') }}" />

    <script src="{{ asset('layouts/dashboard/js/helpers.js') }}"></script>
    <script src="{{ asset('layouts/dashboard/js/config.js') }}"></script>

    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/styleProfile.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/coloring.css') }}" rel="stylesheet" type="text/css">

    <link id="colors" href="{{ asset('css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        .bg-menu-theme .menu-inner>.menu-item.active>.menu-link {
            background-color: rgba(53, 78, 51, 0.16) !important;
            color: #354e33 !important;
        }

        .bg-menu-theme .menu-inner>.menu-item.active:before {
            background-color: #354e33 !important;
        }

        .app-brand .layout-menu-toggle {
            background-color: #354e33 !important;
        }

        .admin .profile-picture {
            background-color: transparent !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 40px !important;
            height: 40px !important;
            border-radius: 100px !important;
        }

        .admin .profile-picture img {
            height: 100% !important;
            object-fit: cover !important;
            border-radius: 100% !important;
        }

        .chat-bubble.admin {
            background-color: #354e33 !important;
            color: white !important;
            margin-left: auto !important;
            margin-top: 0 !important;
            align-self: flex-end !important;
        }

        .chat-bubble.admin h5 {
            color: #354e33 !important;
        }

        .user img {
            width: 40px !important;
            height: 40px !important;
            border-radius: 100px !important;
            object-fit: contain !important;
        }

        @media (min-width: 992px) {
            .h-lg-90 {
                height: 90% !important;
            }
        }

        /* Container Chatadmin styling */
        .chat-window {
            padding: 15px !important;
            /* height: 400px !important; */
            height: 590px !important;
            border-radius: 10px !important;
            background-color: white !important;
            font-size: 16px !important;
        }

        .chat-window .chat {
            overflow-y: auto !important;
            display: flex !important;
            flex-direction: column !important;
        }

        /* Chat bubble styling */
        .chat-bubble {
            padding: 10px 15px !important;
            border-radius: 15px !important;
            margin: 5px 0 !important;
            max-width: 80% !important;
            display: inline-block !important;
        }

        .chat-bubble.user {
            background-color: #E1EBE2 !important;
            color: #354e33 !important;
            margin-right: auto !important;
            align-self: flex-start !important;
        }

        .chat-bubble.user h5 {
            color: #354e33 !important;
        }

        /* Chatadmin styling Start */
        .chat-input {
            display: flex !important;
            padding-top: 10px !important;
        }

        .chat-input input[type="text"] {
            width: 100% !important;
            padding: 10px !important;
            border: 1px solid #354e33 !important;
            border-radius: 5px !important;
            margin-right: 10px !important;
        }

        .chat-input button {
            background-color: #354e33 !important;
            color: white !important;
            border: none !important;
            padding: 10px 15px !important;
            border-radius: 5px !important;
            cursor: pointer !important;
        }

        .chat-input button:hover {
            background-color: #2E452C !important;
        }

        @media (max-width: 1024px) {

            /* Tablet ke bawah */
            .chatadmin {
                margin-top: 140px !important;
            }

            .chat-window {
                height: 600px !important;
            }
        }

        @media (min-width: 1024px) {

            .tab-content {
                height: 100% !important;
            }
        }

        .form-control:disabled {
            color: #354e33;
            background-color: #fff;
            opacity: 1;
        }

        .form-select:disabled {
            color: #354e33;
            background-color: #fff;
        }

        .form-check-input[disabled]~.form-check-label,
        .form-check-input:disabled~.form-check-label {
            opacity: 1;
        }

        .form-check-input:disabled {
            opacity: 1;
        }

        .bg-menu-theme .menu-inner>.menu-item.active>.menu-link {
            background-color: rgba(53, 78, 51, 0.16) !important;
            color: #354e33;
        }

        .bg-menu-theme .menu-inner>.menu-item.active:before {
            background-color: #354e33;
        }

        .app-brand {
            align-items: start;
            gap: 16px;
        }

        .menu .app-brand.demo {
            height: auto;
        }

        .app-brand .layout-menu-toggle {
            background-color: #354e33 !important;
        }

        .back-link {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 500px;
            color: white;
            text-decoration: none;
            font-size: 24px;
            border: 2px solid #354e33;
            transition: background 0.3s;
        }

        .back-link:hover {
            background-color: rgb(222, 222, 222);
        }

        .back-link i {
            font-size: 24px;
            color: #354e33;
        }
    </style>
</head>
<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            {{-- sidebar --}}
            @include('partials.sidebarProfile')
            {{-- sidebar end --}}

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav
                    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme d-xl-none"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <h5 class="mb-0">Hai, Agil ArRachman!</h5>

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../images/team/3.jpg" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../images/team/3.jpg" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block">Agil ArRachman</span>
                                                    <small class="text-muted">agil.arrachman</small>
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
                    <div class="container col-12 col-lg-8 mx-auto mx-lg-0 container-p-y mt-lg-5 mt-1 d-flex flex-column h-lg-90" style="height: 100%;">
                        {{-- Navbar --}}
                        @include('partials.navbarProfile')
                        {{-- Navbar end --}}

                        <h3 class="fw-bold mb-4">{{ $active }}</h3>

                        <!-- Chat Section Start -->
                        {{ $slot }}
                        <!-- Chatbot Section End -->
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

    @livewireScripts

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

    <!-- Javascript Files
        ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- <script src="{{ asset('js/designesia.js') }}"></script> -->
</body>
</html>
@endif
