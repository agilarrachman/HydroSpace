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
    }
}
