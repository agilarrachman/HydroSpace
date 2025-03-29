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

    {{-- TRIX Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <x-head.tinymce-config/>

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
                        <h5 class="mb-0">Tambah Data Produk</h5>

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
                        <a href="/dashboard/products" class="btn btn-primary">
                            <i class="bx bx-arrow-back me-2"></i>Kembali
                        </a>
                        <div class="authentication-wrapper authentication-basic container-p-y">
                            <div class="authentication-inner" style="max-width: 100%;">
                                <!-- Create Product -->
                                <div class="card">
                                    <div class="card-body">
                                        <form class="mb-3" action="/dashboard/products" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col d-flex flex-column mx-auto">
                                                <label for="images" class="form-label">Upload Images</label>

                                                <div id="imageInputs" class="d-flex flex-wrap">
                                                    <div class="input-group mb-2 me-2" style="flex: 1 1 45%;">
                                                        <!-- Div pratinjau gambar awalnya disembunyikan -->
                                                        <div class="me-2 img-container" style="height: 75px; width: 100px; display: none;">
                                                            <img class="img-preview rounded-2 form-control" style="width: 100%; height: 100%; object-fit: cover;">
                                                        </div>
                                                        <input style="border-radius: 6px 0px 0px 6px;" type="file" id="image" name="picture1" class="py-4 form-control @error('picture1') is-invalid @enderror" accept="image/*" required onchange="previewImage(this)">
                                                        <button type="button" class="btn btn-outline-secondary" onclick="addImageInput()">
                                                            <i class="bx bx-plus-circle"></i>
                                                        </button>
                                                        @error('picture1')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div id="rulesProfileImage" class="form-text mb-4">
                                                    Silakan unggah gambar produk dengan format jpeg, png, jpg, gif dan ukuran maks 5MB.
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nama Produk</label>
                                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Masukkan nama produk" value="{{ old('name') }}" required/>
                                                <div class="form-text">Tekan tab setelah menuliskan nama produk untuk membuat slug secara otomatis</div>
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input type="text" id="slug" class="form-control @error('slug') is-invalid @enderror" name="slug" placeholder="Masukkan slug" value="{{ old('slug') }}" required/>
                                                @error('slug')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="category" class="form-label">Kategori</label>
                                                <select class="form-select @error('category_id') is-invalid @enderror" id="category" name="category_id" placeholder="Pilih kategori" required>
                                                    <option selected disabled>Pilih kategori</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6 mb-3 mb-md-0">
                                                    <label for="stock" class="form-label">Stok</label>
                                                    <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" placeholder="Masukkan stok" value="{{ old('stock') }}" required/>
                                                    @error('stock')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="price" class="form-label">Harga</label>
                                                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Masukkan harga" value="{{ old('price') }}" required/>
                                                    @error('price')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <textarea id="description" name="description">{{ old('description', $product->description) }}</textarea>
                                                @error('description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button class="btn btn-primary d-grid w-100" type="submit">Konfirmasi</button>
                                        </form>

                                        <script>
                                            function addImageInput() {
                                                const imageInputs = document.getElementById('imageInputs');
                                                const inputCount = imageInputs.children.length; // Hitung jumlah input

                                                if (inputCount >= 5) {
                                                    alert('Maksimal 5 gambar.');
                                                    return;
                                                }

                                                const newInput = document.createElement('div');
                                                newInput.classList.add('input-group', 'mb-2', 'me-2');
                                                newInput.style.flex = '1 1 45%';

                                                newInput.innerHTML = `
                                                    <div class="me-2 img-container" style="height: 75px; width: 100px; display: none;">
                                                        <img class="img-preview rounded-2 form-control" style="width: 100%; height: 100%; object-fit: cover;">
                                                    </div>
                                                    <input style="border-radius: 6px 0px 0px 6px;" type="file" name="picture${inputCount + 1}" class="py-4 form-control" accept="image/*" required onchange="previewImage(this)">
                                                    <button type="button" class="btn btn-outline-secondary" onclick="removeImageInput(this)">
                                                        <i class="bx bx-minus-circle"></i>
                                                    </button>
                                                `;

                                                imageInputs.appendChild(newInput);
                                            }

                                            function removeImageInput(button) {
                                                button.parentElement.remove();
                                            }

                                            function previewImage(input) {
                                                const file = input.files[0];
                                                const imgContainer = input.previousElementSibling; // Ambil div container gambar
                                                const imgPreview = imgContainer.querySelector('.img-preview');

                                                if (file) {
                                                    imgContainer.style.display = 'block'; // Tampilkan div gambar jika ada file
                                                    const reader = new FileReader();
                                                    reader.readAsDataURL(file);

                                                    reader.onload = function (event) {
                                                        imgPreview.src = event.target.result;
                                                    };
                                                } else {
                                                    imgContainer.style.display = 'none'; // Sembunyikan div gambar jika tidak ada file
                                                    imgPreview.src = "";
                                                }
                                            }

                                            const name = document.querySelector('#name');
                                            const slug = document.querySelector('#slug');

                                            // Event listener for name field
                                            name.addEventListener('change', function() {
                                                fetch('/dashboard/Product/checkSlug?name=' + name.value)
                                                    .then(response => response.json())
                                                    .then(data => slug.value = data.slug)
                                                    .catch(error => console.error('Error fetching slug:', error));
                                            });
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
