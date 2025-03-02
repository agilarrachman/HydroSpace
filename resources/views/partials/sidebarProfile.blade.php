<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo d-flex flex-column mb-3">
        <a href="/" class="back-link">
            <i class='bx bx-arrow-back'></i>
        </a>
        <a href="/" class="app-brand-link">
            <img style="max-width: 165px !important;" src="{{ asset('images/logo-black.webp') }}" alt="">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ ($active === 'Lihat Profil') ? 'active' : '' }}">
            <a href="/profil" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Profile">Lihat Profil</div>
            </a>
        </li>

        <!-- Update Profile -->
        <li class="menu-item {{ ($active === 'Perbarui Profil') ? 'active' : '' }}">
            <a href="/perbarui-profil" class="menu-link">
                <i class="menu-icon tf-icons bx bx-edit"></i>
                <div data-i18n="Update Profile">Perbarui Profil</div>
            </a>
        </li>

        <!-- My Orders -->
        <li class="menu-item {{ ($active === 'Pesanan Saya') ? 'active' : '' }}">
            <a href="/pesanan" class="menu-link">
                <i class="menu-icon tf-icons bx bx-notepad"></i>
                <div data-i18n="Orders">Pesanan Saya</div>
            </a>
        </li>

        <!-- Chat -->
        <li class="menu-item {{ ($active === 'Chat Admin HydroSpace') ? 'active' : '' }}">
            <a href="/chat" class="menu-link">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div data-i18n="Basic">Chat</div>
            </a>
        </li>

        <!-- Forgot Password -->
        <li class="menu-item {{ ($active === 'Lupa Password') ? 'active' : '' }}">
            <a href="/lupa-password-profil" class="menu-link">
                <i class="menu-icon tf-icons bx bx-key"></i>
                <div data-i18n="Forgot Password">Lupa Password</div>
            </a>
        </li>

        <!-- Log -->
        <li class="menu-item mt-auto">
            <button class="menu-link border-0 mx-3 px-3 bg-transparent" onclick="return confirm('Apakah kamu yakin akan keluar dari akun kamu?')">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <p class="m-0">Log Out</p>
            </button>
        </li>

        <!-- Log -->
        <li class="menu-item">
            <button class="menu-link border-0 mx-3 px-3 bg-transparent" onclick="return confirm('Apakah kamu yakin akan keluar dari akun kamu?')">
                <i class="menu-icon tf-icons bx bx-trash"></i>
                <div data-i18n="Delete Account">Hapus Akun</div>
            </button>
        </li>
    </ul>
</aside>
<!-- / Menu -->