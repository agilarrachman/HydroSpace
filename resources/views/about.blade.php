<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>HydroSpace | Tentang Kami</title>
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
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">

    <style>
        #mainmenu li a.active {
            color: white !important;
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
                <img src="images/background/2.webp" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="crumb">
                                <li><a href="/">Beranda</a></li>
                                <li class="active">Tentang Kami</li>
                            </ul>
                            <h1 class="text-uppercase">Tentang Kami</h1>
                            <p class="col-lg-10 lead">Mewujudkan Pertanian Masa Depan dengan Inovasi Hidroponik yang Efisien dan Berkelanjutan</p>
                        </div>
                    </div>
                </div>
                <img src="images/logo-wm.webp" class="abs end-0 bottom-0 z-2 w-20" alt="">
                <div class="de-gradient-edge-top dark"></div>
                <div class="de-overlay"></div>
            </section>

            <section>
                <div class="container relative z-1">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle wow fadeInUp mb-3">Cerita Kami</div>
                            <h2 class="text-uppercase wow fadeInUp" data-wow-delay=".2s">Merevolusi<span class="id-color-2"><br>Pertanian Modern</span><br>Sejak 2025</h2>
                            <p class="wow fadeInUp">Sejak didirikan pada tahun 2025, HydroSpace telah berkomitmen untuk menghadirkan solusi hidroponik inovatif bagi semua orang. Kami terus berkembang untuk memberikan edukasi, kemudahan akses alat dan bahan, serta dukungan bagi pemula hingga ahli dalam dunia pertanian modern.</p>
                        </div>

                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <img src="images/services/2.webp" class="w-100 rounded-1 wow zoomIn" alt="" style="height: 428px; object-fit:cover;">
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="rounded-1 relative bg-color-2 text-light p-4">
                                                <img src="images/icons/tree.png" class="abs abs-middle w-60px" alt="">
                                                <div class="de_count ps-80 wow fadeInUp">
                                                    <h2 class="mb-0 fs-32"><span class="timer" data-to="550" data-speed="3000"></span>+</h2>
                                                    <span class="op-7">Petani Terbantu</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="rounded-1 relative bg-color-2 text-light p-4">
                                                <img src="images/icons/happy.png" class="abs abs-middle w-60px" alt="">
                                                <div class="de_count ps-80 wow fadeInUp">
                                                    <h2 class="mb-0 fs-32"><span class="timer" data-to="850" data-speed="3000"></span>+</h2>
                                                    <span class="op-7">Pelanggan Puas</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <img src="images/services/3.webp" class="w-100 rounded-1 wow zoomIn" alt="" style="height: 428px; object-fit:cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>

            <section class="bg-light">
                <div class="container">
                    <div class="row g-4 mb-3 justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="subtitle wow fadeInUp mb-3">Dibalik Layar</div>
                            <h2 class="text-uppercase wow fadeInUp" data-wow-delay=".2s">Tim <span class="id-color-2">Kami</span></h2>
                        </div>
                    </div>

                    <div class="row g-4">
                        <!-- team begin -->
                        <div class="col-md-3">
                            <div class="relative">
                                <div class="abs bottom-0 w-100">
                                    <div class="d-flex justify-content-between align-items-center rounded-1 m-4 bg-white px-4 py-2">
                                        <div>
                                            <h5 class="mb-0">Nurrizkyta Aulia</h5>
                                            <p class="mb-0">Project Manager</p>
                                        </div>
                                        <div class="text-end">
                                            <a href="https://www.instagram.com/nausssie/"><i class="fa-brands fa-instagram fa-lg fs-24 id-color bg-light w-40px h-40px circle text-center" style="padding-top: 20px;"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <img src="images/team/1.jpg" class="w-100 rounded-10px" alt="">
                            </div>
                        </div>
                        <!-- team end -->

                        <!-- team begin -->
                        <div class="col-md-3">
                            <div class="relative">
                                <div class="abs bottom-0 w-100">
                                    <div class="d-flex justify-content-between align-items-center rounded-1 m-4 bg-white px-4 py-2">
                                        <div>
                                            <h5 class="mb-0">Muhammad Fillah</h5>
                                            <p class="mb-0">System Analyst</p>
                                        </div>
                                        <div class="text-end">
                                            <a href="https://www.instagram.com/fillah_alfatih/"><i class="fa-brands fa-instagram fa-lg fs-24 id-color bg-light w-40px h-40px circle text-center" style="padding-top: 20px;"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <img src="images/team/2.jpg" class="w-100 rounded-10px" alt="">
                            </div>
                        </div>
                        <!-- team end -->

                        <!-- team begin -->
                        <div class="col-md-3">
                            <div class="relative">
                                <div class="abs bottom-0 w-100">
                                    <div class="d-flex justify-content-between align-items-center rounded-1 m-4 bg-white py-2 px-4">
                                        <div>
                                            <h5 class="mb-0">Agil ArRachman</h5>
                                            <p class="ms-0 mb-0">Programmer</p>
                                        </div>
                                        <div class="text-end">
                                            <a href="https://www.instagram.com/agil.arrachman/"><i class="fa-brands fa-instagram fa-lg fs-24 id-color bg-light w-40px h-40px circle text-center" style="padding-top: 20px;"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <img src="images/team/3.jpg" class="w-100 rounded-10px" alt="">
                            </div>
                        </div>
                        <!-- team end -->

                        <!-- team begin -->
                        <div class="col-md-3">
                            <div class="relative">
                                <div class="abs bottom-0 w-100">
                                    <div class="d-flex justify-content-between align-items-center rounded-1 m-4 bg-white px-4 py-2">
                                        <div>
                                            <h5 class="mb-0">Nasywa Shafa</h5>
                                            <p class="mb-0">Quality Assurance</p>
                                        </div>
                                        <div class="text-end">
                                            <a href="https://www.instagram.com/nasywashafa.s/"><i class="fa-brands fa-instagram fa-lg fs-24 id-color bg-light w-40px h-40px circle text-center" style="padding-top: 20px;"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <img src="images/team/4.jpg" class="w-100 rounded-10px" alt="">
                            </div>
                        </div>
                        <!-- team end -->
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row g-4 mb-3 align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="subtitle wow fadeInUp">Mengapa Memilih Kami</div>
                            <h2 class="text-uppercase wow fadeInUp" data-wow-delay=".2s">Komitmen Kami untuk <span class="id-color-2">Keunggulan</span></h2>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color text-light padding30 rounded-1">
                                <img src="images/logo-icon.webp" class="w-50px mb-3" alt="">
                                <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">01</div>
                                <div>
                                    <h4>Solusi Hidroponik untuk Semua</h4>
                                    <p class="mb-0">Sistem hidroponik mudah diterapkan, cocok untuk pemula hingga ahli, mendukung pertanian modern yang efisien.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color text-light padding30 rounded-1">
                                <img src="images/logo-icon.webp" class="w-50px mb-3" alt="">
                                <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">02</div>
                                <div>
                                    <h4>Edukasi Lengkap & Terstruktur</h4>
                                    <p class="mb-0">Artikel, video, dan webinar interaktif membantu Anda memahami hidroponik dari dasar hingga tingkat mahir.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color text-light padding30 rounded-1">
                                <img src="images/logo-icon.webp" class="w-50px mb-3" alt="">
                                <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">03</div>
                                <div>
                                    <h4>Produk Berkualitas & Terjangkau</h4>
                                    <p class="mb-0">Perlengkapan hidroponik berkualitas dengan harga terjangkau, memudahkan Anda memulai dan mengembangkan kebun sendiri.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color-2 text-light padding30 rounded-1">
                                <img src="images/logo-icon.webp" class="w-50px mb-3" alt="">
                                <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">04</div>
                                <div>
                                    <h4>Bantuan Instan dengan Inovasi Baru</h4>
                                    <p class="mb-0">Chatbot cerdas siap menjawab pertanyaan Anda kapan saja, memberikan solusi cepat dan panduan hidroponik interaktif.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color-2 text-light padding30 rounded-1">
                                <img src="images/logo-icon.webp" class="w-50px mb-3" alt="">
                                <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">05</div>
                                <div>
                                    <h4>Layanan Cepat & Responsif</h4>
                                    <p class="mb-0">Tim kami siap membantu setiap pertanyaan Anda dengan layanan yang cepat, ramah, dan solusi yang tepat.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color-2 text-light padding30 rounded-1">
                                <img src="images/logo-icon.webp" class="w-50px mb-3" alt="">
                                <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3">06</div>
                                <div>
                                    <h4>Komitmen terhadap Keberlanjutan</h4>
                                    <p class="mb-0">Hidroponik menghemat air, lahan, dan energi, menciptakan solusi pertanian modern yang lebih hijau, efisien, dan berkelanjutan untuk masa depan.</p>
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