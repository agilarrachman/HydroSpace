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

        .admin .profile-picture {
            background-color: #354e33;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 100px;
        }

        .admin .profile-picture img {
            width: 20px;
            object-fit: contain;
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
            object-fit: contain;
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
                        <h5 class="mb-0">{{ $active }}</h5>

                        <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl d-flex flex-column flex-lg-row gap-4 flex-grow-1 container-p-y" style="height: 90vh;">
                        <!-- Tabs for Customers (Hidden on Small Screens) -->
                        <div class="card w-25 h-100 overflow-auto d-none d-lg-block">
                            <ul class="nav nav-pills flex-column" id="customer-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="customer1-tab" data-bs-toggle="pill" data-bs-target="#customer1-chat" type="button" role="tab">Nurrizkyta Aulia</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="customer2-tab" data-bs-toggle="pill" data-bs-target="#customer2-chat" type="button" role="tab">Fillah Alfatih</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="customer3-tab" data-bs-toggle="pill" data-bs-target="#customer3-chat" type="button" role="tab">Agil ArRachman</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="customer4-tab" data-bs-toggle="pill" data-bs-target="#customer4-chat" type="button" role="tab">Nasywa Shafa</button>
                                </li>
                            </ul>
                        </div>

                        <!-- Select for Customers (Visible on Small Screens) -->
                        <div class="w-100 d-block d-lg-none">
                            <select id="customer-select" class="form-select w-100">
                                <option value="customer1-chat">Nurrizkyta Aulia</option>
                                <option value="customer2-chat">Fillah Alfatih</option>
                                <option value="customer3-chat">Agil ArRachman</option>
                                <option value="customer4-chat">Nasywa Shafa</option>
                            </select>
                        </div>

                        <!-- Chat Section -->
                        <div class="tab-content w-100 w-lg-75 h-75 p-0 flex-grow-1" id="customer-chats">
                            <div class="tab-pane fade show active h-100" id="customer1-chat" role="tabpanel">
                                <div class="card p-3 h-100 d-flex flex-column">
                                    <h5>Chat dengan Nurrizkyta Aulia</h5>
                                    <div class="chat-window d-flex flex-column flex-grow-1 overflow-auto">
                                        <div class="chat h-100">
                                            <div class="admin d-flex gap-2">
                                                <div class="chat-bubble admin text-wrap lh-1">
                                                    <h5 class="mb-2" style="font-weight: 800; color:#fff;">Admin HydroSpace</h5>
                                                    Halo, HydroMates! Apakah ada yang bisa saya bantu?
                                                </div>
                                                <div class="profile-picture">
                                                    <img src="{{ asset('images/logo-icon.webp') }}" alt="Admin" />
                                                </div>
                                            </div>
                                            <div class="user d-flex gap-2">
                                                <img src="{{ asset('images/team/1.jpg') }}" alt="User" />
                                                <div class="chat-bubble user text-wrap lh-1">
                                                    <h5 class="mb-1" style="font-weight: 800;">Nurrizkyta Aulia</h5>
                                                    Kok pesanan saya lama banget yahhhh
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="chat-input my-0">
                                        <input type="text" placeholder="Ketik pesan.." required />
                                        <button type="submit"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24.0431 13.886C24.5682 13.6234 24.8999 13.0867 24.8999 12.4996C24.8999 11.9125 24.5682 11.3758 24.0431 11.1133L2.34309 0.263263C1.7933 -0.0116297 1.13302 0.0643301 0.66002 0.456886C0.187018 0.849442 -0.00932183 1.48441 0.159543 2.07544L2.37382 9.82543C2.56394 10.4908 3.17214 10.9496 3.86418 10.9496L10.9499 10.9496C11.8059 10.9496 12.4999 11.6436 12.4999 12.4996C12.4999 13.3557 11.8059 14.0496 10.9499 14.0496L3.86419 14.0496C3.17215 14.0496 2.56395 14.5084 2.37383 15.1738L0.159542 22.9238C-0.0093228 23.5148 0.187017 24.1498 0.660019 24.5424C1.13302 24.9349 1.7933 25.0109 2.34308 24.736L24.0431 13.886Z" fill="white" />
                                            </svg></button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade h-100" id="customer2-chat" role="tabpanel">
                                <div class="card p-3 h-100 d-flex flex-column">
                                    <h5>Chat dengan Fillah Alfatih</h5>
                                    <div class="chat-window d-flex flex-column flex-grow-1 overflow-auto">
                                        <div class="chat h-100">
                                            <div class="admin d-flex gap-2">
                                                <div class="chat-bubble admin text-wrap lh-1">
                                                    <h5 class="mb-2" style="font-weight: 800; color:#fff;">Admin HydroSpace</h5>
                                                    Halo, HydroMates! Apakah ada yang bisa saya bantu?
                                                </div>
                                                <div class="profile-picture">
                                                    <img src="{{ asset('images/logo-icon.webp') }}" alt="Admin" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-input my-0">
                                        <input type="text" placeholder="Ketik pesan.." required />
                                        <button type="submit"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24.0431 13.886C24.5682 13.6234 24.8999 13.0867 24.8999 12.4996C24.8999 11.9125 24.5682 11.3758 24.0431 11.1133L2.34309 0.263263C1.7933 -0.0116297 1.13302 0.0643301 0.66002 0.456886C0.187018 0.849442 -0.00932183 1.48441 0.159543 2.07544L2.37382 9.82543C2.56394 10.4908 3.17214 10.9496 3.86418 10.9496L10.9499 10.9496C11.8059 10.9496 12.4999 11.6436 12.4999 12.4996C12.4999 13.3557 11.8059 14.0496 10.9499 14.0496L3.86419 14.0496C3.17215 14.0496 2.56395 14.5084 2.37383 15.1738L0.159542 22.9238C-0.0093228 23.5148 0.187017 24.1498 0.660019 24.5424C1.13302 24.9349 1.7933 25.0109 2.34308 24.736L24.0431 13.886Z" fill="white" />
                                            </svg></button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade h-100" id="customer3-chat" role="tabpanel">
                                <div class="card p-3 h-100 d-flex flex-column">
                                    <h5>Chat dengan Agil ArRachman</h5>
                                    <div class="chat-window d-flex flex-column flex-grow-1 overflow-auto">
                                        <div class="chat h-100">
                                            <div class="admin d-flex gap-2">
                                                <div class="chat-bubble admin text-wrap lh-1">
                                                    <h5 class="mb-2" style="font-weight: 800; color:#fff;">Admin HydroSpace</h5>
                                                    Halo, HydroMates! Apakah ada yang bisa saya bantu?
                                                </div>
                                                <div class="profile-picture">
                                                    <img src="{{ asset('images/logo-icon.webp') }}" alt="Admin" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-input my-0">
                                        <input type="text" placeholder="Ketik pesan.." required />
                                        <button type="submit"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24.0431 13.886C24.5682 13.6234 24.8999 13.0867 24.8999 12.4996C24.8999 11.9125 24.5682 11.3758 24.0431 11.1133L2.34309 0.263263C1.7933 -0.0116297 1.13302 0.0643301 0.66002 0.456886C0.187018 0.849442 -0.00932183 1.48441 0.159543 2.07544L2.37382 9.82543C2.56394 10.4908 3.17214 10.9496 3.86418 10.9496L10.9499 10.9496C11.8059 10.9496 12.4999 11.6436 12.4999 12.4996C12.4999 13.3557 11.8059 14.0496 10.9499 14.0496L3.86419 14.0496C3.17215 14.0496 2.56395 14.5084 2.37383 15.1738L0.159542 22.9238C-0.0093228 23.5148 0.187017 24.1498 0.660019 24.5424C1.13302 24.9349 1.7933 25.0109 2.34308 24.736L24.0431 13.886Z" fill="white" />
                                            </svg></button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade h-100" id="customer4-chat" role="tabpanel">
                                <div class="card p-3 h-100 d-flex flex-column">
                                    <h5>Chat dengan Nasywa Shafa</h5>
                                    <div class="chat-window d-flex flex-column flex-grow-1 overflow-auto">
                                        <div class="chat h-100">
                                            <div class="admin d-flex gap-2">
                                                <div class="chat-bubble admin text-wrap lh-1">
                                                    <h5 class="mb-2" style="font-weight: 800; color:#fff;">Admin HydroSpace</h5>
                                                    Halo, HydroMates! Apakah ada yang bisa saya bantu?
                                                </div>
                                                <div class="profile-picture">
                                                    <img src="{{ asset('images/logo-icon.webp') }}" alt="Admin" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-input my-0">
                                        <input type="text" placeholder="Ketik pesan.." required />
                                        <button type="submit"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24.0431 13.886C24.5682 13.6234 24.8999 13.0867 24.8999 12.4996C24.8999 11.9125 24.5682 11.3758 24.0431 11.1133L2.34309 0.263263C1.7933 -0.0116297 1.13302 0.0643301 0.66002 0.456886C0.187018 0.849442 -0.00932183 1.48441 0.159543 2.07544L2.37382 9.82543C2.56394 10.4908 3.17214 10.9496 3.86418 10.9496L10.9499 10.9496C11.8059 10.9496 12.4999 11.6436 12.4999 12.4996C12.4999 13.3557 11.8059 14.0496 10.9499 14.0496L3.86419 14.0496C3.17215 14.0496 2.56395 14.5084 2.37383 15.1738L0.159542 22.9238C-0.0093228 23.5148 0.187017 24.1498 0.660019 24.5424C1.13302 24.9349 1.7933 25.0109 2.34308 24.736L24.0431 13.886Z" fill="white" />
                                            </svg></button>
                                    </div>
                                </div>
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

    <script>
        document.getElementById('customer-select').addEventListener('change', function() {
            let selectedChat = this.value;

            // Menonaktifkan semua tab
            document.querySelectorAll('.tab-pane').forEach(tab => {
                tab.classList.remove('show', 'active');
            });

            // Mengaktifkan tab yang dipilih dari dropdown
            document.getElementById(selectedChat).classList.add('show', 'active');
        });
    </script>

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