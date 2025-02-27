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

            <section class="bg-light" style="padding-bottom: 10px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="crumb m-0">
                                <li><a href="/">Beranda</a></li>
                                <li><a href="/produk">Produk</a></li>
                                <li class="active">Bibit Sawi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pt-100" style="padding-bottom: 0;">
                <div class="container">
                    <div class="row gy-4 gx-5">
                        <div class="col-md-6">
                            <div id="sync1" class="owl-carousel owl-theme">
                                <div class="item" style="padding: 40px;"><img src="/images/shop/bibit-benih/bibit sawi.png" class="w-100 p-5" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit sawi2.png" class="w-100" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit sawi3.jpg" class="w-100" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit sawi4.webp" class="w-100" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit sawi5.jpg" class="w-100" alt=""></div>
                            </div>

                            <div id="sync2" class="owl-carousel owl-theme">
                                <div class="item"><img src="/images/shop/bibit-benih/bibit sawi.png" class="w-100 p-4" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit sawi2.png" class="w-100" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit sawi3.jpg" class="w-100" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit sawi4.webp" class="w-100" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit sawi5.jpg" class="w-100" alt=""></div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <label for="cat_4">🌱 Bibit & Benih</label>
                            <h2 class="fs-40">Bibit Sawi</h2 class="fs-48">
                            <p class="col-lg-10">Dapatkan bibit sawi berkualitas tinggi yang siap tumbuh dengan cepat dan subur! Cocok untuk sistem hidroponik maupun tanah, bibit ini memiliki tingkat keberhasilan tinggi dan daya tahan yang baik. Dengan perawatan yang tepat, Anda bisa menikmati panen sawi segar dalam waktu singkat.
                                <br><br>🔹 <b>Keunggulan:</b>
                                <br>✅ Pertumbuhan cepat & hasil melimpah
                                <br>✅ Cocok untuk hidroponik & kebun konvensional
                                <br>✅ Tingkat keberhasilan tinggi & bebas hama
                                <br><br>Kemasan: Dikemas secara kedap udara untuk menjaga kesegaran bibit. <br>
                                Berat Bersih: 50 gram (±5.000 butir biji). <br>
                                Daya Tumbuh: ≥85% dengan perawatan yang tepat. <br>
                                Masa Panen: 25-30 hari setelah semai. <br>
                                Media Tanam: Cocok untuk hidroponik, tanah, atau polybag. <br>
                                Petunjuk Penyemaian: Direndam selama 6-12 jam sebelum ditanam untuk mempercepat perkecambahan. <br>
                                Kualitas Terjamin: Bebas dari hama & penyakit, siap tumbuh dengan optimal.
                            </p>
                            <div class="d-flex mb-4 align-items-center">
                                <div>
                                    <h3 class="fs-24 mb-0 me-2 line-through op-5">Rp50.000</h3>
                                </div>
                                <div>
                                    <h3 class="fs-32 mb-0 me-2">Rp15.000</h3>
                                </div>
                                <div>
                                    <span class="fs-18 fw-600 px-3 rounded-20px bg-color-2 text-white">Sale</span>
                                </div>
                            </div>

                            <div class="group radio__button mb-4">
                                <h5 class="mb-3">Quantity</h5>
                                <div class="de-number">
                                    <span class="d-minus">-</span>
                                    <input type="text" class="no-border no-bg" value="1">
                                    <span class="d-plus">+</span>
                                </div>
                            </div>

                            <a class="btn-main" href="#">Tambah ke Keranjang</a>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container" style="padding-top: 0;">
                    <div class="row g-4 mb-4">
                        <div class="col-lg-12">
                            <div class="owl-custom-nav menu-" data-target="#new-arrivals-carousel">
                                <div class="d-flex justify-content-between">
                                    <h3 class="text-uppercase mb-4">Produk Lain yang Sering Dibeli Bersama</h3>
                                    <div class="arrow-simple">
                                        <a class="btn-prev"></a>
                                        <a class="btn-next"></a>
                                    </div>
                                </div>


                                <div id="new-arrivals-carousel" class="owl-carousel owl-4-cols">

                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <div class="atr__promo">
                                                    Sale
                                                </div>
                                                <a href="/produk/slug">
                                                    <img class="atr__image-main p-2" src="/images/shop/nutrisi/nutrisi.png">
                                                </a>
                                                <div class="atr__extra-menu">
                                                    <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                    <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                                </div>
                                            </div>

                                            <label for="cat_4">💧 Nutrisi Tanaman</label>

                                            <h3>Nutrisi Hidroponik AB</h3>
                                            <div class="atr__main-price">
                                                Rp100.000
                                            </div>

                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <div class="atr__promo">
                                                    Sale
                                                </div>
                                                <a href="/produk/slug">
                                                    <img class="atr__image-main p-2" src="/images/shop/alat/netpot.png">
                                                </a>
                                                <div class="atr__extra-menu">
                                                    <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                    <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                                </div>
                                            </div>

                                            <label for="cat_4">🛠️ Peralatan Hidroponik</label>

                                            <h3>NetPot Hidroponik 5cm</h3>
                                            <div class="atr__main-price">
                                                Rp1.000
                                            </div>

                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <div class="atr__promo">
                                                    Sale
                                                </div>
                                                <a href="/produk/slug">
                                                    <img class="atr__image-main p-2" src="/images/shop/paket/paket.png">
                                                </a>
                                                <div class="atr__extra-menu">
                                                    <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                    <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                                </div>
                                            </div>

                                            <label for="cat_4">📦 Paket Hidroponik</label>

                                            <h3>Paket Hidroponik Wick 9 Lubang 1 Bak</h3>
                                            <div class="atr__main-price">
                                                Rp50.000
                                            </div>

                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <div class="atr__promo">
                                                    Sale
                                                </div>
                                                <a href="/produk/slug">
                                                    <img class="atr__image-main p-2" src="/images/shop/aksesori-pendukung/phmeter.png">
                                                </a>
                                                <div class="atr__extra-menu">
                                                    <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                    <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                                </div>
                                            </div>

                                            <label for="cat_4">⚙️ Aksesori & Pendukung</label>

                                            <h3>PH Meter TDS & EC Meter</h3>
                                            <div class="atr__main-price">
                                                Rp75.000
                                            </div>

                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <div class="atr__promo">
                                                    Sale
                                                </div>
                                                <a href="/produk/slug">
                                                    <img class="atr__image-main p-2" src="/images/shop/nutrisi/nutrisi.png">
                                                </a>
                                                <div class="atr__extra-menu">
                                                    <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                    <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                                </div>
                                            </div>

                                            <label for="cat_4">💧 Nutrisi Tanaman</label>

                                            <h3>Nutrisi Hidroponik AB</h3>
                                            <div class="atr__main-price">
                                                Rp100.000
                                            </div>

                                        </div>
                                    </div>
                                    <!-- product item end -->

                                </div>
                            </div>

                        </div>
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