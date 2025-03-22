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

          <div class="navbar-nav-right w-100 d-flex justify-content-between align-items-center" id="navbar-collapse">
            <h5 class="mb-0">Hai, {{ auth()->user()->username }}!</h5>

            <div class="avatar avatar">
              <img src="{{ asset('../storage/' . auth()->user()->profile_picture) }}" alt class="w-px-40 my-auto rounded-circle object-fit-cover" />
            </div>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->
          <div class="container col-12 col-lg-8 mx-auto mx-lg-0 container-p-y mt-lg-5 mt-1">
            {{-- navbar --}}
            @include('partials.navbarProfile')
            {{-- navbar end --}}

            <h3 class="fw-bold mt-lg-5">{{ $active }}</h3>

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show col-lg-10" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form id="formAuthentication" class="mb-3" action="index.html">
              <div class="col d-flex flex-column w-75 mb-3 mx-auto mx-lg-0">
                <img id="profileImagePreview" src="{{ asset('../storage/' . $customer->profile_picture) }}" alt="" class="rounded-circle mx-auto mx-lg-0" style="width: 140px; height: 140px; object-fit: cover;">
                <!-- <input type="file" name="foto_profil" id="foto_profil" class="form-control mx-auto @error('foto_profil') is-invalid @enderror" accept="image/*" onchange="previewImage(event)"> -->
                @error('foto_profil')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                <!-- <div id="rulesProfileImage" class="form-text mb-4">Silakan unggah gambar profil dengan format file gambar (jpeg, png, jpg, gif) dan ukuran maksimum 5 MB</div> -->
              </div>
              <div class="row g-2 mb-3">
                <div class="col-lg-6">
                  <label for="username" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Masukkan email"
                    value="{{ $customer->email }}"
                    autofocus disabled />
                </div>
                <div class="col-lg-6">
                  <label for="nohp" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    value="{{ $customer->username }}"
                    placeholder="Masukkan username" disabled />
                </div>
              </div>
              <div class="row g-2 mb-3">
                <div class="col-lg-6">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nama"
                    name="nama"
                    value="{{ $customer->name }}"
                    placeholder="Masukkan nama lengkap" disabled />
                </div>
                <div class="col-lg-3 mb-3">
                  <label for="gender" class="form-label">Jenis Kelamin</label>
                  <input type="text" class="form-control" id="gender" name="gender" value="{{ $customer->gender }}" readonly>
                </div>
                <div class="col-lg-3">
                  <label for="nohp" class="form-label">Nomor Handphone</label>
                  <input
                    type="number"
                    class="form-control"
                    id="nohp"
                    name="nohp"
                    value="{{ $customer->phone_number }}"
                    placeholder="Masukkan nomor handphone" disabled />
                </div>
              </div>
              <div class="address mt-2">
                <div class="row g-3 mb-3">
                  <div class="col-lg-6">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" value="{{ $provinces->firstWhere('id', $customer->province)->name }}" disabled />
                  </div>
                  <div class="col-lg-6">
                    <label for="kota" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota" value="{{ $cities->firstWhere('id', $customer->city)->name }}" disabled />
                  </div>
                </div>
                <div class="row g-3 mb-3">
                  <div class="col-lg-6">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="{{ $districts->firstWhere('id', $customer->district)->name }}" disabled />
                  </div>
                  <div class="col-lg-6">
                    <label for="kelurahan" class="form-label">Kelurahan</label>
                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" value="{{ $villages->firstWhere('id', $customer->village)->name }}" disabled />
                  </div>
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat Lengkap</label>
                  <textarea class="form-control" id="alamat" rows="3" style="min-height: 200px;" disabled>{{ $customer->full_address }}</textarea>
                </div>
              </div>
              <!-- <button class="btn btn-primary d-grid w-100" type="submit">Konfirmasi</button> -->
            </form>
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