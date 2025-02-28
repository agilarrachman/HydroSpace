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
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
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
                <img src="images/background/7.webp" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row">
                        <div class="col-lg-7">
                            <ul class="crumb">
                                <li><a href="index.html">Beranda</a></li>
                                <li class="active">Kontak</li>
                            </ul>
                            <h1 class="text-uppercase">Hubungi Kami</h1>
                            <p class="col-lg-10 lead">Kami siap membantu! Jangan ragu untuk menghubungi kami untuk pertanyaan, konsultasi, atau informasi seputar hidroponik. Kami juga menghargai setiap masukan Anda untuk terus meningkatkan layanan kami.</p>
                        </div>
                    </div>
                </div>
                <img src="images/logo-wm.webp" class="abs end-0 bottom-0 z-2 w-20" alt="">
                <div class="de-gradient-edge-top dark"></div>
                <div class="de-overlay"></div>
            </section>

            <section>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <h3 class="wow fadeInUp">Kirim Pesan Kamu</h3>

                            <p>Punya pertanyaan, saran, atau sekadar ingin menyapa? Kami siap mendengar! Isi formulir di bawah ini, dan kami akan segera merespons pesan Kamu.</p>

                            <div class="spacer-single"></div>

                            <div class="rounded-1 bg-light overflow-hidden">
                                <div class="row g-2">
                                    <div class="col-sm-6">
                                        <div class="auto-height relative" data-bgimage="url(images/blog/1.webp)"></div>
                                    </div>
                                    <div class="col-sm-6 relative">
                                        <div class="p-30">
                                            <div class="fw-bold text-dark"><i class="icofont-clock-time me-2 id-color-2"></i>Waktu Operasional</div>
                                            Senin - Jum'at 08.00 - 18.00

                                            <div class="spacer-20"></div>

                                            <div class="fw-bold text-dark"><i class="icofont-location-pin me-2 id-color-2"></i>Lokasi Kantor</div>
                                            Jl. Raya Pajajaran, Kota Bogor, Jawa Barat 16128

                                            <div class="spacer-20"></div>

                                            <div class="fw-bold text-dark"><i class="icofont-phone me-2 id-color-2"></i>Hubungi Kami Secara Langsung</div>
                                            081234567890

                                            <div class="spacer-20"></div>

                                            <div class="fw-bold text-dark"><i class="icofont-envelope me-2 id-color-2"></i>Kirim Pesan</div>
                                            penyungoding@gmail.com
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="p-4 rounded-10px">
                                <form name="contactForm" id="contact_form" class="position-relative z1000" method="post" action="#">

                                    <div class="field-set">
                                        <input type="text" name="Name" id="name" class="form-control" placeholder="Nama Kamu" required>
                                    </div>

                                    <div class="field-set">
                                        <input type="text" name="Email" id="email" class="form-control" placeholder="Email Kamu" required>
                                    </div>

                                    <div class="field-set">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Nomor Telepon Kamu" required>
                                    </div>

                                    <div class="field-set mb20">
                                        <textarea name="message" id="message" class="form-control" placeholder="Pesan Kamu" required></textarea>
                                    </div>

                                    <div id='submit' class="mt20">
                                        <input type='submit' id='send_message' value='Kirim' class="btn-main">
                                    </div>

                                    <div id="success_message" class='success'>
                                        Your message has been sent successfully. Refresh this page if you want to send more messages.
                                    </div>
                                    <div id="error_message" class='error'>
                                        Sorry there was an error sending your form.
                                    </div>
                                </form>
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
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script src="contact.js"></script>
    <script src="recaptcha.js"></script>

</body>

</html>