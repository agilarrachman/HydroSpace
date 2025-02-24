<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        "title" => "HydroSpace",
        "active" => "Beranda"
    ]);
});

Route::get('/produk', function () {
    return view('produk', [
        "title" => "Produk — HydroSpace",
        "active" => "Produk"
    ]);
});

Route::get('/hydrobot', function () {
    return view('index', [
        "title" => "HydroBot — HydroSpace",
        "active" => "HydroBot"
    ]);
});
