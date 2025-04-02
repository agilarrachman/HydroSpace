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

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <style>
        .header-light.transparent {
            background-color: #F8FBF3 !important;
        }

        .de-number button {
            background-color: #354E33;
            border: none;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 100px;
            cursor: pointer;
        }

        .de-number button:hover {
            background-color: rgb(33, 47, 31);
        }

        .notif-box {
            position: fixed;
            bottom: 50px;
            right: 50px;
            background: #E1EBE2;
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            font-size: 14px;
            z-index: 1000;
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
            color: #354e33;
            display: flex;
        }

        .notif-box.active {
            opacity: 1;
            transform: translateY(0);
            display: flex;
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
            @if (session('success'))
            <div id="notif-success" class="notif-box">
                <img src="/images/logo-icon-color.webp" alt="" style="width: 30px; object-fit: contain;">
                <p class="mb-0 ms-2">{{ session('success') }}</p>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    let notif = document.getElementById("notif-success");

                    // Tampilkan notifikasi
                    notif.classList.add("active");

                    // Hilangkan notifikasi setelah 1.5 detik
                    setTimeout(function() {
                        notif.classList.remove("active");
                    }, 2500);
                });
            </script>
            @endif

            <div id="top"></div>

            <section class="bg-light" style="padding-bottom: 10px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="crumb m-0">
                                <li><a href="/">Beranda</a></li>
                                <li><a href="/produk">Produk</a></li>
                                <li class="active">{{ $product->name }}</li>
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
                                @for ($i = 1; $i <= 5; $i++)
                                    @php
                                    $picture='picture' . $i;
                                    @endphp
                                    @if (!empty($product->$picture))
                                    <div class="item {{ $i === 1 ? 'active' : '' }}" style="width: 650px; height: 650px;">
                                        <img src="{{ asset('storage/' . $product->$picture) }}" alt="Product Image {{ $i }}" class="rounded-2 w-100" style="object-fit: cover; height: 100%;">
                                    </div>
                                    @endif
                                    @endfor
                                    {{-- <div class="item" style="padding: 40px;"><img src="/images/shop/bibit-benih/bibit-sawi.png" class="w-100 p-5" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit-sawi2.png" class="w-100" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit-sawi3.jpg" class="w-100" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit-sawi4.webp" class="w-100" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit-sawi5.jpg" class="w-100" alt=""></div> --}}
                            </div>

                            <div id="sync2" class="owl-carousel owl-theme">
                                @for ($i = 1; $i <= 5; $i++)
                                    @php
                                    $picture='picture' . $i;
                                    @endphp
                                    @if (!empty($product->$picture))
                                    <div class="item {{ $i === 1 ? 'active' : '' }}" style="width: 120px; height: 120px;">
                                        <img src="{{ asset('storage/' . $product->$picture) }}" alt="Product Image {{ $i }}" class="rounded-2 w-100 h-100" style="object-fit: cover;">
                                    </div>
                                    @endif
                                    @endfor
                                    {{-- <div class="item"><img src="/images/shop/bibit-benih/bibit-sawi.png" class="w-100 p-4" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit-sawi2.png" class="w-100" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit-sawi3.jpg" class="w-100" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit-sawi4.webp" class="w-100" alt=""></div>
                                <div class="item"><img src="/images/shop/bibit-benih/bibit-sawi5.jpg" class="w-100" alt=""></div> --}}
                            </div>

                        </div>

                        <div class="col-md-6">
                            <label for="cat_4">{{ $product->category->name }}</label>
                            <h2 class="fs-40">{{ $product->name }}</h2>
                            <p class="col-lg-10">{!! $product->description !!}</p>
                            <h3 class="fs-32 mb-0 me-2">Rp {{ number_format($product->price, 0, ',', '.') }}</h3>

                            <div class="group d-flex gap-2 mt-2">
                                <h5 class="mb-3">Tersisa</h5>
                                <p>{{ $product->stock }}</p>
                            </div>

                            <div class="group radio__button mb-4">
                                <h5 class="mb-3">Quantity</h5>
                                <div class="de-number">
                                    <button type="button" id="decrease-qty">-</button>
                                    <input type="number" id="quantity" class="no-border no-bg" value="1" min="1" max="{{ $product->stock }}" disabled>
                                    <button type="button" id="increase-qty">+</button>
                                </div>
                            </div>

                            <form id="addToCartForm" action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="status" value="Keranjang">
                                <input type="hidden" name="quantity" id="hidden-quantity" value="1">
                                <button type="submit" class="btn-main">Tambah ke Keranjang</button>
                            </form>
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



    <script>
        document.getElementById("increase-qty").addEventListener("click", function() {
            let quantityInput = document.getElementById("quantity");
            if (parseInt(quantityInput.value) < parseInt(quantityInput.max)) {
                quantityInput.value = parseInt(quantityInput.value) + 1;
                document.getElementById("hidden-quantity").value = quantityInput.value; // Update hidden quantity
            }
        });

        document.getElementById("decrease-qty").addEventListener("click", function() {
            let quantityInput = document.getElementById("quantity");
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
                document.getElementById("hidden-quantity").value = quantityInput.value; // Update hidden quantity
            }
        });

        $(document).ready(function() {
            let message = $("#notif-container").data("message"); // Ambil pesan dari data-attribute
            if (message) {
                de_atc(message);
                $("#de_notif").addClass("active");
                setTimeout(function() {
                    $("#de_notif").removeClass("active");
                }, 1500);
            }
        });
    </script>

</body>

</html>