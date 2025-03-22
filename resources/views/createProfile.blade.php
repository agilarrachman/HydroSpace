<!DOCTYPE html>
<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('assets/') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>{{ $title }}</title>
    <meta name="description" content="" />
    <link rel="icon" href="{{ asset('images/icon.webp') }}" type="image/gif" sizes="16x16">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <!-- Bootstrap -->
</head>

<body>
    <!-- Content -->
    <div class="container-xxl">
        <img src="{{ asset('images/logo-wm.webp') }}" alt="" style="position: absolute; top: 0; left: 0; width: 200px; height: 200px; transform: scale(-1, -1);">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner" style="max-width: 700px;">
                <!-- Create Profile -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="/" class="app-brand-link gap-2">
                                <img class="logo-main" src="{{ asset('images/logo-black.webp') }}" alt="">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2 text-center">Lengkapi Data Dirimu! 🌱</h4>
                        <p class="text-center mx-auto" style="max-width: 400px;">Bantu kami mengenalmu lebih baik untuk pengalaman berkebun hidroponik yang optimal</p>
                        <form id="formAuthentication" class="mb-3" action="/buat-profil" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col d-flex flex-column w-75 mx-auto mb-3">
                                <img id="profileImagePreview" src="{{ asset('images/default profile picture.jpg') }}" alt="" class="rounded-circle mx-auto my-3" style="width: 140px; height: 140px; object-fit: cover;">
                                <input type="file" name="profile_picture" id="profile_picture" class="form-control mx-auto @error('profile_picture') is-invalid @enderror" accept="image/*" onchange="previewImage(event)">
                                @error('profile_picture')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <input type="hidden" name="email" value="{{ $email }}">
                            <input type="hidden" name="password" value="{{ $password }}">
                            <input type="hidden" name="role" value="Customer">

                            <div class="row g-2 mb-3">
                                <div class="col-lg-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="Masukkan username" autofocus required value="{{ old('username') }}">
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan nama lengkap" required value="{{ old('name') }}" />
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row g-2 mb-3">
                                <div class="col-lg-6">
                                    <label for="gender" class="form-label">Jenis Kelamin</label>
                                    <div class="d-flex gap-3">
                                        <div class="form-check">
                                            <input name="gender" class="form-check-input" type="radio" value="Pria" id="Pria" checked />
                                            <label class="form-check-label" for="Pria"> Pria </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="gender" class="form-check-input" type="radio" value="Wanita" id="Wanita" />
                                            <label class="form-check-label" for="Wanita"> Wanita </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="phone_number" class="form-label">Nomor Handphone</label>
                                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" placeholder="Cth: 081234567890" required value="{{ old('phone_number') }}" />
                                    @error('phone_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="address">
                                <div class="row g-3 mb-3">
                                    <div class="col-lg-6">
                                        <label for="province" class="form-label">Provinsi</label>
                                        <select class="form-select" id="province" name="province" onchange="loadCities(this.value)">
                                            <option selected disabled>Pilih Provinsi</option>
                                            @foreach ($provinces as $province)
                                            <option value="{{ $province->id }}" {{ old('province') == $province->id ? 'selected' : '' }}>
                                                {{ $province->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="city" class="form-label">Kota</label>
                                        <select class="form-select" id="city" name="city" onchange="loadDistricts(this.value)">
                                            <option selected disabled>Pilih Kota</option>
                                            @foreach ($cities as $city)
                                            <option value="{{ $city->id }}" {{ old('city') == $city->id ? 'selected' : '' }}>
                                                {{ $city->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-lg-6">
                                        <label for="district" class="form-label">Kecamatan</label>
                                        <select class="form-select" id="district" name="district" onchange="loadVillages(this.value)">
                                            <option selected disabled>Pilih Kecamatan</option>
                                            @foreach ($districts as $district)
                                            <option value="{{ $district->id }}" {{ old('district') == $district->id ? 'selected' : '' }}>
                                                {{ $district->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="village" class="form-label">Kelurahan</label>
                                        <select class="form-select" id="village" name="village">
                                            <option selected disabled>Pilih Kelurahan</option>
                                            @foreach ($villages as $village)
                                            <option value="{{ $village->id }}" {{ old('village') == $village->id ? 'selected' : '' }}>
                                                {{ $village->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="full_address" class="form-label">Alamat Lengkap</label>
                                    <textarea class="form-control" id="full_address" name="full_address" rows="3" style="min-height: 200px;" placeholder="Masukkan alamat lengkap Anda, termasuk patokan, gang, nomor rumah, hingga link Google Maps jika tersedia. 
Contoh: Jl. Merdeka No. 10, Gang Mawar, RT 02 RW 01, Kelurahan Harmoni, Kota Bogor. Dekat Indomaret, seberang Masjid Al-Falah (https://maps.app.goo.gl/xyz123)">{{ old('full_address') }}</textarea>
                                </div>
                            </div>

                            <button class="btn btn-primary d-grid w-100" type="submit">Konfirmasi</button>
                        </form>
                    </div>
                </div>
                <!-- /Create Profile -->
            </div>
        </div>
        <img src="{{ asset('images/logo-wm.webp') }}" alt="" style="position: absolute; width: 200px; height: 200px; right:0; margin-top: -170px;">
    </div>
    <!-- / Content -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Page JS -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
        // Menampilkan Preview Profile Image
        function previewImage(event) {
            var reader = new FileReader(); // Create FileReader object

            reader.onload = function() {
                var output = document.getElementById('profileImagePreview'); // Get the image preview element
                output.src = reader.result; // Set the src attribute with the file's data
            };

            reader.readAsDataURL(event.target.files[0]); // Read the file as a data URL
        }

        function loadCities(provinceId) {
            // Reset Kota, Kecamatan, dan Kelurahan
            let citySelect = document.getElementById('city');
            let districtSelect = document.getElementById('district');
            let villageSelect = document.getElementById('village');

            citySelect.innerHTML = '<option selected disabled>Pilih Kota</option>';
            districtSelect.innerHTML = '<option selected disabled>Pilih Kecamatan</option>';
            villageSelect.innerHTML = '<option selected disabled>Pilih Kelurahan</option>';

            // Fetch data kota berdasarkan provinsi
            fetch(`/get-cities/${provinceId}`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(city => {
                        citySelect.innerHTML += `<option value="${city.id}">${city.name}</option>`;
                    });
                })
                .catch(error => console.error('Error:', error));
        }

        function loadDistricts(cityId) {
            // Reset Kecamatan dan Kelurahan
            let districtSelect = document.getElementById('district');
            let villageSelect = document.getElementById('village');

            districtSelect.innerHTML = '<option selected disabled>Pilih Kecamatan</option>';
            villageSelect.innerHTML = '<option selected disabled>Pilih Kelurahan</option>';

            // Fetch data kecamatan berdasarkan kota
            fetch(`/get-districts/${cityId}`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(district => {
                        districtSelect.innerHTML += `<option value="${district.id}">${district.name}</option>`;
                    });
                })
                .catch(error => console.error('Error:', error));
        }

        function loadVillages(districtId) {
            // Reset Kelurahan
            let villageSelect = document.getElementById('village');
            villageSelect.innerHTML = '<option selected disabled>Pilih Kelurahan</option>';

            // Fetch data kelurahan berdasarkan kecamatan
            fetch(`/get-villages/${districtId}`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(village => {
                        villageSelect.innerHTML += `<option value="${village.id}">${village.name}</option>`;
                    });
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</body>

</html>