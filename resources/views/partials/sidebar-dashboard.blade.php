<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
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
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Basic">Dashboard</div>
            </a>
        </li>

        <!-- Admin -->
        <li class="menu-item {{ request()->is('dashboard/admins*') ? 'active' : '' }}">
            <a href="/dashboard/admins" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Basic">Admin</div>
            </a>
        </li>

        <!-- Customer -->
        <li class="menu-item {{ request()->is('dashboard/customers*') ? 'active' : '' }}">
            <a href="/dashboard/customers" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Basic">Pelanggan</div>
            </a>
        </li>

        <!-- Chat -->
        <li class="menu-item {{ request()->is('dashboard/chat*') ? 'active' : '' }}">
            <a href="/dashboard/chat" class="menu-link">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div data-i18n="Basic">Chat</div>
            </a>
        </li>

        <!-- Product -->
        <li class="menu-item {{ request()->is('dashboard/product*') ? 'active' : '' }}">
            <a href="/dashboard/product" class="menu-link">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="Basic">Produk</div>
            </a>
        </li>

        <!-- Category -->
        <li class="menu-item {{ request()->is('dashboard/categories*') || request()->is('dashboard/video-categories*') ? 'active' : '' }}">
            <a href="/dashboard/categories" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Basic">Kategori</div>
            </a>
        </li>


        <!-- Video -->
        <li class="menu-item {{ request()->is('dashboard/videos*') ? 'active' : '' }}">
            <a href="/dashboard/videos" class="menu-link">
                <i class="menu-icon tf-icons bx bx-video"></i>
                <div data-i18n="Basic">Video</div>
            </a>
        </li>

        <!-- Order -->
        <li class="menu-item {{ request()->is('dashboard/orders*') ? 'active' : '' }}">
            <a href="/dashboard/orders" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cart"></i>
                <div data-i18n="Basic">Order</div>
            </a>
        </li>

        <!-- Profile -->
        <li class="menu-item mt-auto {{ request()->is('dashboard/profile*') ? 'active' : '' }}">
            <a href="/dashboard/profile/{{ auth()->user()->username }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Basic">Profil</div>
            </a>
        </li>

        <!-- Update Password -->
        <li class="menu-item {{ request()->is('dashboard/update-password*') ? 'active' : '' }}">
            <a href="/dashboard/update-password" class="menu-link">
                <i class="menu-icon tf-icons bx bx-key"></i>
                <div data-i18n="Basic">Ubah Password</div>
            </a>
        </li>

        <!-- Log -->
        <li class="menu-item">
            <form action="/dashboard/keluar" method="post" class="ms-2">
                @csrf
                <button class="menu-link border-0 w-100 mx-4 px-0 bg-transparent" type="submit" onclick="return confirm('Apakah kamu yakin akan keluar dari akun kamu?')">
                    <i class="menu-icon tf-icons bx bx-log-out"></i>
                    <p class="m-0">Log Out</p>
                </button>
            </form>
        </li>
    </ul>
</aside>
<!-- / Menu -->