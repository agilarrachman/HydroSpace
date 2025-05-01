<style>
    #mainmenu li a:hover {
        color: rgb(53, 78, 51);
        border-bottom: 2px solid rgb(53, 78, 51);
    }

    #mainmenu li a.active {
        border-bottom: 2px solid rgb(53, 78, 51);
    }

    #btn-masuk:hover {
        color: white !important;
    }
</style>

<header class="header-light transparent">
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
                            <a href="/">
                                <img class="logo-main" src="/images/logo-black.webp" alt="">
                                <img class="logo-mobile" src="/images/logo-black.webp" alt="">
                            </a>
                        </div>
                        <!-- logo end -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a class="menu-item {{ ($active === 'Beranda') ? 'active' : '' }}" href="/">Beranda</a></li>
                            <li><a class="menu-item {{ ($active === 'Produk') ? 'active' : '' }}" href="/produk">Produk</a></li>
                            <li><a class="menu-item {{ ($active === 'Edukasi') ? 'active' : '' }}" href="/edukasi">Edukasi</a></li>
                            <li><a class="menu-item {{ ($active === 'HydroBot') ? 'active' : '' }}" href="/#ai" id="consultationLink">HydroBot</a></li>
                            <li><a class="menu-item {{ ($active === 'Tentang') ? 'active' : '' }}" href="/tentang">Tentang Kami</a></li>
                            <li><a class="menu-item {{ ($active === 'Kontak') ? 'active' : '' }}" href="/kontak">Kontak</a></li>
                            @auth
                            <li><a class="menu-item {{ ($active === 'Profil') ? 'active' : '' }}" href="/profil/{{ auth()->user()->username }}">Profil</a></li>
                            @endauth
                        </ul>
                        <!-- mainmenu end -->
                    </div>
                    <div class="de-flex-col">
                        <div class="d-flex">

                            @auth
                            <div class="d-flex">
                                <a class="de-icon-counter" href="/pesanan">
                                    <div class="d-counter">{{ $totalOrder }}</div>
                                    <img src="/images/ui/order.svg" class="" alt="">
                                </a>

                                <div id="btn-cart" class="de-icon-counter">
                                    <div class="d-counter" id="total-item-value">{{ $totalItem }}</div>
                                    <img src="/images/ui/cart.svg" class="" alt="">
                                </div>
                            </div>

                            <span id="menu-btn" class="my-auto"></span>
                            @else
                            <div class="menu_side_area">
                                <a href="/masuk" class="btn-main btn-line" style="color: rgb(53, 78, 51); border: 2px solid rgb(53, 78, 51);" id="btn-masuk">Masuk</a>
                                <span id="menu-btn"></span>
                            </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->