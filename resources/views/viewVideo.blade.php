<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>{{ $title }}</title>
    <link rel="icon" href="/images/icon.webp" type="/image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="HydroSpace" name="description">
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
</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>

        <!-- preloader begin -->
        <div id="de-loader"></div>
        <!-- preloader end -->

        {{-- navbar --}}
        @include('partials.navbarBlack')
        {{-- navbar end --}}

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="relative">
                <div class="container relative z-index-1000">
                    <div class="row">
                        <div class="col-lg-8">
                            <ul class="crumb">
                                <li><a href="/">Beranda</a></li>
                                <li><a href="/edukasi">Edukasi</a></li>
                                <li class="active">Panduan Praktis Menanam Sawi Hidroponik</li>
                            </ul>
                            <h1 class="text-uppercase">Panduan Praktis Menanam Sawi Hidroponik</h1>
                            <p class="col-lg-10 lead">🌱 Pemilihan & Perawatan Tanaman</p>
                        </div>
                    </div>
                </div>
                <img src="/images/logo-wm.webp" class="abs end-0 bottom-0 z-2 w-20" alt="">
            </section>

            <section class="pb-5">
                <div class="container d-flex gap-5 flex-column flex-lg-row justify-content-between">
                    <div class="col-lg-6">
                        <div class="relative overflow-hidden rounded-1">
                            <!-- Thumbnail -->
                            <div id="thumbnail" class="thumbnail relative overflow-hidden rounded-1" onclick="playVideo()">
                                <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                    <div class="player wow scaleIn"><span></span></div>
                                </div>
                                <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                                <img src="/images/thumbnail/tips menanam bayam.jpeg" class="w-100 hover-scale-1-1" alt="">
                            </div>

                            <!-- Video (Hidden by default) -->
                            <video id="video" controls class="video w-100 rounded-1" style="display: none;" poster="/images/thumbnail/tips menanam bayam.jpeg">
                                <source src="/videos/1.mp4" type="video/mp4">
                                Browser Anda tidak mendukung pemutaran video.
                            </video>
                        </div>
                    </div>

                    <div class="col-lg-5 text-dark">
                        <div class="video-about">
                            <div class="me-lg-3">
                                <h5 class="text-uppercase">Tentang Video</h5>
                                <p class="text-dark text-wrap fs-16 lh-1-5 fw-500">
                                    Ingin menanam sawi hidroponik sendiri di rumah? Video ini akan membimbingmu dari pemilihan bibit, perawatan nutrisi, hingga panen dengan hasil yang maksimal. Cocok untuk pemula maupun yang ingin meningkatkan teknik bercocok tanam hidroponik!
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="video-detail">
                            <h5 class="text-uppercase mb-4">Video Details</h5>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="fw-bold">Durasi</div>
                                <div>10 menit</div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="fw-bold">Tingkat Kesulitan</div>
                                <div>Pemula</div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="fw-bold">Gaya Penyampaian</div>
                                <div>Analisis & praktik langsung</div>
                            </div>
                            <div class="w-100 d-flex justify-content-between mb-3">
                                <div class="col-3 fw-bold">Alat yang Dibutuhkan</div>
                                <div class="text-wrap col-9 text-end ps-2">Netpot, Rockwool, Nutrisi AB Mix, pH meter, TDS meter</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="pt-0">
                <div class="container d-flex flex-column">

                    <h3 class="text-uppercase text-center my-5">Objektif Video</h3>

                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="relative h-100 bg-color text-light padding30 rounded-1">
                                <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">01</div>
                                <div>
                                    <img src="/images/logo-icon.webp" class="w-50px mb-3" alt="">
                                    <h4>Memilih Bibit Sawi yang Unggul</h4>
                                    <p class="mb-0 text-wrap">Ketahui ciri-ciri bibit berkualitas tinggi untuk pertumbuhan sawi yang sehat dan hasil panen maksimal.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="relative h-100 bg-color-2 text-light padding30 rounded-1">
                                <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">02</div>
                                <div>
                                    <img src="/images/logo-icon.webp" class="w-50px mb-3" alt="">
                                    <h4>Menyiapkan Sistem Hidroponik dengan Benar</h4>
                                    <p class="mb-0 text-wrap">Panduan memilih dan mengatur sistem hidroponik yang sesuai agar sawi tumbuh optimal tanpa kendala.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="relative h-100 bg-color-2 text-light padding30 rounded-1">
                                <img src="images/logo-icon.webp" class="w-50px mb-3" alt="">
                                <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">03</div>
                                <div>
                                    <img src="/images/logo-icon.webp" class="w-50px mb-3" alt="">
                                    <h4>Pemberian Nutrisi yang Tepat</h4>
                                    <p class="mb-0 text-wrap">Menentukan kadar nutrisi AB Mix, pH, dan PPM yang ideal agar sawi berkembang dengan baik dan tidak mudah layu.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="relative h-100 bg-color text-light padding30 rounded-1">
                                <img src="images/logo-icon.webp" class="w-50px mb-3" alt="">
                                <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">04</div>
                                <div>
                                    <img src="/images/logo-icon.webp" class="w-50px mb-3" alt="">
                                    <h4>Teknik Panen dan Penyimpanan Sawi</h4>
                                    <p class="mb-0 text-wrap">Cara memanen sawi hidroponik dengan benar agar tetap segar lebih lama dan siap dikonsumsi kapan saja.</p>
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

    {{-- overlay --}}
    @include('partials.overlay')
    {{-- overlay end --}}


    <!-- Javascript Files
    ================================================== -->
    <script src="/js/plugins.js"></script>
    <script src="/js/designesia.js"></script>

    <script>
        function playVideo() {
            document.getElementById("thumbnail").style.display = "none"; // Sembunyikan thumbnail
            let video = document.getElementById("video");
            video.style.display = "block"; // Tampilkan video
            video.play(); // Mulai video secara otomatis
        }
    </script>

</body>

</html>