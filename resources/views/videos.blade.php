<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Gardyn — Garden and Landscape Website Template</title>
    <link rel="icon" href="images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Gardyn — Garden and Landscape Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">

    <style>
        #mainmenu li a.active {
            color: white !important;
            font-weight: 700;
            border-bottom: 2px solid white;
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
        @include('partials.navbar')
        {{-- navbar end --}}

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="relative jarallax text-light">
                <img src="images/background/2.jpg" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="crumb">
                                <li><a href="/">Beranda</a></li>
                                <li class="active">Edukasi</li>
                            </ul>
                            <h1 class="text-uppercase">Video Edukasi Hidroponik</h1>
                            <p class="col-lg-10 lead">Temukan berbagai video edukatif yang informatif dan menarik seputar hidroponik untuk memperluas wawasan Anda!</p>
                        </div>
                    </div>
                </div>
                <img src="images/logo-wm.webp" class="abs end-0 bottom-0 z-2 w-20" alt="">
                <div class="de-gradient-edge-top dark"></div>
                <div class="de-overlay"></div>
            </section>

            <section class="p-4">
                <div class="container-fluid">
                    <div class="row g-4">

                        <div class="col-lg-6" id="video">
                            <div class="hover rounded-1 overflow-hidden relative text-light wow fadeInRight" data-wow-delay=".3s">
                                <a href="project-single.html" class="abs w-100 h-100 z-5"></a>
                                <img src="images/thumbnail/tips menanam bayam.jpeg" class="hover-scale-1-1 w-100" alt="">
                                <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="mb-3">Ingin menanam sawi hidroponik sendiri di rumah? Video ini akan membimbingmu dari pemilihan bibit, perawatan nutrisi, hingga panen dengan hasil yang maksimal. Cocok untuk pemula maupun yang ingin meningkatkan teknik bercocok tanam hidroponik!</div>
                                    <b>Klik untuk menonton!</b>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                <div class="abs z-2 bottom-0 w-100 hover-op-0">
                                    <div class="bg-blur d-flex m-4 p-3 px-4 rounded-1 justify-content-between align-items-center">
                                        <div class="col-11 d-flex flex-column flex-lg-row">
                                            <div class="me-5">
                                                Kategori Penanaman
                                                <h5>Panduan Praktis Menanam Sawi Hidroponik</h5>
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

                        <div class="col-lg-6" id="video">
                            <div class="hover rounded-1 overflow-hidden relative text-light wow fadeInRight" data-wow-delay=".6s">
                                <a href="project-single.html" class="abs w-100 h-100 z-5"></a>
                                <img src="images/thumbnail/instalasi hidroponik.jpeg" class="hover-scale-1-1 w-100" alt="">
                                <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="mb-3">Pelajari cara memasang sistem hidroponik NFT (Nutrient Film Technique) dengan benar! Video ini membahas alat dan bahan yang dibutuhkan, cara merakit pipa, memasang pompa, hingga memastikan aliran nutrisi berjalan optimal. Cocok untuk pemula yang ingin memulai hidroponik modern dengan hasil maksimal!</div>
                                    <b>Klik untuk menonton!</b>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                <div class="abs z-2 bottom-0 w-100 hover-op-0">
                                    <div class="bg-blur d-flex m-4 p-3 px-4 rounded-1 justify-content-between align-items-center">
                                        <div class="col-11 d-flex flex-column flex-lg-row">
                                            <div class="me-5">
                                                Judul
                                                <h5>Panduan Instalasi Sistem NFT Hidroponik</h5>
                                            </div>
                                            <div>
                                                Kategori
                                                <h5>Instalasi</h5>
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

                        <div class="col-lg-6" id="video">
                            <div class="hover rounded-1 overflow-hidden relative text-light wow fadeInRight" data-wow-delay=".3s">
                                <a href="project-single.html" class="abs w-100 h-100 z-5"></a>
                                <img src="images/thumbnail/tips menanam bayam.jpeg" class="hover-scale-1-1 w-100" alt="">
                                <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="mb-3">Ingin menanam sawi hidroponik sendiri di rumah? Video ini akan membimbingmu dari pemilihan bibit, perawatan nutrisi, hingga panen dengan hasil yang maksimal. Cocok untuk pemula maupun yang ingin meningkatkan teknik bercocok tanam hidroponik!</div>
                                    <b>Klik untuk menonton!</b>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                <div class="abs z-2 bottom-0 w-100 hover-op-0">
                                    <div class="bg-blur d-flex m-4 p-3 px-4 rounded-1 justify-content-between align-items-center">
                                        <div class="col-11 d-flex flex-column flex-lg-row">
                                            <div class="me-5">
                                                Kategori Penanaman
                                                <h5>Panduan Praktis Menanam Sawi Hidroponik</h5>
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

                        <div class="col-lg-6" id="video">
                            <div class="hover rounded-1 overflow-hidden relative text-light wow fadeInRight" data-wow-delay=".6s">
                                <a href="project-single.html" class="abs w-100 h-100 z-5"></a>
                                <img src="images/thumbnail/instalasi hidroponik.jpeg" class="hover-scale-1-1 w-100" alt="">
                                <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="mb-3">Pelajari cara memasang sistem hidroponik NFT (Nutrient Film Technique) dengan benar! Video ini membahas alat dan bahan yang dibutuhkan, cara merakit pipa, memasang pompa, hingga memastikan aliran nutrisi berjalan optimal. Cocok untuk pemula yang ingin memulai hidroponik modern dengan hasil maksimal!</div>
                                    <b>Klik untuk menonton!</b>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                <div class="abs z-2 bottom-0 w-100 hover-op-0">
                                    <div class="bg-blur d-flex m-4 p-3 px-4 rounded-1 justify-content-between align-items-center">
                                        <div class="col-11 d-flex flex-column flex-lg-row">
                                            <div class="me-5">
                                                Judul
                                                <h5>Panduan Instalasi Sistem NFT Hidroponik</h5>
                                            </div>
                                            <div>
                                                Kategori
                                                <h5>Instalasi</h5>
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

                        <div class="col-lg-6" id="video">
                            <div class="hover rounded-1 overflow-hidden relative text-light wow fadeInRight" data-wow-delay=".3s">
                                <a href="project-single.html" class="abs w-100 h-100 z-5"></a>
                                <img src="images/thumbnail/tips menanam bayam.jpeg" class="hover-scale-1-1 w-100" alt="">
                                <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="mb-3">Ingin menanam sawi hidroponik sendiri di rumah? Video ini akan membimbingmu dari pemilihan bibit, perawatan nutrisi, hingga panen dengan hasil yang maksimal. Cocok untuk pemula maupun yang ingin meningkatkan teknik bercocok tanam hidroponik!</div>
                                    <b>Klik untuk menonton!</b>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                <div class="abs z-2 bottom-0 w-100 hover-op-0">
                                    <div class="bg-blur d-flex m-4 p-3 px-4 rounded-1 justify-content-between align-items-center">
                                        <div class="col-11 d-flex flex-column flex-lg-row">
                                            <div class="me-5">
                                                Kategori Penanaman
                                                <h5>Panduan Praktis Menanam Sawi Hidroponik</h5>
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

                        <div class="col-lg-6" id="video">
                            <div class="hover rounded-1 overflow-hidden relative text-light wow fadeInRight" data-wow-delay=".6s">
                                <a href="project-single.html" class="abs w-100 h-100 z-5"></a>
                                <img src="images/thumbnail/instalasi hidroponik.jpeg" class="hover-scale-1-1 w-100" alt="">
                                <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="mb-3">Pelajari cara memasang sistem hidroponik NFT (Nutrient Film Technique) dengan benar! Video ini membahas alat dan bahan yang dibutuhkan, cara merakit pipa, memasang pompa, hingga memastikan aliran nutrisi berjalan optimal. Cocok untuk pemula yang ingin memulai hidroponik modern dengan hasil maksimal!</div>
                                    <b>Klik untuk menonton!</b>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                <div class="abs z-2 bottom-0 w-100 hover-op-0">
                                    <div class="bg-blur d-flex m-4 p-3 px-4 rounded-1 justify-content-between align-items-center">
                                        <div class="col-11 d-flex flex-column flex-lg-row">
                                            <div class="me-5">
                                                Judul
                                                <h5>Panduan Instalasi Sistem NFT Hidroponik</h5>
                                            </div>
                                            <div>
                                                Kategori
                                                <h5>Instalasi</h5>
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

                        <div class="col-lg-6" id="video">
                            <div class="hover rounded-1 overflow-hidden relative text-light wow fadeInRight" data-wow-delay=".3s">
                                <a href="project-single.html" class="abs w-100 h-100 z-5"></a>
                                <img src="images/thumbnail/tips menanam bayam.jpeg" class="hover-scale-1-1 w-100" alt="">
                                <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="mb-3">Ingin menanam sawi hidroponik sendiri di rumah? Video ini akan membimbingmu dari pemilihan bibit, perawatan nutrisi, hingga panen dengan hasil yang maksimal. Cocok untuk pemula maupun yang ingin meningkatkan teknik bercocok tanam hidroponik!</div>
                                    <b>Klik untuk menonton!</b>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                <div class="abs z-2 bottom-0 w-100 hover-op-0">
                                    <div class="bg-blur d-flex m-4 p-3 px-4 rounded-1 justify-content-between align-items-center">
                                        <div class="col-11 d-flex flex-column flex-lg-row">
                                            <div class="me-5">
                                                Kategori Penanaman
                                                <h5>Panduan Praktis Menanam Sawi Hidroponik</h5>
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

                        <div class="col-lg-6" id="video">
                            <div class="hover rounded-1 overflow-hidden relative text-light wow fadeInRight" data-wow-delay=".6s">
                                <a href="project-single.html" class="abs w-100 h-100 z-5"></a>
                                <img src="images/thumbnail/instalasi hidroponik.jpeg" class="hover-scale-1-1 w-100" alt="">
                                <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="mb-3">Pelajari cara memasang sistem hidroponik NFT (Nutrient Film Technique) dengan benar! Video ini membahas alat dan bahan yang dibutuhkan, cara merakit pipa, memasang pompa, hingga memastikan aliran nutrisi berjalan optimal. Cocok untuk pemula yang ingin memulai hidroponik modern dengan hasil maksimal!</div>
                                    <b>Klik untuk menonton!</b>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                <div class="abs z-2 bottom-0 w-100 hover-op-0">
                                    <div class="bg-blur d-flex m-4 p-3 px-4 rounded-1 justify-content-between align-items-center">
                                        <div class="col-11 d-flex flex-column flex-lg-row">
                                            <div class="me-5">
                                                Judul
                                                <h5>Panduan Instalasi Sistem NFT Hidroponik</h5>
                                            </div>
                                            <div>
                                                Kategori
                                                <h5>Instalasi</h5>
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

                    </div>
                </div>
            </section>

            <section class="jarallax pt80 pb80 relative text-light">
                <img src="images/slider/1-flip.jpg" class="jarallax-img" alt="">
                <div class="container relative z-2">
                    <div class="row">
                        <div class="col-lg-8">
                            <img src="images/logo-icon.webp" class="w-60px mb-4" alt="">
                            <h2 class="text-uppercase mb-4">Pelajari Hidroponik –<br>Hubungi Kami untuk <br>Konsultasi Gratis</h2>
                            <a class="btn-main" href="/kontak">Konsultasi Gratis</a>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-bottom dark"></div>
                <div class="de-overlay"></div>
            </section>

        </div>
        <!-- content end -->

        {{-- footer --}}
        @include('partials.footer')
        {{-- footer end --}}
    </div>

    <!-- overlay content begin -->
    <div id="extra-wrap" class="text-light">
        <div id="btn-close">
            <span></span>
            <span></span>
        </div>

        <div id="extra-content">
            <img src="images/logo-white.webp" class="w-150px" alt="">

            <div class="spacer-30-line"></div>

            <h5>Our Services</h5>
            <ul class="no-style">
                <li><a href="service-single.html">Garden Design</a></li>
                <li><a href="service-single.html">Garden Maintenance</a></li>
                <li><a href="service-single.html">Planting Services</a></li>
                <li><a href="service-single.html">Tree Care</a></li>
                <li><a href="service-single.html">Irrigation Services</a></li>
                <li><a href="service-single.html">Specialty Services</a></li>
            </ul>

            <div class="spacer-30-line"></div>

            <h5>Contact Us</h5>
            <div><i class="icofont-clock-time me-2 op-5"></i>Monday - Friday 08.00 - 18.00</div>
            <div><i class="icofont-location-pin me-2 op-5"></i>100 S Main St, New York, </div>
            <div><i class="icofont-envelope me-2 op-5"></i>contact@gardyn.com</div>

            <div class="spacer-30-line"></div>

            <h5>About Us</h5>
            <p>Transform your outdoor space with our expert garden services! From design to maintenance, we create beautiful, thriving gardens tailored to your vision. Let us bring your dream garden to life—professional, reliable, and passionate about nature.</p>

            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    <!-- overlay content end -->


    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>

</body>

</html>