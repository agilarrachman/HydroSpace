<?php

namespace Database\Seeders;

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
            'password' => '$2y$12$/r8awVejQbZuoknHj63scuF.TwJoQXyO8tzeToF0N5m...',
            'phone_number' => '081332303211',
            'gender' => 'Pria',
            'role' => 'Customer',
            'profile_picture' => 'profile_picture/XUmrFvy0qbP3vW99N3mNmo5kC6285OTQWJ...',
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
            'password' => '$2y$12$6cYUXQgSuBcYd/VtKALhR.GcFWGO3dhM/..9Oj4MxwG...',
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
            'password' => '$2y$12$d1K9GbHEhSRH3bqFgKbUquvUtloTshrebTOBX3VpNuF...',
            'phone_number' => '081234567890',
            'gender' => 'Wanita',
            'role' => 'Customer',
            'profile_picture' => 'profile_picture/TuHGuzBbqmpn5ceFskWB47sejQEUUn2eTu...',
            'province' => 12,
            'city' => 179,
            'district' => 2534,
            'village' => 31286,
            'full_address' => 'Jl. Raya Pajajaran, Kota Bogor, Jawa Barat 16128 (...)',
            'remember_token' => 'j3nPfjFe7fIiVT2Ug3gYkcWTWgXa1VwTieocv6tj9tFm0DAXwb...',
            'created_at' => '2025-03-22 16:33:54',
            'updated_at' => '2025-03-22 17:31:30',
        ]);
    }
}
