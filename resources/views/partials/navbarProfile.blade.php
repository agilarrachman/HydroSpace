<!-- header begin -->
<style>
    #mainmenu li a.active {
        color: #354e33 !important;
        border-bottom: 2px solid #354e33;
    }

    .profile-picture {
        color: white;
    }
</style>

<header class="header clone smaller transparent d-none d-lg-block">
    <div class="container ms-auto me-0" style="max-width: 83%;">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a class="menu-item {{ ($active === 'Beranda') ? 'active' : '' }}" href="/">Beranda</a></li>
                            <li><a class="menu-item {{ ($active === 'Produk') ? 'active' : '' }}" href="/produk">Produk</a></li>
                            <li><a class="menu-item {{ ($active === 'Edukasi') ? 'active' : '' }}" href="/edukasi">Edukasi</a></li>
                            <li><a class="menu-item {{ ($active === 'HydroBot') ? 'active' : '' }}" href="/hydrobot#ai" id="consultationLink">HydroBot</a></li>
                            <li><a class="menu-item {{ ($active === 'Tentang') ? 'active' : '' }}" href="/tentang">Tentang Kami</a></li>
                            <li><a class="menu-item {{ ($active === 'Kontak') ? 'active' : '' }}" href="/kontak">Kontak</a></li>
                        </ul>
                        <!-- mainmenu end -->
                    </div>
                    <div class="de-flex-col">
                        <a href="/profil" class="profile-picture d-flex gap-2 align-items-center">
                            <div class="avatar avatar-online">
                                <img src="../images/team/3.jpg" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                            Agil ArRachman
                        </a>

                        <!-- <div class="menu_side_area">
                            <a href="/signin" class="btn-main">Masuk</a>
                            <span id="menu-btn"></span>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->