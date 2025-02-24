<style>
    .smaller,
    .transparent {
        background-color: #ffffff !important;
    }

    .menu-item {
        color: var(--bg-dark-1) !important;
    }

    #mainmenu li a.active {
        border-bottom: 2px solid var(--bg-dark-1) !important;
    }

    a.btn-line {
        border: 1px solid var(--bg-dark-1) !important;
        color: var(--bg-dark-1) !important;
    }

    a.btn-line:hover {
        color: #ffffff !important;
    }
</style>

<!-- header begin -->
<header class="transparent">
    <div id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between xs-hide">
                        <div class="d-flex">
                            <div class="topbar-widget me-3">
                                <a href="#"><i class="icofont-clock-time"></i>Senin - Jum'at 08.00 - 18.00</a>
                            </div>
                            <div class="topbar-widget me-3">
                                <a href="#"><i class="icofont-location-pin"></i>Jl. Raya Pajajaran, Kota Bogor, Jawa Barat 16128</a>
                            </div>
                            <div class="topbar-widget me-3">
                                <a href="#"><i class="icofont-envelope"></i>penyungoding@gmail.com</a>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="social-icons">
                                <a href="#"><i class="fa-brands fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube fa-lg"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest fa-lg"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <img class="logo-main" src="images/logo-black.webp" alt="">
                                <img class="logo-mobile" src="images/logo-black.webp" alt="">
                            </a>
                        </div>
                        <!-- logo end -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a class="menu-item {{ $active }}" href="/">Beranda</a></li>
                            <li><a class="menu-item {{ request()->is('produk') ? 'active' : '' }}" href="/produk">Produk</a></li>
                            <li><a class="menu-item" href="projects.html">Edukasi</a></li>
                            <li><a class="menu-item" href="about.html">HydroBot</a></li>
                            <li><a class="menu-item" href="about.html">Tentang Kami</a></li>
                            <li><a class="menu-item" href="team.html">Our Team</a></li>
                            <li><a class="menu-item" href="contact.html">Kontak</a></li>
                        </ul>
                        <!-- mainmenu end -->
                    </div>
                    <div class="de-flex-col">
                        <div class="menu_side_area">
                            <a href="contact.html" class="btn-main btn-line">Sign In</a>
                            <span id="menu-btn"></span>
                        </div>

                        <div id="btn-extra" class="dark">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
