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

          <div class="container col-12 col-lg-9 mx-auto mx-lg-0 container-p-y mt-lg-5 mt-1">
            {{-- navbar --}}
            @include('partials.navbarProfile')
            {{-- navbar end --}}

            <h3 class="fw-bold mt-lg-5">{{ $active }}</h3>

            <div class="cards d-flex flex-column gap-3">
              @if ($orders->isNotEmpty())
              @foreach ($orders as $order)
              <div class="card">
                <div class="card-body">
                  <div class="d-lg-flex flex-lg-row-reverse justify-content-lg-between">
                    @if ($order->status == 'Dikemas')
                    <p class="status process px-3 rounded-pill d-inline-block w-auto">Sedang Dikemas</p>
                    @elseif ($order->status == 'Diantar')
                    <p class="status process px-3 rounded-pill d-inline-block w-auto">Sedang Diantar</p>
                    @elseif ($order->status == 'Selesai')
                    <p class="status done px-3 rounded-pill d-inline-block w-auto">Selesai</p>
                    @elseif ($order->status == 'Dibatalkan')
                    <p class="status canceled px-3 rounded-pill d-inline-block w-auto">Dibatalkan</p>
                    @else
                    <p class="status unknown px-3 rounded-pill d-inline-block w-auto">{{ $order->status }}</p>
                    @endif
                    <h5 class="mb-4">ID Pesanan: {{ $order->id }}</h5>
                  </div>

                  @if ($order->orderItems->isNotEmpty())
                  @foreach ($order->orderItems as $orderItem)
                  <div class="product d-flex gap-3">
                    <div class="image-product d-flex">
                      @if ($orderItem->product && $orderItem->product->picture1)
                      <img src="{{ asset('storage/' . $orderItem->product->picture1) }}" alt="{{ $orderItem->product->name }}" class="h-100 object-fit-cover p-0 m-auto" style="background-color: transparent; border: none;">
                      @else
                      <img src="/images/default-product.png" alt="Produk Tidak Tersedia" class="h-100 object-fit-cover p-0">
                      @endif
                    </div>
                    <div class="d-info d-flex flex-grow-1 justify-content-between">
                      <div class="d-flex flex-column">
                        @if ($orderItem->product && $orderItem->product->category)
                        <label for="cat_{{ $orderItem->product->category->id }}">{{ $orderItem->product->category->name }}</label>
                        @else
                        <label for="cat_unknown">Kategori Tidak Diketahui</label>
                        @endif
                        @if ($orderItem->product)
                        <h4 class="text-wrap">{{ $orderItem->product->name }}</h4>
                        @else
                        <h4 class="text-wrap">Produk Tidak Ditemukan</h4>
                        @endif
                        <p class="m-0"><b>Jumlah:</b> {{ $orderItem->quantity }}pcs</p>
                      </div>
                      @if ($orderItem->product)
                      <span class="d-price fw-bold">Rp{{ number_format($orderItem->product->price, 0, ',', '.') }}</span>
                      @else
                      <span class="d-price fw-bold">Rp0</span>
                      @endif
                    </div>
                  </div>
                  @if (!$loop->last)
                  <hr class="my-3" style="opacity: 0.10;">
                  @endif
                  @endforeach
                  @else
                  <p>Produk telah dihapus.</p>
                  @endif

                  <div class="detail-order mt-4">
                    <div class="w-100 d-flex justify-content-between gap-2">
                      <p class="m-0"><b>Alamat Pengiriman: </b></p>
                      <p class="m-0 text-truncate text-end">{{ $order->full_address ?? '-' }}, {{ $cities->firstWhere('id', $order->city)->name }}, {{ $provinces->firstWhere('id', $order->province)->name }}</p>
                    </div>

                    <div class="w-100 d-flex justify-content-between gap-2">
                      <p class="m-0"><b>Waktu Pemesanan: </b></p>
                      <p class="m-0 text-truncate text-end">{{ $order->created_at ? $order->created_at->format('d F Y, H:i') : '-' }}</p>
                    </div>

                    <div class="w-100 d-flex justify-content-between gap-2">
                      <p class="m-0"><b>Metode Pembayaran: </b></p>
                      <p class="m-0 text-truncate text-end"><span style="text-transform: uppercase;">{{ $order->payment_method ?? '-' }}</span></p>
                    </div>

                    <div class="w-100 d-flex justify-content-between gap-2">
                      <p class="m-0"><b>Total: </b></p>
                      <p class="m-0 text-truncate text-end">Rp{{ number_format($order->total_amount ?? 0, 0, ',', '.') }}</p>
                    </div>
                  </div>

                  <div class="w-100 mt-4 d-flex justify-content-between gap-3">
                    <a href="/chat" class="btn-line flex-grow-1">Hubungi Admin</a>
                    <a href="{{ route('pesanan.show', $order->id) }}" class="btn-primary px-3 py-2 rounded-pill flex-grow-1 text-center">Lihat Pesanan</a>
                  </div>

                </div>
              </div>
              @endforeach
              @else
              <div class="alert alert-info" role="alert" style="background-color: #e1ebe2; color: #354e33;">
                Kamu belum memiliki pesanan. <a href="/produk" class="alert-link" style="color: #354e33;">Yuk, mulai berbelanja!</a>
              </div>
              @endif
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

  <!-- Javascript Files
    ================================================== -->
  <script src="{{ asset('js/plugins.js') }}"></script>
  <!-- <script src="{{ asset('js/designesia.js') }}"></script> -->
</body>

</html>
