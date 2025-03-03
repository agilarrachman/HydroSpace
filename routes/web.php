<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        "title" => "HydroSpace | Beranda",
        "active" => "Beranda"
    ]);
});

Route::get('/produk', function () {
    return view('products', [
        "title" => "HydroSpace | Produk",
        "active" => "Produk"
    ]);
});

Route::get('/produk/slug', function () {
    return view('viewProduct', [
        "title" => "HydroSpace | Produk",
        "active" => "Produk"
    ]);
});

Route::get('/edukasi', function () {
    return view('videos', [
        "title" => "HydroSpace | Edukasi",
        "active" => "Edukasi"
    ]);
});

Route::get('/edukasi/slug', function () {
    return view('viewVideo', [
        "title" => "HydroSpace | Edukasi",
        "active" => "Edukasi"
    ]);
});

Route::get('/hydrobot', function () {
    return view('index', [
        "title" => "HydroSpace | HydroBot",
        "active" => "HydroBot"
    ]);
});

Route::get('/tentang', function () {
    return view('about', [
        "title" => "HydroSpace | Tentang Kami",
        "active" => "Tentang"
    ]);
});

Route::get('/kontak', function () {
    return view('contact', [
        "title" => "HydroSpace | Kontak",
        "active" => "Kontak"
    ]);
});

Route::get('/chat', function () {
    return view('chat', [
        "title" => "HydroSpace | Chat Admin HydroSpace",
        "active" => "Chat Admin HydroSpace"
    ]);
});

Route::get('/dashboard/chat', function () {
    return view('dashboard.chat', [
        "title" => "HydroSpace | Chat Customer",
        "active" => "Chat Customer"
    ]);
});

Route::get('/profil', function () {
    return view('profile', [
        "title" => "HydroSpace | Profil",
        "active" => "Lihat Profil"
    ]);
});

Route::get('/perbarui-profil', function () {
    return view('updateProfile', [
        "title" => "HydroSpace | Update Profil",
        "active" => "Perbarui Profil"
    ]);
});

Route::get('/lupa-password-profil', function () {
    return view('forgotPasswordProfile', [
        "title" => "HydroSpace | Lupa Password",
        "active" => "Lupa Password"
    ]);
});

Route::get('/checkout', function () {
    return view('checkout', [
        "title" => "HydroSpace | Buat Pesanan",
        "active" => "Buat Pesanan",
    ]);
});

Route::get('/pesanan', function () {
    return view('orders', [
        "title" => "HydroSpace | Pesanan Saya",
        "active" => "Pesanan Saya",
    ]);
});

Route::get('/pesanan/id', function () {
    return view('orderDetail', [
        "title" => "HydroSpace | Pesanan Saya",
        "active" => "Pesanan Saya",
    ]);
});

Route::get('/signin', function () {
    return view('signin', [
        "title" => "HydroSpace | Masuk"
    ]);
});

Route::get('/signup', function () {
    return view('signup', [
        "title" => "HydroSpace | Registrasi"
    ]);
});

Route::get('/lupa-password', function () {
    return view('forgotPassword', [
        "title" => "HydroSpace | Lupa Password"
    ]);
});

Route::get('/create-profile', function () {
    return view('createProfile', [
        "title" => "HydroSpace | Buat Profil"
    ]);
});

// DASHBOARD ROUTE

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "HydroSpace | Dashboard",
        "active" => "Dashboard"
    ]);
});

Route::get('/dashboard/admin', function () {
    return view('dashboard.admin', [
        "title" => "HydroSpace | Admin",
        "active" => "Admin"
    ]);
});

Route::get('/dashboard/customer', function () {
    return view('dashboard.customer', [
        "title" => "HydroSpace | Kustomer",
        "active" => "Kustomer"
    ]);
});

Route::get('/dashboard/customer/create', function () {
    return view('dashboard.createCustomer', [
        "title" => "HydroSpace | Tambah Kustomer",
        "active" => "Kustomer"
    ]);
});

Route::get('/dashboard/admin/create', function () {
    return view('dashboard.createAdmin', [
        "title" => "HydroSpace | Tambah Admin",
        "active" => "Admin"
    ]);
});

Route::get('/dashboard/product', function () {
    return view('dashboard.products', [
        "title" => "HydroSpace | Daftar Produk",
        "active" => "Produk"
    ]);
});

Route::get('/dashboard/product/slug', function () {
    return view('dashboard.productDetail', [
        "title" => "HydroSpace | Bibit Sawi",
        "active" => "Produk"
    ]);
});

Route::get('/dashboard/product/create', function () {
    return view('dashboard.createProduct', [
        "title" => "HydroSpace | Tambah Produk",
        "active" => "Produk"
    ]);
});

Route::get('/dashboard/orders', function () {
    return view('dashboard.orders', [
        "title" => "HydroSpace | Daftar Pesanan",
        "active" => "Pesanan"
    ]);
});

Route::get('/dashboard/orders/id', function () {
    return view('dashboard.orderDetail', [
        "title" => "HydroSpace | Detail Pesanan",
        "active" => "Pesanan"
    ]);
});

Route::get('/dashboard/product/update', function () {
    return view('dashboard.updateProduct', [
        "title" => "HydroSpace | Update Produk",
        "active" => "Produk"
    ]);
});

Route::get('/dashboard/category', function () {
    return view('dashboard.categories', [
        "title" => "HydroSpace | Daftar Kategori",
        "active" => "Kategori"
    ]);
});

Route::get('/dashboard/category/create', function () {
    return view('dashboard.createCategory', [
        "title" => "HydroSpace | Tambah Kategori",
        "active" => "Kategori"
    ]);
});

Route::get('/dashboard/category/update', function () {
    return view('dashboard.updateCategory', [
        "title" => "HydroSpace | Update Kategori",
        "active" => "Kategori"
    ]);
});

Route::get('/dashboard/video', function () {
    return view('dashboard.videos', [
        "title" => "HydroSpace | Daftar Video",
        "active" => "Video"
    ]);
});

Route::get('/dashboard/video/slug', function () {
    return view('dashboard.videoDetail', [
        "title" => "HydroSpace | Panduan Instalasi Sistem NFT Hidroponik",
        "active" => "Video"
    ]);
});

Route::get('/dashboard/video/create', function () {
    return view('dashboard.createVideo', [
        "title" => "HydroSpace | Tambah Video",
        "active" => "Video"
    ]);
});

Route::get('/dashboard/video/update', function () {
    return view('dashboard.updateVideo', [
        "title" => "HydroSpace | Update Video",
        "active" => "Video"

    ]);
});

// END DASHBOARD ROUTE
