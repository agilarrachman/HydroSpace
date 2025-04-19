<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>{{ $title }}</title>
    <link rel="icon" href="images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="HydroSpace" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/swiper.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .chatbot .newChatButton:hover {
            background-color: #FFF !important;
            color: #354e33 !important;
        }
    </style>
</head>

<body class="dark-scheme">
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>

        <!-- preloader begin -->
        <div id="de-loader"></div>
        <!-- preloader end -->

        {{-- navbar --}}
        @include('partials.navbar')
        {{-- navbar end --}}

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="section-intro" class="text-light no-top no-bottom relative overflow-hidden z-1000">
                <div class="h-30 de-gradient-edge-top op-5 dark z-2"></div>
                <img src="images/logo-wm.webp" class="abs end-0 bottom-0 z-2 w-20" alt="">
                <div class="v-center relative">

                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="swiper-inner" data-bgimage="url(images/slider/1.jpg)" style="background-position: bottom !important; background-size: cover;">
                                    <div class="sw-caption z-1000">
                                        <div class="container">
                                            <div class="row g-4 align-items-center">

                                                <div class="spacer-double"></div>

                                                <div class="col-lg-6 offset-lg-6">
                                                    <div class="spacer-single"></div>
                                                    <div class="sw-text-wrapper">
                                                        <div class="subtitle">Solusi Berkebun Modern</div>
                                                        <h2 class="slider-title mb-4">Nikmati kemudahan bercocok tanam di rumah tanpa butuh lahan luas!</h2>
                                                        <a class="btn-main mb10 mb-3" href="projects.html">Belanja Sekarang</a>
                                                    </div>
                                                </div>

                                                <div class="spacer-single"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="sw-overlay op-3"></div>
                                </div>
                            </div>
                            <!-- Slides -->

                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="swiper-inner" data-bgimage="url(images/slider/2.jpg)">
                                    <div class="sw-caption z-1000">
                                        <div class="container">
                                            <div class="row g-4 align-items-center">

                                                <div class="spacer-double"></div>

                                                <div class="col-lg-6">
                                                    <div class="spacer-single"></div>
                                                    <div class="sw-text-wrapper">
                                                        <div class="subtitle">Panduan Hidroponik untuk Pemula</div>
                                                        <h2 class="slider-title mb-4">Tonton video edukasi hidroponik dan mulai bercocok tanam dengan mudah!</h2>
                                                        <a class="btn-main mb10 mb-3" href="projects.html">Tonton Sekarang</a>
                                                    </div>
                                                </div>

                                                <div class="spacer-single"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="sw-overlay op-3"></div>
                                </div>
                            </div>
                            <!-- Slides -->
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>
                </div>
            </section>



            <section>
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="relative">
                                <div class="rounded-1 bg-body w-90 overflow-hidden wow zoomIn">
                                    <img src="images/misc/1.webp" class="w-100 wow scaleIn" alt="">
                                </div>
                                <div class="rounded-1 bg-body w-50 abs mb-min-50 end-0 bottom-0 z-2 overflow-hidden shadow-soft wow zoomIn" data-wow-delay=".2s">
                                    <img src="images/misc/2.webp" class="w-100 wow scaleIn" data-wow-delay=".2s" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ps-lg-3">
                                <div class="subtitle id-color wow fadeInUp" data-wow-delay=".2s">Welcome to HydroSpace</div>
                                <h2 class="text-uppercase wow fadeInUp" data-wow-delay=".4s">Berkebun Modern <span class="id-color-2">dengan Hidroponik</span></h2>
                                <p class="wow fadeInUp" data-wow-delay=".6s">HydroSpace hadir untuk mengedukasi dan memudahkan siapa saja dalam memulai berkebun modern dengan hidroponik. Dengan informasi yang lengkap dan akses mudah ke berbagai kebutuhan, kami membantu pemula agar lebih percaya diri dalam bercocok tanam secara efisien dan praktis. Temukan solusi terbaik untuk perjalanan hidroponikmu, dari pembelajaran hingga penerapan nyata.</p>
                                <a class="btn-main btn-line wow fadeInUp" href="services.html" data-wow-delay=".6s">Layanan Kami</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="p-0">
                <div class="container-fluid">
                    <div class="row g-0">
                        <div class="col-lg-4 col-sm-6">
                            <div class="hover overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".6s">
                                <img src="images/services/1.webp" class="hover-scale-1-1 w-100" alt="">
                                <img src="images/logo-icon.webp" class="abs abs-centered w-20 z-2" alt="">
                                <div class="abs bg-color op-5 z-1 top-0 w-100 h-100 hover-op-0"></div>
                            </div>
                            <div class="p-lg-5 p-4 bg-dark-2 wow fadeInRight">
                                <h4 class="fs-24 mb-3">Belanja Mudah, Berkebun Praktis</h4>
                                <p>Dapatkan semua yang kamu butuhkan untuk memulai hidroponik! Pilih alat, bahan, dan bibit berkualitas dengan mudah dan mulai bercocok tanam tanpa repot.</p>
                                <a class="btn-main btn-line" href="services.html" data-wow-delay=".6s">Belanja Sekarang</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6" id="mid-service">
                            <div class="hover overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".6s">
                                <img src="images/services/2.webp" class="hover-scale-1-1 w-100" alt="" style="height: 570px;">
                                <img src="images/logo-icon.webp" class="abs abs-centered w-20 z-2" alt="">
                                <div class="abs bg-color op-5 z-1 top-0 w-100 h-100 hover-op-0"></div>
                            </div>

                            <div class="p-lg-5 p-4 bg-dark-2 wow fadeInRight">
                                <h4 class="fs-24 mb-3">Belajar Hidroponik, Kapan Saja</h4>
                                <p>Tingkatkan pengetahuanmu dengan panduan lengkap dan mudah dipahami! Tonton video edukasi dan mulai hidroponik dengan langkah yang benar.</p>
                                <a class="btn-main btn-line" href="services.html" data-wow-delay=".6s">Tonton Video</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="hover overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".6s">
                                <img src="images/services/3.webp" class="hover-scale-1-1 w-100" alt="" style="height: 570px;">
                                <img src="images/logo-icon.webp" class="abs abs-centered w-20 z-2" alt="">
                                <div class="abs bg-color op-5 z-1 top-0 w-100 h-100 hover-op-0"></div>
                            </div>
                            <div class="p-lg-5 p-4 bg-dark-2 wow fadeInRight">
                                <h4 class="fs-24 mb-3">Teman Berkebun Cerdas</h4>
                                <p>Punya pertanyaan tentang hidroponik? HydroBot siap membantumu! Dapatkan jawaban cepat, tips praktis, dan solusi tepat untuk perjalanan hidroponikmu.</p>
                                <a class="btn-main btn-line" href="services.html" data-wow-delay=".6s">Coba Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="text-light relative">
                <div class="container relative z-1">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle wow fadeInUp">Kenapa Memilih HydroSpace?</div>
                            <h2 class="text-uppercase mb-4 wow fadeInUp" data-wow-delay=".2s">Komitmen Kami <br><span class="id-color-2">Pertanian Modern</span></h2>
                            <p class="wow fadeInUp">Komitmen kami untuk menghadirkan pengalaman bercocok tanam hidroponik yang lebih mudah, efisien, dan dapat diakses oleh siapa saja. Kami percaya bahwa inovasi dan edukasi adalah kunci untuk menjadikan hidroponik solusi pertanian modern yang berkelanjutan.</p>
                        </div>

                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-md-6 wow fadeInUp">
                                    <div class="relative h-100 bg-white text-dark padding30 rounded-1">
                                        <img src="images/logo-icon-color.webp" class="w-50px mb-3" alt="">
                                        <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">01</div>
                                        <div>
                                            <h4 class="text-dark fs-24 lh-1-3">Inovatif & Berorientasi<br>Masa Depan</h4>
                                            <p class="mb-0">Kami selalu mengadopsi teknologi terbaru dan metode terbaik untuk membantu setiap orang memulai hidroponik dengan cara yang lebih modern dan efisien.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 wow fadeInUp">
                                    <div class="relative h-100 bg-dark-2 text-light padding30 rounded-1">
                                        <img src="images/logo-icon.webp" class="w-50px mb-3" alt="">
                                        <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">02</div>
                                        <div>
                                            <h4 class="fs-24 lh-1-3">Ramah Lingkungan<br>& Berkelanjutan</h4>
                                            <p class="mb-0">Dengan pendekatan hidroponik, kami mendorong penggunaan air yang lebih hemat, efisiensi lahan, dan praktik pertanian yang lebih hijau demi masa depan yang lebih baik.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 wow fadeInUp">
                                    <div class="relative h-100 bg-dark-2 text-light padding30 rounded-1">
                                        <img src="images/logo-icon.webp" class="w-50px mb-3" alt="">
                                        <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">03</div>
                                        <div>
                                            <h4 class="fs-24 lh-1-3">Cocok untuk<br>Pemula</h4>
                                            <p class="mb-0">Dengan panduan yang mudah dipahami dan sistem yang dirancang intuitif, siapa pun bisa memulai hidroponik tanpa perlu pengalaman sebelumnya.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 wow fadeInUp">
                                    <div class="relative h-100 bg-color-2 text-light padding30 rounded-1">
                                        <img src="images/logo-icon.webp" class="w-50px mb-3" alt="">
                                        <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">04</div>
                                        <div>
                                            <h4 class="fs-24 lh-1-3">Solusi Tepat untuk<br>Setiap Kebutuhan</h4>
                                            <p class="mb-0">Baik untuk hobi, bisnis, atau edukasi, HydroSpace memberikan solusi yang sesuai dengan kebutuhan masing-masing, membantu pengguna mencapai hasil terbaik.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Chatbot Section Start -->
            <div class="chatbot section" id="ai" style="margin-bottom: 140px; z-index: 999999;">
                <div class="container">
                    <div class="d-flex flex-column flex-md-row gap-2 gap-lg-5 justify-content-between">
                        <div class="col-md-5 mb-3 mb-lg-0">
                            <img src="/images/logo-white.webp" alt="HydroSpace Logo" style="width: 200px;" class="mb-3">
                            <h2 class="mb-2 text-wrap">Konsultasi Chatbot AI <br><span class="id-color-2">seputar Hidroponik</span></h2>
                            <p class="text-wrap">HydroBot adalah asisten virtual cerdas yang siap membantumu menjawab pertanyaan dan mengatasi kesulitan seputar hidroponik. Dari pemilihan sistem tanam, perawatan tanaman, hingga solusi saat menghadapi kendala, HydroBot memberikan panduan cepat dan akurat kapan saja. Dengan teknologi AI, chatbot ini dirancang untuk memudahkan perjalanan hidroponikmu, baik sebagai pemula maupun yang ingin mengoptimalkan hasil panen.</p>
                            <form action="/hydrobot/clear-history" method="POST">
                                @csrf
                                <button type="submit" class="newChatButton px-3 py-2" style="color: white;background-color: transparent; border: 1px solid #FFF; border-radius: 50px;" onclick="return confirm('Apakah kamu yakin akan membuat percakapan baru? HydroBot akan melupakan semua riwayat percakapan Kamu.')">Percakapan Baru</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form id="ask">
                                <!-- Chat Window -->
                                <div class="chat-window d-flex flex-column" id="chat-window">
                                </div>
                                <!-- Chat Input -->
                                <div class="chat-input my-0">
                                    <input id="question" name="question" type="text" placeholder="Ketik pertanyaan disini.." required />
                                    <button type="submit">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24.0431 13.886C24.5682 13.6234 24.8999 13.0867 24.8999 12.4996C24.8999 11.9125 24.5682 11.3758 24.0431 11.1133L2.34309 0.263263C1.7933 -0.0116297 1.13302 0.0643301 0.66002 0.456886C0.187018 0.849442 -0.00932183 1.48441 0.159543 2.07544L2.37382 9.82543C2.56394 10.4908 3.17214 10.9496 3.86418 10.9496L10.9499 10.9496C11.8059 10.9496 12.4999 11.6436 12.4999 12.4996C12.4999 13.3557 11.8059 14.0496 10.9499 14.0496L3.86419 14.0496C3.17215 14.0496 2.56395 14.5084 2.37383 15.1738L0.159542 22.9238C-0.0093228 23.5148 0.187017 24.1498 0.660019 24.5424C1.13302 24.9349 1.7933 25.0109 2.34308 24.736L24.0431 13.886Z" fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chatbot Section End -->

            <section class="jarallax">
                <img src="images/background/2.webp" class="jarallax-img" alt="">
                <div class="container relative z-2">
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="owl-4-cols owl-carousel owl-theme wow fadeInUp">
                                <div class="item p-2 fs-18">
                                    <i class="icofont-quote-left text-white fs-32 mb-4"></i>
                                    <p>"Saya selalu ingin mencoba hidroponik, tapi bingung harus mulai dari mana. Berkat HydroSpace, semuanya jadi lebih mudah! Panduannya jelas, sekarang saya bisa menanam sayuran sendiri di rumah."
                                    </p>

                                    <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <div class="de-flex align-items-center justify-content-start">
                                        <img class="z-2 w-60px circle" alt="" src="images/testimonial/1.webp">
                                        <div class="d-inline ms-3 fs-15">
                                            <h5 class="fs-15 mb-0">Andi Pratama</h5>
                                            <span>Customer</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="item p-2 fs-18">
                                    <i class="icofont-quote-left text-white fs-32 mb-4"></i>
                                    <p>"Dulu saya pikir butuh lahan luas untuk berkebun, ternyata tidak! HydroSpace membantu saya memulai hidroponik di rumah dengan cara yang praktis dan ramah lingkungan. Terima kasih HydroSpace!"
                                    </p>

                                    <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <div class="de-flex align-items-center justify-content-start">
                                        <img class="z-2 w-60px circle" alt="" src="images/testimonial/2.webp">
                                        <div class="d-inline ms-3 fs-15">
                                            <h5 class="fs-15 mb-0">Siti Rahmawati</h5>
                                            <span>Customer</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="item p-2 fs-18">
                                    <i class="icofont-quote-left text-white fs-32 mb-4"></i>
                                    <p>"HydroSpace tidak hanya membantu saya memahami hidroponik, tapi juga membuka peluang usaha baru. Sekarang saya bisa panen sayuran segar sendiri dan menjualnya ke pelanggan!"
                                    </p>

                                    <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <div class="de-flex align-items-center justify-content-start">
                                        <img class="z-2 w-60px circle" alt="" src="images/testimonial/3.webp">
                                        <div class="d-inline ms-3 fs-15">
                                            <h5 class="fs-15 mb-0">Rudi Santoso</h5>
                                            <span>Customer</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="item p-2 fs-18">
                                    <i class="icofont-quote-left text-white fs-32 mb-4"></i>
                                    <p>"Belajar hidroponik di kampus saja tidak cukup. Dengan HydroSpace, saya bisa mendapatkan edukasi tambahan yang aplikatif dan langsung dipraktikkan di rumah. Sangat membantu!"
                                    </p>

                                    <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <div class="de-flex align-items-center justify-content-start">
                                        <img class="z-2 w-60px circle" alt="" src="images/testimonial/4.webp">
                                        <div class="d-inline ms-3 fs-15">
                                            <h5 class="fs-15 mb-0">Lestari Ayu</h5>
                                            <span>Customer</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="item p-2 fs-18">
                                    <i class="icofont-quote-left text-white fs-32 mb-4"></i>
                                    <p>"Dengan jadwal kerja yang padat, saya pikir berkebun akan sulit. Tapi berkat HydroSpace, saya bisa menanam sayuran hidroponik sendiri di rumah dengan mudah dan efisien. Hasilnya segar dan lebih sehat untuk keluarga!"
                                    </p>

                                    <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <div class="de-flex align-items-center justify-content-start">
                                        <img class="z-2 w-60px circle" alt="" src="images/testimonial/5.webp">
                                        <div class="d-inline ms-3 fs-15">
                                            <h5 class="fs-15 mb-0">Budi Setiawan</h5>
                                            <span>Customer</span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="de-overlay"></div>
            </section>

            <section class="recommendation bg-dark-2 px-4">
                <div class="container bg-dark-2" style="margin-bottom: 100px;">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="subtitle wow fadeInUp">E-commerce</div>
                            <h2 class="text-uppercase mb-4 wow fadeInUp" data-wow-delay=".2s">Best <span class="id-color-2">Sellers</span></h2>
                        </div>
                    </div>
                    <div class="row g-4 mb-4">
                        <div class="col-lg-12">
                            <div class="owl-custom-nav menu-">
                                <div id="best-seller-carousel" class="owl-carousel owl-4-cols d-flex flex-column">
                                    <!-- product item begin -->
                                    @foreach ($bestSellers as $item)
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <div class="atr__promo">
                                                    {{ $loop->iteration }}
                                                </div>
                                                <a href="produk/{{ $item->slug }}">
                                                    <img class="atr__image-main" src="{{ asset('storage/' . $item->picture1) }}" style="border-radius: 12px;">
                                                    <img class="atr__image-hover" src="{{ asset('storage/' . $item->picture1) }}" style="border-radius: 12px;">>
                                                </a>
                                                <div class="atr__extra-menu">
                                                    <a class="atr__quick-view" href="produk/{{ $item->slug }}"><i class="icon_zoom-in_alt"></i></a>
                                                    <div class="atr__add-cart"><i class="icon_cart_alt"></i></div>
                                                </div>
                                            </div>
                                            <p class="m-0">{{ $item->category->name }}</p>
                                            <h3 class="m-0">{{ $item->name }}</h3>
                                            <div class="atr__main-price">
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
                    <div class="spacer-20"></div>

                    <div class="col-lg-12 text-center">
                        <a class="btn-main wow fadeInUp" href="/produk">Lihat Semua</a>
                    </div>

                </div>

                <hr style="color: white; height:3px;">

                <div class="container-fluid" style="margin-top: 100px;">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="subtitle wow fadeInUp">Video Edukasi</div>
                            <h2 class="text-uppercase mb-4 wow fadeInUp" data-wow-delay=".2s">Most <span class="id-color-2">Viewed</span></h2>
                        </div>
                    </div>

                    <div class="row g-4">

                        @foreach ($mostViewedVideos as $mostViewedVideo)
                        <div class="col-lg-6">
                            <div class="hover rounded-1 overflow-hidden relative text-light wow fadeInRight" data-wow-delay=".3s">
                                <a href="/edukasi/{{ $mostViewedVideo->slug }}" class="abs w-100 h-100 z-5"></a>
                                <img src="{{ asset('../storage/' . $mostViewedVideo->thumbnail) }}" class="hover-scale-1-1 w-100" alt="">
                                <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="mb-3">{{ $mostViewedVideo->description }}</div>
                                    <b>Klik untuk menonton!</b>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                <div class="abs z-2 bottom-0 w-100 hover-op-0">
                                    <div class="bg-blur d-flex m-4 p-3 px-4 rounded-1 justify-content-between align-items-center">
                                        <div class="col-11 d-flex flex-column flex-lg-row">
                                            <div class="me-5">
                                                {{ $mostViewedVideo->videoCategory->name }}
                                                <h5>{{ $mostViewedVideo->title }}</h5>
                                            </div>
                                        </div>

                                        <div class="col-1 w-40px">
                                            <img src="images/misc/right-arrow.webp" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
                            </div>
                        </div>
                        @endforeach

                        <div class="spacer-20"></div>

                        <div class="col-lg-12 text-center">
                            <a class="btn-main wow fadeInUp" href="projects.html">Lihat Semua</a>
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

    {{-- overlay --}}
    @include('partials.overlay')
    {{-- overlay end --}}


    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/custom-marquee.js"></script>
    <script src="js/custom-swiper-2.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
    <script src="js/gemini.js"></script>

    <script type="text/javascript">
        // Pastikan script ini dijalankan setelah halaman dimuat
        window.addEventListener('load', function() {
            // Periksa jika URL mengandung hash untuk scroll
            if (window.location.hash === '#chatbot') {
                const targetElement = document.getElementById('chatbot');
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });

        $(document).ready(function() {
            $('#chat-window').html(`
            <div class="chat-bubble bot text-wrap lh-base">
                <h5 style="font-weight: 800;">HydroBot</h5>
                Halo, HydroMates! 🌱🤖 Aku HydroBot, asisten virtualmu di dunia hidroponik. Ada yang bisa aku bantu hari ini? 😊
            </div>
        `);
        });

        // Handle form submission
        $('#ask').submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            // Get the question input
            let question = $('#question').val();
            if (question.trim() === '') return; // Avoid empty submission

            // Display user's message in chat window
            addMessageToChatWindow(question, 'user');

            // Clear input field
            $('#question').val('');

            // Show thinking message from bot
            addMessageToChatWindow('HydroBot sedang berpikir...', 'bot');

            // Send question to server using AJAX
            $.ajax({
                url: '/question', // Endpoint for your chatbot
                type: 'POST',
                data: {
                    question: question,
                    _token: $('meta[name="csrf-token"]').attr('content') // Include CSRF token
                },
                success: function(data) {
                    // Update the last bot message with the actual response
                    const lastBotMessage = $('#chat-window .bot').last();
                    lastBotMessage.remove(); // Remove "Hydrobot sedang berpikir..." message

                    // Display bot's response in chat window
                    addMessageToChatWindow(data.answer, 'bot');
                },
                error: function(jqXHR) {
                    const lastBotMessage = $('#chat-window .bot').last();
                    lastBotMessage.remove(); // Remove "Hydrobot sedang berpikir..." message

                    let errorMessage = "Terjadi kesalahan, silakan coba lagi.";
                    if (jqXHR.status === 422) {
                        // Handle validation errors
                        errorMessage = "Input tidak valid, silakan coba lagi.";
                    }
                    addMessageToChatWindow(errorMessage, 'bot');
                }
            });
        });

        function addMessageToChatWindow(message, sender) {
            const chatWindow = $('#chat-window');

            // Format message: replace **text** with <strong>text</strong> and \n with <br>
            const formattedMessage = message
                .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
                .replace(/^(\*|-|\+) (.*?)(?:\n|$)/gm, '<li>$2</li>') // Mendukung *, -, atau + sebagai penanda list
                .replace(/\n/g, '<br>')
                .replace(/^(<li>.*?<\/li>(?:\n|$))+/gm, '<ul>$&</ul>');

            const messageElement = `
            <div class="chat-bubble ${sender} text-wrap lh-base">
                <h5 style="font-weight: 800;">${sender === 'user' ? 'Anda' : 'HydroBot'}</h5>
                ${formattedMessage}
            </div>`;

            chatWindow.append(messageElement);
            chatWindow.scrollTop(chatWindow[0].scrollHeight); // Auto-scroll to the bottom
        }
    </script>
</body>

</html>