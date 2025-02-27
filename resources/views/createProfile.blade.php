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

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>

  <!-- Bootstrap -->
</head>

<body>
  <!-- Content -->

  <div class="container-xxl">
    <img src="images/logo-wm.webp" alt="" style="position: absolute; top: 0; left: 0; width: 200px; height: 200px; transform: scale(-1, -1);">

    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner" style="max-width: 700px;">
        <!-- Create Profile -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="/" class="app-brand-link gap-2">
                <img class="logo-main" src="/images/logo-black.webp" alt="">
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Lengkapi Data Dirimu! 🌱</h4>
            <p style="max-width: 400px;">Bantu kami mengenalmu lebih baik untuk pengalaman berkebun hidroponik yang optimal</p>

            <form id="formAuthentication" class="mb-3" action="index.html">
              <div class="col d-flex flex-column w-75 mx-auto">
                <img id="profileImagePreview" src="/images/default profile picture.jpg" alt="" class="rounded-circle mx-auto my-3" style="width: 140px; height: 140px; object-fit: cover;">
                <input type="file" name="foto_profil" id="foto_profil" class="form-control mx-auto @error('foto_profil') is-invalid @enderror" accept="image/*" onchange="previewImage(event)">
                @error('foto_profil')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                <div id="rulesProfileImage" class="form-text mb-4">Silakan unggah gambar profil dengan format file gambar (jpeg, png, jpg, gif) dan ukuran maksimum 5 MB</div>
              </div>
              <div class="row g-2 mb-3">
                <div class="col-lg-6">
                  <label for="username" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"
                    autofocus />
                </div>
                <div class="col-lg-6">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nama"
                    name="nama"
                    placeholder="Masukkan nama lengkap" />
                </div>
              </div>
              <div class="row g-2 mb-3">
                <div class="col-lg-6">
                  <label for="nama" class="form-label">Jenis Kelamin</label>
                  <div class="d-flex gap-3">
                    <div class="form-check">
                      <input
                        name="jenis-kelamin"
                        class="form-check-input"
                        type="radio"
                        value="Pria"
                        id="pria"
                        checked />
                      <label class="form-check-label" for="pria"> Pria </label>
                    </div>
                    <div class="form-check">
                      <input
                        name="jenis-kelamin"
                        class="form-check-input"
                        type="radio"
                        value=""
                        id="wanita" />
                      <label class="form-check-label" for="wanita"> Wanita </label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label for="nohp" class="form-label">Nomor Handphone</label>
                  <input
                    type="number"
                    class="form-control"
                    id="nohp"
                    name="nohp"
                    placeholder="Masukkan nomor handphone" />
                </div>
              </div>
              <div class="address">
                <div class="row g-3 mb-3">
                  <div class="col-lg-6">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <select class="form-select" id="provinsi" aria-label="Default select example">
                      <option selected>Provinsi</option>
                      <option value="Jawa Barat">Jawa Barat</option>
                      <option value="Jawa Timur">Jawa Timur</option>
                      <option value="Jawa Tengah">Jawa Tengah</option>
                    </select>
                  </div>
                  <div class="col-lg-6">
                    <label for="kota" class="form-label">Kota</label>
                    <select class="form-select" id="kota" aria-label="Default select example">
                      <option selected>Kota</option>
                      <option value="Kota Bogor">Kota Bogor</option>
                      <option value="Kabupaten Bogor">Kabupaten Bogor</option>
                      <option value="Sukabumi">Sukabumi</option>
                    </select>
                  </div>
                </div>
                <div class="row g-3 mb-3">
                  <div class="col-lg-4">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <select class="form-select" id="kecamatan" aria-label="Default select example">
                      <option selected>Kecamatan</option>
                      <option value="Bogor Tengah">Bogor Tengah</option>
                      <option value="Bogor Selatan">Bogor Selatan</option>
                      <option value="Bogor Utara">Bogor Utara</option>
                    </select>
                  </div>
                  <div class="col-lg-4">
                    <label for="kelurahan" class="form-label">Kelurahan</label>
                    <select class="form-select" id="kelurahan" aria-label="Default select example">
                      <option selected>Kelurahan</option>
                      <option value="Cidangiang">Cidangiang</option>
                      <option value="Babakan">Babakan</option>
                      <option value="Sempur">Sempur</option>
                    </select>
                  </div>
                  <div class="col-lg-4">
                    <label for="exampleFormControlSelect1" class="form-label">Kode Pos</label>
                    <input
                      type="number"
                      class="form-control"
                      id="nohp"
                      name="nohp"
                      placeholder="Kode Pos" />
                  </div>
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat Lengkap</label>
                  <textarea class="form-control" id="alamat" rows="3" style="min-height: 200px;"></textarea>
                </div>
              </div>
              <button class="btn btn-primary d-grid w-100" type="submit">Konfirmasi</button>
            </form>
          </div>
        </div>
        <!-- /Create Profile -->
      </div>
    </div>

    <img src="images/logo-wm.webp" alt="" style="position: absolute; width: 200px; height: 200px; right:0; margin-top: -170px;">
  </div>

  <!-- / Content -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>