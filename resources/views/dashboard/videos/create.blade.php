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

    <!-- Tagify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css">

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

        /* Custom Tagify Styles */
        .tagify {
            --tags-border-color: #8FBF8F;
            --tags-hover-border-color: #7AAE7A;
            --tags-focus-border-color: #5A9E5A;
            --tag-remove-btn-bg--hover: #A3D3A3;
            font-weight: 500;
        }

        .tagify__dropdown__item--active {
            background-color: #354e33 !important;
            color: #fff !important;
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
                        <h5 class="mb-0">Tambah Data Video</h5>

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
                        <a href="javascript:history.back()" class="btn btn-primary">
                            <i class="bx bx-arrow-back me-2"></i>Kembali
                        </a>
                        <div class="authentication-wrapper authentication-basic container-p-y">
                            <div class="authentication-inner" style="max-width: 100%;">
                                <!-- Create Video -->
                                <div class="card">
                                    <div class="card-body">
                                        <form id="formAuthentication" class="mb-3" action="/dashboard/videos" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
                                            <div class="row mb-3">
                                                <div class="col-lg-6 mb-3 mb-lg-0">
                                                    <label for="video" class="form-label">Video</label>
                                                    <div id="videoPreviewContainer" class="me-2 video-container" style="display: none; aspect-ratio: 16/9; width: 100%;">
                                                        <video class="video-preview rounded-2 form-control" id="videoPreview" controls style="width: 100%; height: 100%; object-fit: cover;" required></video>
                                                    </div>
                                                    <input type="file" class="form-control @error('video') is-invalid @enderror" id="video" name="video" accept="video/mp4" />
                                                    <div id="rulesVideo" class="form-text">
                                                        Silakan unggah video dengan format mp4 dan ukuran maks 100MB.
                                                    </div>
                                                    @error('video')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="thumbnail" class="form-label">Thumbnail</label>
                                                    <!-- Thumbnail preview container -->
                                                    <div class="me-2 img-container" style="display: none; aspect-ratio: 16/9; width: 100%;">
                                                        <img class="img-preview rounded-2 form-control" style="width: 100%; height: 100%; object-fit: cover;">
                                                    </div>
                                                    <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail" accept="image/*" required />
                                                    <div id="rulesThumbnail" class="form-text">
                                                        Silakan unggah gambar produk dengan format jpeg, png, jpg, gif dan ukuran maks 5MB.
                                                    </div>
                                                    @error('thumbnail')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Judul</label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Masukkan judul" required value="{{ old('title') }}" />
                                                <div id="rulesSlug" class="form-text">Tekan tab setelah menuliskan judul video untuk membuat slug secara otomatis</div>
                                                @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Masukkan slug" required value="{{ old('slug') }}" />
                                                @error('slug')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="duration" class="form-label">Durasi Video (menit)</label>
                                                <input type="number" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" placeholder="Masukkan durasi video dalam satuan menit" required value="{{ old('duration') }}" />
                                                @error('duration')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="category_id" class="form-label">Kategori</label>
                                                <select class="form-select" id="category_id" name="category_id">
                                                    @if($videoCategories->isEmpty())
                                                    <option selected>Tidak tersedia</option>
                                                    @else
                                                    @foreach ($videoCategories as $videoCategory)
                                                    @if(old('category_id') == $videoCategory->id)
                                                    <option value="{{ $videoCategory->id }}" selected>{{ $videoCategory->name }}</option>
                                                    @else
                                                    <option value="{{ $videoCategory->id }}">{{ $videoCategory->name }}</option>
                                                    @endif
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="difficulty_level" class="form-label">Tingkat Kesulitan</label>
                                                <select class="form-select" id="difficulty_level" name="difficulty_level">
                                                    <option value="Pemula" selected>Pemula</option>
                                                    <option value="Menengah">Menengah</option>
                                                    <option value="Ahli">Ahli</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="delivery_style" class="form-label">Gaya Penyampaian</label>
                                                <input type="text" class="form-control @error('delivery_style') is-invalid @enderror" id="delivery_style" name="delivery_style" placeholder="Masukkan gaya penyampaian video" required value="{{ old('delivery_style') }}" />
                                                @error('delivery_style')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Deskripsi</label>
                                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Enter description" required>{{ old('description') }}</textarea>
                                                @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="products" class="form-label">Produk Terkait</label>
                                                <input type="text" class="form-control @error('products') is-invalid @enderror" id="products" name="products" placeholder="Masukkan produk terkait" />
                                                <div id="productsHelp" class="form-text">Pilih produk terkait dengan video ini.</div>
                                                @error('products')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="objective g-2 mb-3">
                                                <div class="row g-2">
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="objective1" class="form-label">Objektif 1</label>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('objective_heading1') is-invalid @enderror"
                                                                id="floatingHeading"
                                                                placeholder="Masukkan judul objektif video"
                                                                aria-describedby="floatingHeadingHelp"
                                                                name="objective_heading1"
                                                                required
                                                                value="{{ old('objective_heading1') }}" />
                                                            <label for="floatingHeading">Judul Objektif</label>
                                                            @error('objective_heading1')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-floating">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('objective_description1') is-invalid @enderror"
                                                                id="floatingDescription"
                                                                placeholder="Jelaskan secara singkat tujuan dari video ini"
                                                                aria-describedby="floatingDescriptionHelp"
                                                                name="objective_description1"
                                                                required
                                                                value="{{ old('objective_description1') }}" />
                                                            <label for="floatingDescription">Deskripsi Objektif</label>
                                                            @error('objective_description1')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="objective1" class="form-label">Objektif 2</label>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('objective_heading2') is-invalid @enderror"
                                                                id="floatingHeading"
                                                                placeholder="Masukkan judul objektif video"
                                                                aria-describedby="floatingHeadingHelp"
                                                                name="objective_heading2"
                                                                required
                                                                value="{{ old('objective_heading2') }}" />
                                                            <label for="floatingHeading">Judul Objektif</label>
                                                            @error('objective_heading2')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-floating">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('objective_description2') is-invalid @enderror"
                                                                id="floatingDescription"
                                                                placeholder="Jelaskan secara singkat tujuan dari video ini"
                                                                aria-describedby="floatingDescriptionHelp"
                                                                name="objective_description2"
                                                                required
                                                                value="{{ old('objective_description2') }}" />
                                                            <label for="floatingDescription">Deskripsi Objektif</label>
                                                            @error('objective_description2')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="objective1" class="form-label">Objektif 3</label>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('objective_heading3') is-invalid @enderror"
                                                                id="floatingHeading"
                                                                placeholder="Masukkan judul objektif video"
                                                                aria-describedby="floatingHeadingHelp"
                                                                name="objective_heading3"
                                                                required
                                                                value="{{ old('objective_heading3') }}" />
                                                            <label for="floatingHeading">Judul Objektif</label>
                                                            @error('objective_heading3')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-floating">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('objective_description3') is-invalid @enderror"
                                                                id="floatingDescription"
                                                                placeholder="Jelaskan secara singkat tujuan dari video ini"
                                                                aria-describedby="floatingDescriptionHelp"
                                                                name="objective_description3"
                                                                required
                                                                value="{{ old('objective_description3') }}" />
                                                            <label for="floatingDescription">Deskripsi Objektif</label>
                                                            @error('objective_description3')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="objective1" class="form-label">Objektif 4</label>
                                                        <div class="form-floating mb-3">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('objective_heading4') is-invalid @enderror"
                                                                id="floatingHeading"
                                                                placeholder="Masukkan judul objektif video"
                                                                aria-describedby="floatingHeadingHelp"
                                                                name="objective_heading4"
                                                                required
                                                                value="{{ old('objective_heading4') }}" />
                                                            <label for="floatingHeading">Judul Objektif</label>
                                                            @error('objective_heading4')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-floating">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('objective_description4') is-invalid @enderror"
                                                                id="floatingDescription"
                                                                placeholder="Jelaskan secara singkat tujuan dari video ini"
                                                                aria-describedby="floatingDescriptionHelp"
                                                                name="objective_description4"
                                                                required
                                                                value="{{ old('objective_description4') }}" />
                                                            <label for="floatingDescription">Deskripsi Objektif</label>
                                                            @error('objective_description4')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <button class="btn btn-primary d-grid w-100" type="submit">Submit</button>
                                        </form>
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

    <!-- Tagify JS -->
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>

    <script>
        // Preview video
        document.getElementById('video').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const videoPreviewContainer = document.getElementById('videoPreviewContainer');
            const videoPreview = document.getElementById('videoPreview');

            if (file) {
                // Set video source and display the preview container
                videoPreview.src = URL.createObjectURL(file);
                videoPreviewContainer.style.display = 'block';
            } else {
                // Hide the preview container if no file is selected
                videoPreviewContainer.style.display = 'none';
            }
        });

        // Preview thumbnail
        document.getElementById('thumbnail').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const imgPreview = document.querySelector('.img-preview');
                const imgContainer = document.querySelector('.img-container');

                imgPreview.src = URL.createObjectURL(file);
                imgContainer.style.display = 'block';
            }
        });

        // Sluggable
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/video/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        // Inisialisasi Tagify
        const input = document.querySelector('#products');
        const tagify = new Tagify(input, {
            tagTextProp: 'name', // Tampilkan nama produk di dropdown dan tag
            enforceWhitelist: true, // Hanya izinkan item dari whitelist
            whitelist: [], // Awalnya kosong, akan diisi dengan data dari server
            dropdown: {
                maxItems: 10, // jumlah maksimal item yang ditampilkan
                classname: "tags-look", // kelas dropdown
                enabled: 0, // tampilkan dropdown saat input fokus
                closeOnSelect: false // tetap buka dropdown setelah memilih
            }
        });

        // Fetch data produk dari server
        fetch('/dashboard/getProducts')
            .then(response => response.json())
            .then(data => {
                // Update whitelist Tagify dengan data dari server
                tagify.settings.whitelist = data.map(product => ({
                    id: product.id, // ID produk sebagai id
                    value: product.name, // ID produk sebagai value
                }));
            })
            .catch(error => {
                console.error('Error fetching product data:', error);
            });

        // Ubah input agar data dikirim dalam format JSON
        input.addEventListener("change", function() {
            this.value = JSON.stringify(tagify.value.map(tag => tag.value)); // Kirim hanya ID produk
        });
    </script>
</body>

</html>