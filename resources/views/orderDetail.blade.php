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


  <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/styleProfile.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/coloring.css') }}" rel="stylesheet" type="text/css">
  <!-- color scheme -->
  <link id="colors" href="{{ asset('css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">

  <style>
    @media (min-width: 768px) {
      .status {
        margin-right: -50px;
      }
    }

    .status-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
    }

    .status-item {
      text-align: center;
      flex: 1;
      position: relative;
    }

    .status-item .circle {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: #F5F5F9;
      outline: 2px solid var(--primary-color);
      display: flex;
      justify-content: center;
      align-items: center;
      margin: auto;
      color: var(--primary-color);
    }

    .status-item .circle.active {
      outline: none;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: var(--primary-color);
      display: flex;
      justify-content: center;
      align-items: center;
      margin: auto;
      color: white;
    }

    .status-item .circle svg {
      width: 25px;
      height: 25px;
    }

    .status-item .status-text {
      margin-top: 10px;
      font-size: 14px;
      font-family: NunitoSans, sans-serif;
    }

    /* Garis penghubung antar status */
    .status-container::before {
      content: '';
      position: absolute;
      top: 25px;
      left: 20%;
      right: 20%;
      height: 2px;
      background-color: var(--primary-color);
      z-index: 0;
    }

    /* Garis tidak melebihi ikon */
    .status-item:first-child::before,
    .status-item:last-child::before {
      content: none;
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

          <div class="container col-12 col-lg-9 mx-auto mx-lg-0 container-p-y mt-lg-5 mt-1">
            {{-- navbar --}}
            @include('partials.navbarProfile')
            {{-- navbar end --}}

            <h3 class="fw-bold mt-lg-5">{{ $active }}</h3>

            <div class="my-5 d-flex flex-column flex-md-row justify-content-between align-items-end">
              <div class="order">
                <p class="status process px-3 rounded-pill d-inline-block w-auto">Sedang Proses</p>
                <h5 class="mb-1 fw-bolder">ID Pesanan: HYD00189303</h5>
                <p class="m-0"><b>Waktu Pemesanan: </b>12 Agustus 2021, 12:00</p>
                <p class="m-0"><b>Metode Pembayaran: </b>Transfer Bank</p>
              </div>

              <div class="status col-md-7">
                <h5 class="text-center text-md-start mb-3 px-md-5">Status Pesanan</h5>
                <div class="status-container">
                  <!-- Fase 1: Dikemas -->
                  <div class="status-item">
                    <div class="circle active">
                      <!-- SVG Icon untuk Dikemas -->
                      <svg width="31" height="34" viewBox="0 0 31 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.2199 8.07999L16.5276 1.13528C16.1885 0.947898 15.8074 0.849609 15.4199 0.849609C15.0325 0.849609 14.6514 0.947898 14.3122 1.13528L1.61992 8.08288C1.25745 8.2812 0.954879 8.5732 0.743795 8.92839C0.532711 9.28358 0.42086 9.68893 0.419922 10.1021V23.8963C0.42086 24.3095 0.532711 24.7149 0.743795 25.0701C0.954879 25.4252 1.25745 25.7172 1.61992 25.9156L14.3122 32.8632C14.6514 33.0505 15.0325 33.1488 15.4199 33.1488C15.8074 33.1488 16.1885 33.0505 16.5276 32.8632L29.2199 25.9156C29.5824 25.7172 29.885 25.4252 30.0961 25.0701C30.3071 24.7149 30.419 24.3095 30.4199 23.8963V10.1035C30.4198 9.68964 30.3083 9.28339 30.0971 8.92737C29.886 8.57135 29.583 8.27867 29.2199 8.07999ZM15.4199 3.15451L27.0074 9.50066L22.7137 11.8516L11.1247 5.50547L15.4199 3.15451ZM15.4199 15.8468L3.83242 9.50066L8.72184 6.82374L20.3093 13.1699L15.4199 15.8468ZM2.72761 11.5199L14.2661 17.8343V30.2079L2.72761 23.8978V11.5199ZM28.1122 23.892L16.5738 30.2079V17.8401L21.1892 15.3146V20.4622C21.1892 20.7682 21.3107 21.0617 21.5271 21.2781C21.7435 21.4945 22.037 21.616 22.343 21.616C22.649 21.616 22.9425 21.4945 23.1589 21.2781C23.3753 21.0617 23.4968 20.7682 23.4968 20.4622V14.0511L28.1122 11.5199V23.8906V23.892Z" fill="currentColor" />
                      </svg>
                    </div>
                    <div class="status-text">Dikemas</div>
                  </div>

                  <!-- Fase 2: Dikirim -->
                  <div class="status-item">
                    <div class="circle active">
                      <!-- SVG Icon untuk Dikirim -->
                      <svg width="31" height="22" viewBox="0 0 31 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.3918 19.8645C24.5236 19.8645 25.4372 18.9509 25.4372 17.8191C25.4372 16.6873 24.5236 15.7736 23.3918 15.7736C22.26 15.7736 21.3463 16.6873 21.3463 17.8191C21.3463 18.9509 22.26 19.8645 23.3918 19.8645ZM25.4372 7.5918H22.0281V11.0009H28.11L25.4372 7.5918ZM7.02814 19.8645C8.15996 19.8645 9.0736 18.9509 9.0736 17.8191C9.0736 16.6873 8.15996 15.7736 7.02814 15.7736C5.89632 15.7736 4.98269 16.6873 4.98269 17.8191C4.98269 18.9509 5.89632 19.8645 7.02814 19.8645ZM26.1191 5.54634L30.21 11.0009V17.8191H27.4827C27.4827 20.0827 25.6554 21.91 23.3918 21.91C21.1281 21.91 19.3009 20.0827 19.3009 17.8191H11.1191C11.1191 20.0827 9.29178 21.91 7.02814 21.91C4.76451 21.91 2.93723 20.0827 2.93723 17.8191H0.209961V2.81907C0.209961 1.30543 1.4236 0.0917969 2.93723 0.0917969H22.0281V5.54634H26.1191ZM2.93723 2.81907V15.0918H3.9736C4.7236 14.26 5.81451 13.7282 7.02814 13.7282C8.24178 13.7282 9.33269 14.26 10.0827 15.0918H19.3009V2.81907H2.93723Z" fill="currentColor" />
                      </svg>
                    </div>
                    <div class="status-text">Dikirim</div>
                  </div>

                  <!-- Fase 3: Selesai -->
                  <div class="status-item">
                    <div class="circle">
                      <!-- SVG Icon untuk Selesai -->
                      <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.18704 12.6526L2.01662 8.48218C1.90757 8.37179 1.77769 8.28415 1.63451 8.22434C1.49134 8.16452 1.33771 8.13372 1.18254 8.13372C1.02737 8.13372 0.873744 8.16452 0.730567 8.22434C0.58739 8.28415 0.45751 8.37179 0.348456 8.48218C0.238071 8.59123 0.150431 8.72111 0.0906156 8.86429C0.0308004 9.00747 0 9.16109 0 9.31626C0 9.47143 0.0308004 9.62506 0.0906156 9.76823C0.150431 9.91141 0.238071 10.0413 0.348456 10.1503L5.34104 15.1429C5.80575 15.6076 6.55642 15.6076 7.02113 15.1429L19.6515 2.52444C19.7619 2.41538 19.8496 2.2855 19.9094 2.14232C19.9692 1.99915 20 1.84552 20 1.69035C20 1.53518 19.9692 1.38156 19.9094 1.23838C19.8496 1.0952 19.7619 0.965322 19.6515 0.856268C19.5425 0.745884 19.4126 0.658243 19.2694 0.598428C19.1263 0.538613 18.9726 0.507812 18.8175 0.507812C18.6623 0.507812 18.5087 0.538613 18.3655 0.598428C18.2223 0.658243 18.0924 0.745884 17.9834 0.856268L6.18704 12.6526Z" fill="currentColor" />
                      </svg>

                    </div>
                    <div class="status-text">Selesai</div>
                  </div>
                </div>
              </div>

            </div>

            <div class="product d-flex gap-3">
              <div class="image-product">
                <img src="/images/shop/bibit-benih/bibit-sawi2.png" alt="" class="h-100 object-fit-cover p-0">
              </div>
              <div class="d-info d-flex flex-grow-1 justify-content-between">
                <div class="d-flex flex-column">
                  <label for="cat_4">🌱 Bibit & Benih</label>
                  <h4 class="text-wrap">Bibit Sawi</h4>
                  <p class="m-0"><b>Jumlah:</b> 5pcs</p>
                </div>
                <span class="d-price fw-bold">Rp20.000</span>
              </div>
            </div>

            <hr class="my-3" style="opacity: 0.10;">

            <div class="product d-flex gap-3">
              <div class="image-product">
                <img src="/images/shop/bibit-benih/bibit-sawi2.png" alt="" class="h-100 object-fit-cover p-0">
              </div>
              <div class="d-info d-flex flex-grow-1 justify-content-between">
                <div class="d-flex flex-column">
                  <label for="cat_4">🌱 Bibit & Benih</label>
                  <h4 class="text-wrap">Bibit Sawi</h4>
                  <p class="m-0"><b>Jumlah:</b> 5pcs</p>
                </div>
                <span class="d-price fw-bold">Rp20.000</span>
              </div>
            </div>

            <hr class="my-3" style="opacity: 0.10;">

            <div class="product d-flex gap-3">
              <div class="image-product">
                <img src="/images/shop/bibit-benih/bibit-sawi2.png" alt="" class="h-100 object-fit-cover p-0">
              </div>
              <div class="d-info d-flex flex-grow-1 justify-content-between">
                <div class="d-flex flex-column">
                  <label for="cat_4">🌱 Bibit & Benih</label>
                  <h4 class="text-wrap">Bibit Sawi</h4>
                  <p class="m-0"><b>Jumlah:</b> 5pcs</p>
                </div>
                <span class="d-price fw-bold">Rp20.000</span>
              </div>
            </div>

            <hr class="my-3" style="opacity: 0.50;">

            <div class="w-100 mt-3 d-flex justify-content-between gap-2">
              <h4 class="m-0">Total:</h4>
              <h4 class="m-0 text-truncate fw-bold text-end">Rp60.000</p>
            </div>

            <div class="address mt-2">
              <h5 class="mb-3"><b>Alamat Pengiriman</b></h5>
              <div class="row g-3 mb-3">
                <div class="col-lg-6">
                  <label for="provinsi" class="form-label">Provinsi</label>
                  <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" value="Jawa Barat" disabled />
                </div>
                <div class="col-lg-6">
                  <label for="kota" class="form-label">Kota</label>
                  <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota" value="Kota Bogor" disabled />
                </div>
              </div>
              <div class="row g-3 mb-3">
                <div class="col-lg-4">
                  <label for="kecamatan" class="form-label">Kecamatan</label>
                  <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="Bogor Tengah" disabled />
                </div>
                <div class="col-lg-4">
                  <label for="kelurahan" class="form-label">Kelurahan</label>
                  <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" value="Cidangiang" disabled />
                </div>
                <div class="col-lg-4">
                  <label for="exampleFormControlSelect1" class="form-label">Kode Pos</label>
                  <input type="number" class="form-control" id="kodePos" name="kodePos" placeholder="Kode Pos" value="123456" disabled />
                </div>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" id="alamat" rows="3" style="min-height: 200px;" disabled>Jalan Ciwaluya No 14 Kost Zam-zam</textarea>
              </div>
            </div>

            <a href="/chat" class="btn-line my-3">Hubungi Admin</a>

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

  <!-- Javascript Files
    ================================================== -->
  <script src="{{ asset('js/plugins.js') }}"></script>
  <!-- <script src="{{ asset('js/designesia.js') }}"></script> -->
</body>

</html>