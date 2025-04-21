<!-- header begin -->
<style>
    #mainmenu li a.active {
        color: #354e33 !important;
        border-bottom: 2px solid #354e33;
    }

    header a:hover {
        color: white !important;
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
                            <li><a class="menu-item {{ ($active === 'HydroBot') ? 'active' : '' }}" href="/#ai" id="consultationLink">HydroBot</a></li>
                            <li><a class="menu-item {{ ($active === 'Tentang') ? 'active' : '' }}" href="/tentang">Tentang Kami</a></li>
                            <li><a class="menu-item {{ ($active === 'Kontak') ? 'active' : '' }}" href="/kontak">Kontak</a></li>
                        </ul>
                        <!-- mainmenu end -->
                    </div>
                    <div class="de-flex-col">
                        @auth
                        <a href="/profil/{{ auth()->user()->username }}" class="profile-picture d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img src="{{ asset('../storage/' . auth()->user()->profile_picture) }}" alt class="w-px-40 rounded-circle" />
                            </div>
                            {{ auth()->user()->username }}
                        </a>
                        @else
                        <div class="menu_side_area">
                            <a href="/masuk" class="btn-main btn-line">Masuk</a>
                            <span id="menu-btn"></span>
                        </div>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->