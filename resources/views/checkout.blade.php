<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>{{ $title }}</title>
    <link rel="icon" href="{{ asset('images/icon.webp') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Gardyn — Plants Store" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="/css/colors/scheme-01.css" rel="stylesheet" type="text/css">

    <!-- Midtrans -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-XWPVRwTXXJ0A8RT_"></script>

    <style>
        .header-light.transparent {
            background-color: #F8FBF3 !important;
        }

        input[type="checkbox"]:checked {
            accent-color: #354E33;
        }

        @media (min-width: 992px) {
            #crumb {
                padding-top: 140px !important
            }
        }

        .btn-outline {
            display: inline-block;
            text-align: center;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 600;
            padding: 10px 20px;
            color: #354E33;
            border: 2px solid #354E33;
            border-radius: 100px;
            transition: all 0.3s ease-in-out;
        }

        .btn-outline:hover {
            background-color: rgb(225, 228, 218);
        }

        .btn-main:disabled {
            background-color: #ccc !important;
            cursor: not-allowed;
            opacity: 0.6;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>

        <!-- preloader begin -->
        <div id="de-loader"></div>
        <!-- preloader end -->

        {{-- navbar --}}
        @include('partials.navbarShop')
        {{-- navbar end --}}

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section class="bg-light pt-4" style="padding-bottom: 10px;" id="crumb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="crumb m-0">
                                <li><a href="/">Beranda</a></li>
                                <li><a href="/produk">Produk</a></li>
                                <li class="active">{{ $active }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pt-3" style="padding-bottom: 140px;">

                <h3 class="fw-bold mx-auto text-center mt-3 mb-5">Pesanan Kamu</h3>
                <div class="container d-flex flex-column-reverse flex-lg-row justify-content-between">
                    <div class="col-lg-6 pe-5">
                        <h5 class="mb-3"><b>Detail Pesanan</b></h5>

                        @foreach($orderItems as $item)
                        <div class="product d-flex gap-3">
                            <div class="image-product d-flex">
                                <img src="{{ asset('storage/' . $item->product->picture1) }}" alt="{{ $item->product->name }}" class="h-100 object-fit-cover p-0 m-auto" style="background-color: transparent; border: none;">
                            </div>
                            <div class="d-flex flex-column flex-grow-1">
                                <label for="cat_{{ $item->product->id }}">{{ $item->product->category->name }}</label>
                                <h4 class="text-wrap">{{ $item->product->name }}</h4>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0"><b>Jumlah:</b> {{ $item->quantity }} pcs</p>
                                    <span class="d-price">Rp{{ number_format($item->total_price, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>

                        <hr class="my-3" style="opacity: 0.10;">
                        @endforeach

                        <div class="w-100 my-3 d-flex justify-content-between gap-2">
                            <h4 class="m-0">Total:</h4>
                            <h4 class="m-0 text-truncate fw-bold text-end">Rp{{ number_format($totalPrice, 0, ',', '.') }}</h4>
                        </div>

                        <div class="terms w-100">
                            <h3>Ketentuan Pemesanan</h3>
                            <ul class="w-100">
                                <li class="text-wrap">Semua pesanan diproses setelah pembayaran berhasil dikonfirmasi.</li>
                                <li class="text-wrap">Pesanan akan diproses dalam waktu 1-3 hari kerja setelah pembayaran dikonfirmasi.</li>
                                <li class="text-wrap">Pesanan yang sudah diproses tidak dapat dibatalkan.</li>
                                <li class="text-wrap">Jika ada kendala atau pertanyaan, hubungi tim kami melalui fitur chat admin.</li>
                            </ul>
                        </div>

                        <div id='submit w-100' class="mt20 order-last">
                            <div class="de_checkbox mb-3 px-0">
                                <input id="read" name="read" type="checkbox" value="Ya">
                                <label for="read">Saya telah membaca ketentuan pemesanan</label>
                            </div>
                            <div class="d-flex">
                                <a href="/cancel" class="btn-outline col-6">Batalkan Pesanan</a>
                                <form id="payment-form" class="col-6 ms-2">
                                    <input type="hidden" name="amount" value="{{ $totalPrice }}">
                                    <input type='submit' id='pay-button' value='Bayar Sekarang' class="btn-main w-100 h-100">
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="address col-lg-6 ps-5">
                        <form action="/pesanan" method="post" id="form">
                            @csrf
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-3"><b>Informasi Pengiriman</b></h5>
                                <div class="de_checkbox">
                                    <input type="checkbox" id="useMyAddress" name="useMyAddress" onclick="fillCustomerAddress()">
                                    <label for="useMyAddress">Alamat Saya</label>
                                </div>
                            </div>

                            <input type="text" name="customer_id" value="{{ auth()->user()->id }}" hidden>
                            <input type="hidden" name="status" value="Dikemas">

                            <div class="row g-3 mb-3">
                                <input type="hidden" name="total_amount" value="{{ $totalPrice }}">
                                <div class="field-set col-lg-6">
                                    <label for="recipient" class="form-label">Nama Penerima</label>
                                    <input type="text" class="form-control @error('recipient') is-invalid @enderror" id="recipient" name="recipient" placeholder="Masukkan nama penerima pesanan" value="{{ old('phone_number') }}" required />
                                    @error('recipient')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="field-set col-lg-6">
                                    <label for="phone_number" class="form-label">Nomor Telepon Penerima</label>
                                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" placeholder="Cth: 081234567890" value="{{ old('phone_number') }}" required />
                                    @error('phone_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
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
Contoh: Jl. Merdeka No. 10, Gang Mawar, RT 02 RW 01, Kelurahan Harmoni, Kota Bogor. Dekat Indomaret, seberang Masjid Al-Falah (https://maps.app.goo.gl/xyz123)" required>{{ old('full_address')}}</textarea>
                            </div>
                            @if(session('selected_items'))
                            @foreach(session('selected_items') as $itemId)
                            <input type="hidden" name="selected_items[]" value="{{ $itemId }}">
                            @endforeach
                            @endif
                        </form>
                    </div>
                </div>


            </section>

        </div>
        <!-- content end -->

        {{-- footer --}}
        @include('partials.footer')
        {{-- footer end --}}

    </div>

    {{-- overlay cart --}}
    @include('partials.cart')
    {{-- overlay cart end --}}


    <!-- Javascript Files
    ================================================== -->
    <script src="/js/plugins.js"></script>
    <script src="/js/designesia.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let checkbox = document.getElementById("read");
            let submitButton = document.getElementById("pay-button");

            // Saat pertama kali halaman dimuat, buat tombol tidak bisa diklik
            submitButton.disabled = true;

            // Tambahkan event listener untuk mendeteksi perubahan pada checkbox
            checkbox.addEventListener("change", function() {
                submitButton.disabled = !this.checked;
            });
        });


        function fillCustomerAddress() {
            let isChecked = document.getElementById('useMyAddress').checked;

            document.getElementById('recipient').value = isChecked ? "{{ $customer->name }}" : "";
            document.getElementById('phone_number').value = isChecked ? "{{ $customer->phone_number }}" : "";
            document.getElementById('province').value = isChecked ? "{{ $customer->province }}" : "";
            document.getElementById('city').value = isChecked ? "{{ $customer->city }}" : "";
            document.getElementById('district').value = isChecked ? "{{ $customer->district }}" : "";
            document.getElementById('village').value = isChecked ? "{{ $customer->village }}" : "";
            document.getElementById('full_address').value = isChecked ? "{{ $customer->full_address }}" : "";
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

        document.addEventListener('DOMContentLoaded', function() {
            const paymentForm = document.getElementById('payment-form');
            const payButton = document.getElementById('pay-button');
            const orderForm = document.getElementById('form'); // Dapatkan form pesanan

            if (paymentForm && orderForm) {
                paymentForm.addEventListener('submit', function(event) {
                    event.preventDefault(); // Mencegah form submit biasa

                    const amountInput = paymentForm.querySelector('input[name="amount"]');
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    if (amountInput) {
                        const amount = parseInt(amountInput.value);

                        fetch('/place-order', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': csrfToken
                                },
                                body: JSON.stringify({
                                    amount: amount,
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.token) {
                                    window.snap.pay(data.token, {
                                        onSuccess: function(result) {
                                            // Ambil semua data dari form order
                                            const formData = new FormData(orderForm);
                                            formData.append('midtrans_transaction_id', result.transaction_id);
                                            formData.append('midtrans_response', JSON.stringify(result));
                                            formData.append('payment_method', result.payment_type);
                                            formData.append('order_id', data.order_id);

                                            // Kirim data order dan pembayaran ke backend
                                            fetch('/pesanan', {
                                                    method: 'POST',
                                                    headers: {
                                                        'X-CSRF-TOKEN': csrfToken
                                                    },
                                                    body: formData
                                                })
                                                .then(response => response.json()) // Atau response.text() jika backend mengembalikan redirect
                                                .then(data => {
                                                    // Handle respons dari backend setelah penyimpanan order
                                                    if (data.order_id) {
                                                        window.location.href = '/pesanan/' + data.order_id; // Redirect ke detail pesanan
                                                    } else if (data.error) {
                                                        alert('Gagal menyimpan pesanan: ' + data.error);
                                                        console.error('Error menyimpan pesanan:', data.error);
                                                    } else {
                                                        alert('Terjadi kesalahan saat menyimpan pesanan.');
                                                        console.error('Respon tidak terduga dari backend:', data);
                                                    }
                                                })
                                                .catch(error => {
                                                    console.error('Error mengirim data pesanan:', error);
                                                    alert('Terjadi kesalahan jaringan saat menyimpan pesanan.');
                                                });
                                        },
                                        onPending: function(result) {
                                            alert('Menunggu Pembayaran!');
                                            console.log(result);
                                            // Anda bisa menambahkan logika untuk status pending di sini
                                        },
                                        onError: function(result) {
                                            alert('Pembayaran Gagal!');
                                            console.log(result);
                                            // Anda bisa menambahkan logika untuk status error di sini
                                        },
                                        onClose: function() {
                                            alert('Anda menutup popup pembayaran sebelum menyelesaikan transaksi.');
                                            // Anda bisa menambahkan logika ketika pengguna menutup popup
                                        }
                                    });
                                } else {
                                    alert('Terjadi kesalahan: ' + (data.error || 'Tidak dapat memproses pembayaran'));
                                    console.error('Error:', data);
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('Terjadi kesalahan jaringan atau server.');
                            });
                    } else {
                        console.error('Elemen input dengan name="amount" tidak ditemukan di dalam form pembayaran.');
                        alert('Terjadi kesalahan: Jumlah pembayaran tidak ditemukan.');
                    }
                });
            } else {
                console.error('Form pembayaran atau form pesanan tidak ditemukan.');
            }
        });
    </script>

</body>

</html>