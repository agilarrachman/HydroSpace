<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin HydroSpace',
            'username' => 'admin',
            'email' => 'admin@hydrospace.com',
            'password' => Hash::make('admin123'),
            'gender' => 'Pria',
            'phone_number' => '081234567890',
            'role' => 'Admin',
            'profile_picture' => 'profile_picture/default admin.png',
            'province' => null,
            'city' => null,
            'district' => null,
            'village' => null,
            'full_address' => null,
        ]);

        User::create([
            'username' => 'agilarrachman',
            'email' => 'agil.musthafa11@gmail.com',
            'name' => 'Muhammad Aqil Musthafa Ar Rachman',
            'password' => Hash::make('111'),
            'phone_number' => '081332303211',
            'gender' => 'Pria',
            'role' => 'Customer',
            'profile_picture' => 'profile_picture/XUmrFvy0qbP3vW99N3mNmo5kC6285OTQWJRTftvK.jpg',
            'province' => 15,
            'city' => 250,
            'district' => 3757,
            'village' => 46935,
            'full_address' => 'PERUM KARANG INDAH BLOK BJ 48 C',
            'remember_token' => 'bQJFq04w4nmcsP2W9TurhKMjnpxzWUVOI03CH8Bl9a1NvCGThG...',
            'created_at' => '2025-03-20 09:54:24',
            'updated_at' => '2025-03-23 07:33:28',
        ]);

        User::create([
            'username' => 'agilarrachman1',
            'email' => 'agilarrachman@apps.ipb.ac.id',
            'name' => 'Muhammad Aqil Musthafa Ar Rachman',
            'password' => Hash::make('111'),
            'phone_number' => '081332303211',
            'gender' => 'Pria',
            'role' => 'Customer',
            'profile_picture' => 'profile_picture/default profile picture.jpg',
            'province' => 15,
            'city' => 241,
            'district' => 3579,
            'village' => 44283,
            'full_address' => 'PERUM KARANG INDAH BLOK BJ 48 C',
            'remember_token' => null,
            'created_at' => '2025-03-20 09:57:37',
            'updated_at' => '2025-03-20 09:57:37',
        ]);

        User::create([
            'username' => 'penyungoding',
            'email' => 'penyungoding@gmail.com',
            'name' => 'Penyu Ngoding',
            'password' => Hash::make('penyulucyu'),
            'phone_number' => '081234567890',
            'gender' => 'Wanita',
            'role' => 'Customer',
            'profile_picture' => 'profile_picture/TuHGuzBbqmpn5ceFskWB47sejQEUUn2eTu0mBxRf.png',
            'province' => 12,
            'city' => 179,
            'district' => 2534,
            'village' => 31286,
            'full_address' => 'Jl. Raya Pajajaran, Kota Bogor, Jawa Barat 16128 (...)',
            'remember_token' => 'j3nPfjFe7fIiVT2Ug3gYkcWTWgXa1VwTieocv6tj9tFm0DAXwb...',
            'created_at' => '2025-03-22 16:33:54',
            'updated_at' => '2025-03-22 17:31:30',
        ]);

        ProductCategory::create([
            'id' => 1,
            'name' => '🌱 Bibit & Benih',
            'slug' => 'bibit-benih',
        ]);

        ProductCategory::create([
            'id' => 2,
            'name' => '📦 Paket Hidroponik',
            'slug' => 'paket-hidroponik',
        ]);

        ProductCategory::create([
            'id' => 3,
            'name' => '⚙️ Aksesori & Pendukung',
            'slug' => 'aksesori-pendukung',
        ]);

        ProductCategory::create([
            'id' => 4,
            'name' => '🛠️ Peralatan Hidroponik',
            'slug' => 'peralatan-hidroponik',
        ]);

        ProductCategory::create([
            'id' => 5,
            'name' => '💧 Nutrisi Tanaman',
            'slug' => 'nutrisi-tanaman',
        ]);

        // Product::create([
        //     'category_id' => 1,
        //     'name' => 'Bibit Sawi Segar',
        //     'slug' => 'bibit-sawi',
        //     'picture1' => 'bibit-sawi.png',
        //     'picture2' => '',
        //     'picture3' => '',
        //     'picture4' => '',
        //     'picture5' => '',
        //     'price' => 5000,
        //     'stock' => 100,
        //     'description' => 'Bibit sawi merupakan bibit sayuran yang sangat mudah ditanam dan cepat panen. Bibit sawi ini cocok untuk ditanam di pekarangan rumah, pot, atau lahan pertanian. Bibit sawi ini memiliki kualitas yang baik dan siap tanam.',
        // ]);

        // Product::create([
        //     'category_id' => 2,
        //     'name' => 'Paket Hidroponik Wick 9 Lubang 1 Bak',
        //     'slug' => 'paket-hidroponik-wick-9-lubang-1-bak',
        //     'picture1' => 'bibit-sawi.png',
        //     'picture2' => '',
        //     'picture3' => '',
        //     'picture4' => '',
        //     'picture5' => '',
        //     'price' => 920000,
        //     'stock' => 150,
        //     'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500 s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        // ]);

        // Product::create([
        //     'category_id' => 3,
        //     'name' => 'PH Meter TDS & EC Meter',
        //     'slug' => 'ph-meter-tds-ec-meter',
        //     'picture1' => 'bibit-sawi.png',
        //     'picture2' => '',
        //     'picture3' => '',
        //     'picture4' => '',
        //     'picture5' => '',
        //     'price' => 420000,
        //     'stock' => 150,
        //     'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500 s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        // ]);

        // Product::create([
        //     'category_id' => 4,
        //     'name' => 'Netpot Hidroponik 5cm',
        //     'slug' => 'netpot-hidroponik-5cm',
        //     'picture1' => 'bibit-sawi.png',
        //     'picture2' => '',
        //     'picture3' => '',
        //     'picture4' => '',
        //     'picture5' => '',
        //     'price' => 35000,
        //     'stock' => 720,
        //     'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500 s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        // ]);

        // Product::create([
        //     'category_id' => 5,
        //     'name' => 'Nutrisi Hidroponik AB',
        //     'slug' => 'nutrisi-hidroponik-ab',
        //     'picture1' => 'bibit-sawi.png',
        //     'picture2' => '',
        //     'picture3' => '',
        //     'picture4' => '',
        //     'picture5' => '',
        //     'price' => 120000,
        //     'stock' => 31,
        //     'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500 s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        // ]);
    }
}
