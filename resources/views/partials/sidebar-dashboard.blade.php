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
        <li class="menu-item {{ request()->is('dashboard/admin*') ? 'active' : '' }}">
            <a href="/dashboard/admin" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Basic">Admin</div>
            </a>
        </li>

         <!-- Customer -->
        <li class="menu-item {{ request()->is('dashboard/kustomer*') ? 'active' : '' }}">
            <a href="/dashboard/kustomer" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Basic">Kustomer</div>
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
        <li class="menu-item {{ request()->is('dashboard/produk*') ? 'active' : '' }}">
            <a href="/dashboard/produk" class="menu-link">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="Basic">Produk</div>
            </a>
        </li>

        <!-- Category -->
        <li class="menu-item {{ request()->is('dashboard/kategori*') ? 'active' : '' }}">
            <a href="/dashboard/kategori" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Basic">Kategori</div>
            </a>
        </li>

        <!-- Video -->
        <li class="menu-item {{ request()->is('dashboard/video*') ? 'active' : '' }}">
            <a href="/dashboard/video" class="menu-link">
                <i class="menu-icon tf-icons bx bx-video"></i>
                <div data-i18n="Basic">Video</div>
            </a>
        </li>

        <!-- Order -->
        <li class="menu-item {{ request()->is('dashboard/order*') ? 'active' : '' }}">
            <a href="/dashboard/order" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cart"></i>
                <div data-i18n="Basic">Order</div>
            </a>
        </li>

        <!-- Setting -->
        <li class="menu-item mt-auto {{ request()->is('dashboard/pengaturan*') ? 'active' : '' }}">
            <a href="/dashboard/pengaturan" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Basic">Pengaturan</div>
            </a>
        </li>

        <!-- Log -->
        <li class="menu-item">
            <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div data-i18n="Logout">Log Out</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->
