<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/masuk', [AuthenticationController::class, 'login']);
Route::post('/masuk', [AuthenticationController::class, 'authenticate']);
Route::get('/lupa-password', [AuthenticationController::class, 'showForgotPasswordForm']);
Route::post('/lupa-password', [AuthenticationController::class, 'sendResetLinkEmail']);
Route::get('/reset-password/{token}', [AuthenticationController::class, 'showResetPasswordForm'])
    ->name('password.reset');
Route::put('/reset-password', [AuthenticationController::class, 'resetPassword']);
Route::get('/registrasi', [AuthenticationController::class, 'regist']);
Route::post('/registrasi', [AuthenticationController::class, 'createAccount']);
Route::get('/buat-profil', [AuthenticationController::class, 'showCreateProfile']);
Route::post('/buat-profil', [AuthenticationController::class, 'storeCustomer']);
Route::get('/get-cities/{provinceId}', [LocationController::class, 'getCities']);
Route::get('/get-districts/{cityId}', [LocationController::class, 'getDistricts']);
Route::get('/get-villages/{districtId}', [LocationController::class, 'getVillages']);

Route::middleware(['blockAdmin'])->group(function () {
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
});

Route::get('/dashboard/chat', function () {
    return view('dashboard.chat', [
        "title" => "HydroSpace | Chat Customer",
        "active" => "Chat Customer"
    ]);
});

Route::middleware(['role:Customer'])->group(function () {
    Route::resource('/profil', UserController::class)->parameters([
        'profil' => 'user'
    ]);

    Route::post('/keluar', [AuthenticationController::class, 'logout']);

    Route::get('/update-password', function () {
        return view('updatePassword', [
            "title" => "HydroSpace | Ubah Password",
            "active" => "Ubah Password"
        ]);
    });

    Route::put('/update-password/{user:username}', [UserController::class, 'updatePassword']);

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
});

Route::middleware(['role:Admin'])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index', [
            "title" => "HydroSpace | Dashboard",
            "active" => "Dashboard"
        ]);
    });

    Route::resource('/admins', AdminController::class)->parameters([
        'admins' => 'user'
    ]);

    Route::resource('/customers', CustomerController::class)->parameters([
        'customers' => 'user'
    ]);

    Route::resource('/profile', AdminProfileController::class)->parameters([
        'profile' => 'user'
    ]);

    Route::post('/keluar', [AdminProfileController::class, 'logout']);

    Route::get('/update-password', function () {
        return view('dashboard.updatePassword', [
            "title" => "HydroSpace | Ubah Password",
            "active" => "Profile"
        ]);
    });

    Route::put('/update-password/{user:username}', [AdminController::class, 'updatePassword']);
});

Route::resource('/dashboard/product', ProductController::class)->middleware(['role:Admin']);

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

Route::get('/dashboard/category', function () {
    return view('dashboard.categories', [
        "title" => "HydroSpace | Daftar Kategori",
        "active" => "Kategori"
    ]);
});

Route::get('/dashboard/category-product/create', function () {
    return view('dashboard.createCategoryProduct', [
        "title" => "HydroSpace | Tambah Kategori Produk",
        "active" => "Kategori"
    ]);
});

Route::get('/dashboard/category-video/create', function () {
    return view('dashboard.createCategoryVideo', [
        "title" => "HydroSpace | Tambah Kategori Video",
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
