<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>{{ $title }}</title>

  <meta name="description" content="" />

  <link rel="icon" href="images/icon.webp" type="image/gif" sizes="16x16">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <!-- Content -->
  <div class="container-xxl">
    <img src="images/logo-wm.webp" alt="" style="position: absolute; top: 0; left: 0; width: 200px; height: 200px; transform: scale(-1, -1);">

    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register Card -->
        <div class="card">
          <div class="card-body">

            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="/" class="app-brand-link gap-2">
                <img class="logo-main" src="/images/logo-black.webp" alt="">
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Mulai Perjalananmu! 🚀</h4>
            <p class="mb-4">Daftar sekarang dan jelajahi dunia hidroponik dengan mudah bersama HydroSpace</p>

            <!-- Tampilkan Alert Jika Session Tidak Ditemukan -->
            @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <!-- Form Registrasi -->
            <form id="formAuthentication" class="mb-3" action="/registrasi" method="POST">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control @error('email') is-invalid @enderror"
                  id="email"
                  name="email"
                  placeholder="name@example.com"
                  value="{{ old('email') }}"
                  autofocus />
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control @error('password') is-invalid @enderror"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div id="rulesPassword" class="form-text">Password harus memiliki panjang antara 3-8 karakter</div>
              </div>

              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="confirm-password">Konfirmasi Password</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="confirm-password"
                    class="form-control @error('confirm-password') is-invalid @enderror"
                    name="confirm-password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="error_confirm-password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  @error('confirm-password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>


              <button class="btn btn-primary d-grid w-100" style="margin-top: 30px;" type="submit">Registrasi</button>
            </form>

            <p class="text-center">
              <span>Sudah punya akun?</span>
              <a href="/signin">
                <span>Masuk</span>
              </a>
            </p>
          </div>
        </div>
        <!-- Register Card -->
      </div>
    </div>

    <img src="images/logo-wm.webp" alt="" style="position: absolute; bottom: 0; right: 0; width: 200px; height: 200px;">
  </div>
  <!-- / Content -->

  <!-- Core JS -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../assets/vendor/js/menu.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>