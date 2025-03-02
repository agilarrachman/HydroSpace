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
