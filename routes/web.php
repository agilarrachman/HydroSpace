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

Route::get('/hydrobot', function () {
    return view('index', [
        "active" => "HydroBot"
    ]);
});
