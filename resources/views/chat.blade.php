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
            background-color: #354e33 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 40px !important;
            height: 40px !important;
            border-radius: 100px !important;
        }

        .admin .profile-picture img {
            width: 20px !important;
            object-fit: contain !important;
        }

        .chat-bubble.admin {
            background-color: #354e33 !important;
            color: white !important;
            margin-left: auto !important;
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
            height: 400px !important;
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

        /* Chatadmin styling End */
    </style>

    <style>
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
                        <h5 class="mb-0">Hai, {{ auth()->user()->username }}!</h5>

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
                        <div class="chat section flex-grow-1 d-flex flex-column overflow-auto border" id="ai">
                            <div class="container h-100 px-0">
                                <!-- Chat Window -->
                                <div class="chat-window d-flex flex-column flex-grow-1 overflow-auto">
                                    <div class="chat h-100">
                                        @foreach ($messages as $message)
                                        <div class="d-flex align-items-start gap-2 @if($message->from_user_id == auth()->id()) admin @else user flex-row-reverse @endif">
                                            <div class="chat-bubble @if($message->from_user_id == auth()->id()) admin @else user @endif text-wrap mt-0 mb-2">
                                                <h6 class="@class([ 'mb-2',
                                                                        'text-end' => $message->from_user_id == auth()->id(),
                                                                        'text-start' => $message->from_user_id != auth()->id(),
                                                                    ])" style="font-weight: 800; color:@if($message->from_user_id == auth()->id()) #FFFFFF @else #454545 @endif;">{{ $message->fromUser->username }}</h6>

                                                <p class="@class([ 'text-end' => $message->from_user_id == auth()->id(),
                                                                        'text-start' => $message->from_user_id != auth()->id()
                                                                    ])">{{ $message->message }}</p>

                                                <p class="@class([ 'text-end' => $message->from_user_id == auth()->id(),
                                                                        'text-start' => $message->from_user_id != auth()->id()
                                                                    ])"><small>{{ $message->created_at->setTimezone('Asia/Jakarta')->format('H:i') }}</small></p>
                                            </div>
                                            <div class="profile-picture">
                                                @if($message->from_user_id == auth()->id())
                                                <img src="{{ asset('storage/' . $message->fromUser->profile_picture) }}" alt="User" />
                                                @else
                                                <img src="{{ asset('images/logo-icon.webp') }}" alt="Admin" />
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="chat-input my-0">
                                    <div class="form-control">
                                        <form action="" wire:submit.prevent="sendMessage">
                                            <div class="d-flex align-items-center gap-2">
                                                <input name="message" type="text" class="form-control" placeholder="Ketik pesan.." required wire:model="message" />
                                                <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center">
                                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M24.0431 13.886C24.5682 13.6234 24.8999 13.0867 24.8999 12.4996C24.8999 11.9125 24.5682 11.3758 24.0431 11.1133L2.34309 0.263263C1.7933 -0.0116297 1.13302 0.0643301 0.66002 0.456886C0.187018 0.849442 -0.00932183 1.48441 0.159543 2.07544L2.37382 9.82543C2.56394 10.4908 3.17214 10.9496 3.86418 10.9496L10.9499 10.9496C11.8059 10.9496 12.4999 11.6436 12.4999 12.4996C12.4999 13.3557 11.8059 14.0496 10.9499 14.0496L3.86419 14.0496C3.17215 14.0496 2.56395 14.5084 2.37383 15.1738L0.159542 22.9238C-0.0093228 23.5148 0.187017 24.1498 0.660019 24.5424C1.13302 24.9349 1.7933 25.0109 2.34308 24.736L24.0431 13.886Z"
                                                            fill="white" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- {!! $slot !!} --}}
                        {{-- <div class="chat section flex-grow-1 d-flex flex-column overflow-auto border" id="ai">

                            <div class="container h-100 px-0">
                                <form id="ask" class="h-100">
                                    <!-- Chat Window -->
                                    <div class="chat-window d-flex flex-column h-100 overflow-auto" id="chat-window">

                                        <div class="chat h-100">

                                            <div class="admin d-flex gap-2">
                                                <div class="profile-picture">
                                                    <img src="{{ asset('images/logo-icon.webp') }}" alt="Admin" />
                    </div>
                    <div class="chat-bubble bot text-wrap lh-1">
                        <h5 class="mb-2" style="font-weight: 800; color:#fff;">Admin HydroSpace</h5>
                        Halo, HydroMates! Apakah ada yang bisa saya bantu? YEYEYEYE
                    </div>
                </div>

                <div class="user d-flex gap-2">
                    <div class="chat-bubble user text-wrap lh-1">
                        <h5 class="mb-1" style="font-weight: 800;">User</h5>
                        Kok pesanan saya lama banget yahhhh
                    </div>
                    <img src="{{ asset('../storage/' . auth()->user()->profile_picture) }}" alt="User" />
                </div>

                <div class="admin d-flex gap-2">
                    <div class="profile-picture">
                        <img src="{{ asset('images/logo-icon.webp') }}" alt="Admin" />
                    </div>
                    <div class="chat-bubble bot text-wrap lh-1">
                        <h5 class="mb-2" style="font-weight: 800; color:#fff;">Admin HydroSpace</h5>
                        Sebentar ya kaa
                    </div>
                </div>

            </div>

            <!-- Chat Input -->
            <div class="chat-input my-0">
                <input id="question" name="question" type="text" placeholder="Ketik pesan.." required />
                <button type="submit">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.0431 13.886C24.5682 13.6234 24.8999 13.0867 24.8999 12.4996C24.8999 11.9125 24.5682 11.3758 24.0431 11.1133L2.34309 0.263263C1.7933 -0.0116297 1.13302 0.0643301 0.66002 0.456886C0.187018 0.849442 -0.00932183 1.48441 0.159543 2.07544L2.37382 9.82543C2.56394 10.4908 3.17214 10.9496 3.86418 10.9496L10.9499 10.9496C11.8059 10.9496 12.4999 11.6436 12.4999 12.4996C12.4999 13.3557 11.8059 14.0496 10.9499 14.0496L3.86419 14.0496C3.17215 14.0496 2.56395 14.5084 2.37383 15.1738L0.159542 22.9238C-0.0093228 23.5148 0.187017 24.1498 0.660019 24.5424C1.13302 24.9349 1.7933 25.0109 2.34308 24.736L24.0431 13.886Z" fill="white" />
                    </svg>
                </button>
            </div>
        </div>
        </form>
    </div>
    </div> --}}
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