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

            <section class="pt-100" style="margin-bottom: 50px !important;">
                <div class="container">
                    <div class="row gy-4 gx-5">
                        <div class="col-md-6">
                            <div id="sync1" class="owl-carousel owl-theme">
                                @for ($i = 1; $i <= 5; $i++)
                                    @php
                                    $picture='picture' . $i;
                                    @endphp
                                    @if (!empty($product->$picture))
                                        <div class="item {{ $i === 1 ? 'active' : '' }}" style="width: 650px; height: 650px; background-color: #5b895866 !important;">
                                            <img src="{{ asset('storage/' . $product->$picture) }}" alt="Product Image {{ $i }}" class="rounded-2 w-100" style="object-fit: contain; width: 100%; height: 100%;">
                                        </div>
                                    @endif
                                @endfor
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

            @if($recommendedProducts->isNotEmpty())
            <section style="padding-top: 0px !important; margin-top: -50px !important;">
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
                                    @foreach($recommendedProducts as $item)
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <a href="/produk/{{ $item->slug }}">
                                                    <img class="atr__image-main p-2" src="{{ asset('storage/' . $item->picture1) }}" alt="Product Image" style="width: 100%; height: 100%; object-fit: cover;">
                                                </a>
                                                <div class="atr__extra-menu">
                                                    <a class="atr__quick-view" href="/produk/{{ $item->slug }}"><i class="icon_zoom-in_alt"></i></a>
                                                    <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                                </div>
                                            </div>

                                            <label for="cat_4">{{ $item->id }} - {{ $item->category->name }}</label>

                                            <h3>{{ $item->name }}</h3>
                                            <div class="atr__main-price mt-3">
                                                Rp{{ number_format($item->price, 0, ',', '.') }}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- product item end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif

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
