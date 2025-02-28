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
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/coloring.css') }}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ asset('css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
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

            <section id="subheader" class="relative bg-light">
                <div class="container relative z-index-1000">
                    <div class="row">
                        <div class="col-lg-7">
                            <ul class="crumb">
                                <li><a href="/">Beranda</a></li>
                                <li class="active">Produk</li>
                            </ul>
                            <h1 class="text-uppercase">Produk</h1>
                            <p class="col-lg-10 lead">Jelajahi berbagai produk berkualitas untuk mendukung kebun hidroponik Anda</p>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('images/logo-wm.webp') }}" class="abs end-0 bottom-0 z-2 w-20" alt="">
            </section>

            <section>
                <div class="container" style="padding-bottom: 0;">
                    <div class="row g-4 mb-4">
                        <div class="col-lg-12">
                            <div class="owl-custom-nav menu-" data-target="#new-arrivals-carousel">
                                <div class="d-flex justify-content-between">
                                    <h3 class="text-uppercase mb-4">Best Sellers</h3>
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
                                                    <img class="atr__image-main p-5" src="images/shop/bibit-benih/bibit sawi.png">
                                                </a>
                                                <div class="atr__extra-menu">
                                                    <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                    <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                                </div>
                                            </div>

                                            <label for="cat_4">🌱 Bibit & Benih</label>

                                            <h3>Bibit Sawi</h3>
                                            <div class="atr__main-price">
                                                Rp20.000
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
                                                    <img class="atr__image-main p-2" src="images/shop/nutrisi/nutrisi.png">
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
                                                    <img class="atr__image-main p-2" src="images/shop/alat/netpot.png">
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
                                                    <img class="atr__image-main p-2" src="images/shop/paket/paket.png">
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
                                                    <img class="atr__image-main p-2" src="images/shop/aksesori-pendukung/phmeter.png">
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
                                                    <img class="atr__image-main p-2" src="images/shop/nutrisi/nutrisi.png">
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
                                                    <img class="atr__image-main p-2" src="images/shop/alat/netpot.png">
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
                                                    <img class="atr__image-main p-2" src="images/shop/paket/paket.png">
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
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <section id="products" style="padding-top: 0;">
                <div class="container">
                    <h2 class="text-uppercase text-center mb-5 wow fadeInUp" data-wow-delay=".2s">Katalog <span class="id-color-2">Produk</span></h2>

                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="item_filter_group">
                                <h4>Cari Produk</h4>
                                <div class="serach-bar d-flex gap-2">
                                    <input type="text" name="Name" id="name" class="de-quick-search py-2 w-100 rounded-20" placeholder="Cari...">
                                    <button class="btn btn-secondary px-3 rounded-pill" type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </div>

                            <div class="item_filter_group">
                                <h4>Kategori</h4>
                                <div class="de_form">
                                    <div class="de_checkbox">
                                        <input id="cat_1" name="cat_1" type="checkbox" value="cat_1">
                                        <label for="cat_1">🌱 Bibit & Benih</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="cat_2" name="cat_2" type="checkbox" value="cat_2">
                                        <label for="cat_2">💧 Nutrisi Tanaman</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="cat_3" name="cat_3" type="checkbox" value="cat_3">
                                        <label for="cat_3">🛠️ Peralatan Hidroponik</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="cat_4" name="cat_4" type="checkbox" value="cat_4">
                                        <label for="cat_4">⚙️ Aksesori & Pendukung</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="cat_5" name="cat_5" type="checkbox" value="cat_5">
                                        <label for="cat_5">📦 Paket Set Hidroponik</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="row g-4">
                                <!-- product item begin -->
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-5" src="images/shop/bibit-benih/bibit sawi.png">
                                            </a>
                                            <div class="atr__extra-menu">
                                                <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                            </div>
                                        </div>

                                        <label for="cat_4">🌱 Bibit & Benih</label>

                                        <h3>Bibit Sawi</h3>
                                        <div class="atr__main-price">
                                            Rp20.000
                                        </div>

                                    </div>
                                </div>
                                <!-- product item end -->

                                <!-- product item begin -->
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-5" src="images/shop/bibit-benih/bibit sawi.png">
                                            </a>
                                            <div class="atr__extra-menu">
                                                <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                            </div>
                                        </div>

                                        <label for="cat_4">🌱 Bibit & Benih</label>

                                        <h3>Bibit Sawi</h3>
                                        <div class="atr__main-price">
                                            Rp20.000
                                        </div>

                                    </div>
                                </div>
                                <!-- product item end -->

                                <!-- product item begin -->
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-5" src="images/shop/bibit-benih/bibit sawi.png">
                                            </a>
                                            <div class="atr__extra-menu">
                                                <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                            </div>
                                        </div>

                                        <label for="cat_4">🌱 Bibit & Benih</label>

                                        <h3>Bibit Sawi</h3>
                                        <div class="atr__main-price">
                                            Rp20.000
                                        </div>

                                    </div>
                                </div>
                                <!-- product item end -->

                                <!-- product item begin -->
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-5" src="images/shop/bibit-benih/bibit sawi.png">
                                            </a>
                                            <div class="atr__extra-menu">
                                                <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                            </div>
                                        </div>

                                        <label for="cat_4">🌱 Bibit & Benih</label>

                                        <h3>Bibit Sawi</h3>
                                        <div class="atr__main-price">
                                            Rp20.000
                                        </div>

                                    </div>
                                </div>
                                <!-- product item end -->

                                <!-- product item begin -->
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/nutrisi/nutrisi.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/nutrisi/nutrisi.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/nutrisi/nutrisi.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/nutrisi/nutrisi.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/alat/netpot.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/alat/netpot.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/alat/netpot.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/alat/netpot.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/aksesori-pendukung/phmeter.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/aksesori-pendukung/phmeter.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/aksesori-pendukung/phmeter.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/aksesori-pendukung/phmeter.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/paket/paket.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/paket/paket.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/paket/paket.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/paket/paket.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-5" src="images/shop/bibit-benih/bibit sawi.png">
                                            </a>
                                            <div class="atr__extra-menu">
                                                <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                            </div>
                                        </div>

                                        <label for="cat_4">🌱 Bibit & Benih</label>

                                        <h3>Bibit Sawi</h3>
                                        <div class="atr__main-price">
                                            Rp20.000
                                        </div>

                                    </div>
                                </div>
                                <!-- product item end -->

                                <!-- product item begin -->
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-5" src="images/shop/bibit-benih/bibit sawi.png">
                                            </a>
                                            <div class="atr__extra-menu">
                                                <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                            </div>
                                        </div>

                                        <label for="cat_4">🌱 Bibit & Benih</label>

                                        <h3>Bibit Sawi</h3>
                                        <div class="atr__main-price">
                                            Rp20.000
                                        </div>

                                    </div>
                                </div>
                                <!-- product item end -->

                                <!-- product item begin -->
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-5" src="images/shop/bibit-benih/bibit sawi.png">
                                            </a>
                                            <div class="atr__extra-menu">
                                                <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                            </div>
                                        </div>

                                        <label for="cat_4">🌱 Bibit & Benih</label>

                                        <h3>Bibit Sawi</h3>
                                        <div class="atr__main-price">
                                            Rp20.000
                                        </div>

                                    </div>
                                </div>
                                <!-- product item end -->

                                <!-- product item begin -->
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-5" src="images/shop/bibit-benih/bibit sawi.png">
                                            </a>
                                            <div class="atr__extra-menu">
                                                <a class="atr__quick-view" href="/produk/slug"><i class="icon_zoom-in_alt"></i></a>
                                                <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                            </div>
                                        </div>

                                        <label for="cat_4">🌱 Bibit & Benih</label>

                                        <h3>Bibit Sawi</h3>
                                        <div class="atr__main-price">
                                            Rp20.000
                                        </div>

                                    </div>
                                </div>
                                <!-- product item end -->

                                <!-- product item begin -->
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/nutrisi/nutrisi.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/nutrisi/nutrisi.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/nutrisi/nutrisi.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/nutrisi/nutrisi.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/alat/netpot.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/alat/netpot.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/alat/netpot.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/alat/netpot.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/aksesori-pendukung/phmeter.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/aksesori-pendukung/phmeter.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/aksesori-pendukung/phmeter.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/aksesori-pendukung/phmeter.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/paket/paket.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/paket/paket.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/paket/paket.png">
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
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="/produk/slug">
                                                <img class="atr__image-main p-2" src="images/shop/paket/paket.png">
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

                                <div class="col-lg-12 pt-4 text-center">
                                    <div class="d-inline-block">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
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
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/designesia.js') }}"></script>

</body>

</html>