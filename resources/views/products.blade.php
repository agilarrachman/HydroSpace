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

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
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

        <div class="no-bottom no-top" id="content">
            <!-- content begin -->
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
                                    @foreach ($products as $product)
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <div class="atr__promo">
                                                    Sale
                                                </div>
                                                <a href="/produk/{{ $product->slug }}">
                                                    <img class="atr__image-main p-5 object-fit-cover w-100" src="{{ asset('storage/' . $product->picture1) }}" alt="{{ $product->picture1 }}">
                                                </a>
                                                <div class="atr__extra-menu">
                                                    <a class="atr__quick-view" href="/produk/{{ $product->slug }}"><i class="icon_zoom-in_alt"></i></a>
                                                    <form id="addToCartForm-{{ $product->id }}" action="{{ route('cart.add') }}" method="POST" style="display: none;">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <input type="hidden" name="status" value="Keranjang">
                                                        <input type="hidden" name="quantity" value="1">
                                                    </form>

                                                    <div class="atr__add-carts" onclick="submitCartForm({{ $product->id }})">
                                                        <i class="icon_cart_alt"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <label for="cat_4">{{ $product->category->name }}</label>

                                            <h3>{{ $product->name }}</h3>
                                            <div class="atr__main-price">
                                                Rp{{ number_format($product->price, 0, ',', '.') }}
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

            <section id="products" style="padding-top: 0;">
                <div class="container">
                    <h2 id="katalog-produk" class="text-uppercase text-center mb-5 wow fadeInUp" data-wow-delay=".2s">Katalog {{ $currentCategory ? $currentCategory->name : 'Produk' }}</h2>

                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="item_filter_group">
                                <h4>Cari Produk</h4>
                                <div class="serach-bar d-flex gap-2">
                                    {{-- <input type="text" name="Name" id="name" class="de-quick-search py-2 w-100 rounded-20" placeholder="Cari...">
                                    <button class="btn btn-secondary px-3 rounded-pill" type="submit"><i class="bi bi-search"></i></button> --}}

                                    <form action="/produk#katalog-produk" class="d-flex gap-2">
                                        <input type="text" class="de-quick-search py-2 w-100 rounded-20" placeholder="Cari produk" name="search" value="{{ request('search') }}" required>
                                        <button class="btn btn-secondary px-3 rounded-pill" type="submit"><i class="bi bi-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="item_filter_group">
                                <h4>Kategori</h4>
                                <div class="de_form">
                                    @foreach ($categories as $category)
                                    <div class="de_checkbox">
                                        <input id="cat_{{ $category->id }}" name="category" type="checkbox" value="{{ $category->slug }}"
                                            onchange="if(this.checked) { window.location.href = '/produk?category=' + this.value + '#katalog-produk'; } else { window.location.href = '/produk'; }"
                                            {{ request('category') == $category->slug ? 'checked' : '' }}>
                                        <label for="cat_{{ $category->id }}">{{ $category->emoji }} {{ $category->name }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="row g-4">
                                <!-- product item begin -->
                                @foreach ($products as $product)
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="de__pcard text-center">
                                        <div class="atr__images">
                                            <div class="atr__promo">
                                                Sale
                                            </div>
                                            <a href="produk/{{ $product->slug }}">
                                                <img class="atr__image-main p-5" src="{{ asset('storage/' . $product->picture1) }}" alt="{{ $product->picture1 }}">
                                            </a>
                                            <div class="atr__extra-menu">
                                                <a class="atr__quick-view" href="produk/{{ $product->slug }}"><i class="icon_zoom-in_alt"></i></a>
                                                <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                            </div>
                                        </div>

                                        <label for="cat_4">{{ $product->category->name }}</label>

                                        <h3>{{ $product->name }}</h3>
                                        <div class="atr__main-price">
                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                                <!-- product item end -->

                                <div class="d-flex justify-content-center align-items-center mt-4 pt-4">
                                    {{ $products->links() }}
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

    <script>
        function submitCartForm(productId) {
            document.getElementById(`addToCartForm-${productId}`).submit();
        }
    </script>

</body>

</html>