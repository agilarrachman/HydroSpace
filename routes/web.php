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

Route::get('/profil', function () {
    return view('profile', [
        "title" => "HydroSpace | Profil",
        "active" => "Profil"
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
