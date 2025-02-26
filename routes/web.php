<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        "active" => "Beranda"
    ]);
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/edukasi', function () {
    return view('videos', [
        "active" => "Edukasi"
    ]);
});

Route::get('/edukasi/slug', function () {
    return view('viewVideo', [
        "active" => "Edukasi"
    ]);
});

Route::get('/hydrobot', function () {
    return view('index', [
        "active" => "HydroBot"
    ]);
});

Route::get('/tentang', function () {
    return view('about', [
        "active" => "Tentang"
    ]);
});

Route::get('/kontak', function () {
    return view('contact', [
        "active" => "Kontak"
    ]);
});
