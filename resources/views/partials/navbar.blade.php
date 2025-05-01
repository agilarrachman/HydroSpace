<!-- header begin -->
<style>
    #mainmenu li a.active {
        color: white !important;
        border-bottom: 2px solid white;
    }
</style>

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
                            <a href="/">
                                <img class="logo-main" src="/images/logo-white.webp" alt="">
                                <img class="logo-mobile" src="/images/logo-white.webp" alt="">
                            </a>
                        </div>
                        <!-- logo end -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a class="menu-item {{ ($active === 'Beranda') ? 'active' : '' }}" href="/" id="home">Beranda</a></li>
                            <li><a class="menu-item {{ ($active === 'Produk') ? 'active' : '' }}" href="/produk">Produk</a></li>
                            <li><a class="menu-item {{ ($active === 'Edukasi') ? 'active' : '' }}" href="/edukasi">Edukasi</a></li>
                            <li><a class="menu-item {{ ($active === 'HydroBot') ? 'active' : '' }}" href="/#ai" id="consultationLink">HydroBot</a></li>
                            <li><a class="menu-item {{ ($active === 'Tentang') ? 'active' : '' }}" href="/tentang">Tentang Kami</a></li>
                            <li><a class="menu-item {{ ($active === 'Kontak') ? 'active' : '' }}" href="/kontak">Kontak</a></li>
                        </ul>
                        <!-- mainmenu end -->
                    </div>
                    <div class="de-flex-col">
                        @auth
                        <a href="/profil/{{ auth()->user()->username }}" class="profile-picture d-flex gap-2 align-items-center">
                            <div class="avatar avatar-online">
                                <img src="{{ asset('../storage/' . auth()->user()->profile_picture) }}" alt class="w-px-40 rounded-circle" />
                            </div>
                            <p class="m-0 d-none d-md-block">{{ auth()->user()->username }}</p>
                        </a>
                        <span id="menu-btn"></span>
                        @else
                        <div class="menu_side_area">
                            <a href="/masuk" class="btn-main btn-line">Masuk</a>
                            <span id="menu-btn"></span>
                        </div>
                        @endauth

                        <div id="btn-extra">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function updateActiveMenu() {
            const hash = window.location.hash;

            // Reset semua
            document.querySelectorAll('.menu-item').forEach(item => {
                item.classList.remove('active');
            });

            if (hash === '#ai') {
                document.getElementById('consultationLink')?.classList.add('active');
            } else if (window.location.pathname === '/') {
                document.getElementById('home')?.classList.add('active');
            } else {
                const currentPath = window.location.pathname;
                document.querySelector(`.menu-item[href="${currentPath}"]`)?.classList.add('active');
            }
        }

        updateActiveMenu();
        window.addEventListener('hashchange', updateActiveMenu);
    });
</script>