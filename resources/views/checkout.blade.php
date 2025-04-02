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
                <div class="container d-flex flex-column-reverse flex-lg-row gap-5 justify-content-between">
                    <div class="col-lg-5">
                        <h5 class="mb-3"><b>Detail Pesanan</b></h5>

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
                            <h4 class="m-0 text-truncate fw-bold text-end">Rp30.000</p>
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
                            <input type='submit' id='send_message' value='Buat Pesanan' class="btn-main w-100">
                        </div>
                    </div>

                    <div class="address col-lg-6">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-3"><b>Informasi Pengiriman</b></h5>
                            <div class="de_checkbox">
                                <input id="my_address" name="my_address" type="checkbox" value="Ya">
                                <label for="my_address">Alamat Saya</label>
                            </div>
                        </div>

                        <form name="contactForm" id="recipient_order_form" class="position-relative z1000" method="post" action="#">
                            <div class="row g-3 mb-3">
                                <div class="field-set col-lg-6">
                                    <label for="namaPenerima" class="form-label">Nama Penerima</label>
                                    <input type="text" class="form-control" id="namaPenerima" name="namaPenerima" placeholder="Masukkan nama penerima pesanan" />
                                </div>
                                <div class="field-set col-lg-6">
                                    <label for="nomorPenerima" class="form-label">Nomor Telepon Penerima</label>
                                    <input type="text" class="form-control" id="nomorPenerima" name="nomorPenerima" placeholder="Masukkan nomor telepon penerima pesanan" />
                                </div>
                            </div>
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
                                <div class="col-lg-6">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                    <select class="form-select" id="kecamatan" aria-label="Default select example">
                                        <option selected>Kecamatan</option>
                                        <option value="Bogor Tengah">Bogor Tengah</option>
                                        <option value="Bogor Selatan">Bogor Selatan</option>
                                        <option value="Bogor Utara">Bogor Utara</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="kelurahan" class="form-label">Kelurahan</label>
                                    <select class="form-select" id="kelurahan" aria-label="Default select example">
                                        <option selected>Kelurahan</option>
                                        <option value="Cidangiang">Cidangiang</option>
                                        <option value="Babakan">Babakan</option>
                                        <option value="Sempur">Sempur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" id="alamat" rows="3" style="min-height: 240px;"></textarea>
                            </div>
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

</body>

</html>