<?php

use App\Models\User;
use App\Livewire\Chat;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\VideoCategory;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\VideoCategoryController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProductCategoryController;

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

    Route::get('/produk', [ProductController::class, 'customerIndex']);

    Route::get('/produk/{product:slug}', [ProductController::class, 'customerShow']);

    Route::get('/edukasi', [VideoController::class, 'indexCustomer']);

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

// Route::get('/dashboard/chat', function () {
//     return view('dashboard.chat', [
//         "title" => "HydroSpace | Chat Customer",
//         "active" => "Chat Customer"
//     ]);
// });

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

    Route::get('/edukasi/{video:slug}', [VideoController::class, 'showCustomer']);

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

    Route::resource('/videos', VideoController::class);
    Route::get('/video/checkSlug/', [VideoController::class, 'checkSlug']);
    Route::get('/getProducts', [VideoController::class, 'getProducts']);
    Route::get('/getSelectedProducts/{video}', [VideoController::class, 'getSelectedProducts']);

    Route::get('/categories', function (Request $request) {
        // Ambil semua data video categories
        $productCategories = ProductCategory::query();

        // Jika ada pencarian, lakukan filter berdasarkan nama atau slug
        if ($request->has('searchProductCategory')) {
            $search = $request->input('searchProductCategory');
            $productCategories->where('name', 'like', '%' . $search . '%')
                ->orWhere('slug', 'like', '%' . $search . '%');
        }

        // Ambil semua data video categories
        $videoCategories = VideoCategory::query();

        // Jika ada pencarian, lakukan filter berdasarkan nama atau slug
        if ($request->has('searchVideoCategory')) {
            $search = $request->input('searchVideoCategory');
            $videoCategories->where('name', 'like', '%' . $search . '%')
                ->orWhere('slug', 'like', '%' . $search . '%');
        }

        return view('dashboard.categories.index', [
            "title" => "HydroSpace | Daftar Kategori",
            "active" => "Kategori",
            "videoCategories" => $videoCategories->get(),
            "productCategories" => $productCategories->get()
        ]);
    });

    Route::resource('/product-categories', ProductCategoryController::class);
    Route::get('/productCategories/checkSlug/', [ProductCategoryController::class, 'checkSlug']);
    Route::resource('/video-categories', VideoCategoryController::class);
    Route::get('/videoCategories/checkSlug/', [VideoCategoryController::class, 'checkSlug']);

    Route::get('/getProducts', function () {
        return response()->json(Product::select('id', 'name')->get());
    });

    Route::resource('/products', ProductController::class);

    Route::get('/chat', function () {
        return view('dashboard.chat', [
            "title" => "HydroSpace | Chat Customer",
            "active" => "Chat Customer",
            "users" => User::where('role', 'Customer')->get()
        ]);
    });

    Route::get('/chat/{user:id}', Chat::class)->name('chat');

    Route::get('/Product/checkSlug', [ProductController::class, 'checkSlug']);
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
// END DASHBOARD ROUTE
