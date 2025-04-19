<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use App\Models\Video;
use App\Models\VideoCategory;
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
            'email' => 'admin@gmail.com',
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
            'password' => Hash::make('penyu'),
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

        User::create([
            'username' => 'adminkai',
            'email' => 'kaiser@gmail.com',
            'name' => 'Kaiser',
            'password' => Hash::make('admin123'),
            'phone_number' => '081234567819',
            'gender' => 'Pria',
            'role' => 'Admin',
            'profile_picture' => 'profile_picture/hlR0YYDRk4tEbOjZ0kzJmRECowK8eNb4IfnGqOr2.png',
            'created_at' => '2025-03-26 08:27:59',
            'updated_at' => '2025-03-26 08:27:59'
        ]);

        User::create([
            'username' => 'adminceue',
            'email' => 'juhyun@gmail.com',
            'name' => 'Juhyun',
            'password' => Hash::make('admin123'),
            'phone_number' => '0811234567890',
            'gender' => 'Wanita',
            'role' => 'Admin',
            'profile_picture' => 'profile_picture/O1cczFdGVhZE4boGqbjepH5sOlRSr5NZxUwUghJO.png',
            'created_at' => '2025-03-26 08:29:11',
            'updated_at' => '2025-03-26 08:29:11'
        ]);

        User::create([
            'username' => 'admingondrong',
            'email' => 'zaki@gmail.com',
            'name' => 'Zaki Kurniawan',
            'password' => Hash::make('admin123'),
            'phone_number' => '081234567819',
            'gender' => 'Pria',
            'role' => 'Admin',
            'profile_picture' => 'profile_picture/WlaHwanPsmdFH8FCZfQimay0YORJSB6lfVFVEHUG.png',
            'created_at' => '2025-03-26 08:42:03',
            'updated_at' => '2025-03-26 08:42:03'
        ]);

        User::create([
            'username' => 'pillahhh',
            'email' => 'fillahalfatih@gmail.com',
            'name' => 'Muhammad Fillah Alfatih',
            'password' => Hash::make('111'),
            'phone_number' => '0812345678194',
            'gender' => 'Pria',
            'role' => 'Customer',
            'profile_picture' => 'profile_picture/TVx2kE3BaT26cu8r0cscqrhDdnDQfVfMkZv2u6z6.jpg',
            'province' => 15,
            'city' => 250,
            'district' => 3757,
            'village' => 46935,
            'full_address' => 'PERUM KARANG INDAH BLOK BJ 48 C',
            'created_at' => '2025-03-26 10:41:00',
            'updated_at' => '2025-03-26 13:16:11'
        ]);

        User::create([
            'username' => 'nausssie',
            'email' => 'nurrizkytaaulia@gmail.com',
            'name' => 'Nurrizkyta Aulia Hanifah',
            'password' => Hash::make('111'),
            'phone_number' => '0812345678194',
            'gender' => 'Wanita',
            'role' => 'Customer',
            'profile_picture' => 'profile_picture/TVx2kE3BaT26cu8r0cscqrhDdnDQfVfMkZv2u6z6.jpg',
            'province' => 15,
            'city' => 250,
            'district' => 3757,
            'village' => 46935,
            'full_address' => 'PERUM KARANG INDAH BLOK BJ 48 C',
            'created_at' => '2025-03-26 10:41:00',
            'updated_at' => '2025-03-26 13:16:11'
        ]);

        User::create([
            'username' => 'nasywa',
            'email' => 'nasywa@gmail.com',
            'name' => 'Nasywa Shafa Salsabila',
            'password' => Hash::make('111'),
            'phone_number' => '081332303211',
            'gender' => 'Wanita',
            'role' => 'Customer',
            'profile_picture' => 'profile_picture/69yb2DMmMhMK2RWm5zHXqXgA811Ie3VHZWfoSc0K.jpg',
            'province' => 15,
            'city' => 250,
            'district' => 3757,
            'village' => 46935,
            'full_address' => 'PERUM KARANG INDAH BLOK BJ 48 C',
            'created_at' => '2025-03-28 07:16:32',
            'updated_at' => '2025-03-28 07:16:32'
        ]);

        VideoCategory::create([
            'slug' => 'tips-dan-trik-berkebun-hidroponik',
            'name' => '🎯 Tips dan Trik Berkebun Hidroponik',
            'created_at' => '2025-03-28 08:34:44',
            'updated_at' => '2025-03-28 08:56:49'
        ]);

        VideoCategory::create([
            'slug' => 'nutrisi-dan-pemberian-pupuk',
            'name' => '💧 Nutrisi dan Pemberian Pupuk',
            'created_at' => '2025-03-28 08:40:11',
            'updated_at' => '2025-03-28 08:40:11'
        ]);

        VideoCategory::create([
            'slug' => 'instalasi-dan-perakitan-sistem',
            'name' => '🛠️ Instalasi dan Perakitan Sistem',
            'created_at' => '2025-03-28 08:40:22',
            'updated_at' => '2025-03-28 08:40:22'
        ]);

        VideoCategory::create([
            'slug' => 'pemilihan-dan-perawatan-tanaman',
            'name' => '🌱 Pemilihan dan Perawatan Tanaman',
            'created_at' => '2025-03-28 08:40:35',
            'updated_at' => '2025-03-28 08:40:35'
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 1,
            'title' => 'Jujutsu Kaisen',
            'slug' => 'jujutsu-kaisen',
            'video' => 'video/uMcfPI7jkfvMrPJe2bKu8kGCM5tHnNhsFn8NqhhE.mp4',
            'thumbnail' => 'thumbnail/dAVlyeEb0W08c9NDUseUBpSwNzdifcnvuCstDSDv.jpg',
            'duration' => 11,
            'difficulty_level' => 'Menengah',
            'delivery_style' => 'Panduan Praktis',
            'description' => 'ini deskripsi video sukuna gelut lawan gojo',
            'objective_heading1' => 'Memilih Bibit Sawi yang Unggul',
            'objective_description1' => 'Ketahui ciri-ciri bibit berkualitas tinggi untuk pertumbuhan sawi yang sehat dan hasil panen maksimal.',
            'objective_heading2' => 'Menyiapkan Sistem Hidroponik dengan Benar',
            'objective_description2' => 'Panduan memilih dan mengatur sistem hidroponik yang sesuai agar sawi tumbuh optimal tanpa kendala.',
            'objective_heading3' => 'Pemberian Nutrisi yang Tepat',
            'objective_description3' => 'Menentukan kadar nutrisi AB Mix, pH, dan PPM yang ideal agar sawi berkembang dengan baik dan tidak mudah layu.',
            'objective_heading4' => 'Teknik Panen dan Penyimpanan Sawi',
            'objective_description4' => 'Cara memanen sawi hidroponik dengan benar agar tetap segar lebih lama dan siap dikonsumsi kapan saja.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 1,
            'title' => 'Panduan Praktis Menanam Sawi Hidroponik',
            'slug' => 'panduan-praktis-menanam-sawi-hidroponik',
            'video' => 'video/1.mp4',
            'thumbnail' => 'thumbnail/tips_menanam_bayam.jpeg',
            'duration' => 120,
            'difficulty_level' => 'Pemula',
            'delivery_style' => 'Panduan Praktis',
            'description' => 'Ingin menanam sawi hidroponik sendiri di rumah? Video ini akan membimbingmu dari pemilihan bibit, perawatan nutrisi, hingga panen dengan hasil yang maksimal. Cocok untuk pemula maupun yang ingin meningkatkan teknik bercocok tanam hidroponik!',
            'objective_heading1' => 'Memilih Bibit Sawi yang Unggul',
            'objective_description1' => 'Ketahui ciri-ciri bibit berkualitas tinggi untuk pertumbuhan sawi yang sehat dan hasil panen maksimal.',
            'objective_heading2' => 'Menyiapkan Sistem Hidroponik dengan Benar',
            'objective_description2' => 'Panduan memilih dan mengatur sistem hidroponik yang sesuai agar sawi tumbuh optimal tanpa kendala.',
            'objective_heading3' => 'Pemberian Nutrisi yang Tepat',
            'objective_description3' => 'Menentukan kadar nutrisi AB Mix, pH, dan PPM yang ideal agar sawi berkembang dengan baik dan tidak mudah layu.',
            'objective_heading4' => 'Teknik Panen dan Penyimpanan Sawi',
            'objective_description4' => 'Cara memanen sawi hidroponik dengan benar agar tetap segar lebih lama dan siap dikonsumsi kapan saja.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 2,
            'title' => 'Panduan Instalasi Sistem NFT Hidroponik',
            'slug' => 'panduan-instalasi-sistem-nft-hidroponik',
            'video' => 'video/sample_video_2.mp4',
            'thumbnail' => 'thumbnail/instalasi_hidroponik.jpeg',
            'duration' => 180,
            'difficulty_level' => 'Menengah',
            'delivery_style' => 'Tutorial Instalasi',
            'description' => 'Pelajari cara memasang sistem hidroponik NFT (Nutrient Film Technique) dengan benar! Video ini membahas alat dan bahan yang dibutuhkan, cara merakit pipa, memasang pompa, hingga memastikan aliran nutrisi berjalan optimal. Cocok untuk pemula yang ingin memulai hidroponik modern dengan hasil maksimal!',
            'objective_heading1' => 'Instalasi Pipa',
            'objective_description1' => 'Cara memasang pipa untuk sistem NFT.',
            'objective_heading2' => 'Pengaturan Pompa',
            'objective_description2' => 'Mengatur pompa untuk aliran nutrisi.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 3,
            'title' => 'Rahasia Nutrisi AB Mix untuk Pertumbuhan Optimal',
            'slug' => 'rahasia-nutrisi-ab-mix-untuk-pertumbuhan-optimal',
            'video' => 'video/sample_video_3.mp4',
            'thumbnail' => 'thumbnail/rahasia_nutrisi_ab_mix.jpg',
            'duration' => 150,
            'difficulty_level' => 'Ahli',
            'delivery_style' => 'Tips Nutrisi',
            'description' => 'Pelajari cara mencampur dan mengatur dosis AB Mix yang tepat agar tanaman hidroponik tumbuh subur. Kami juga membahas cara menjaga keseimbangan pH dan PPM dalam larutan nutrisi untuk hasil panen terbaik.',
            'objective_heading1' => 'Pencampuran Nutrisi',
            'objective_description1' => 'Cara mencampur nutrisi AB Mix dengan benar.',
            'objective_heading2' => 'Pemberian Nutrisi',
            'objective_description2' => 'Waktu dan cara pemberian nutrisi yang tepat.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 4,
            'title' => '5 Kesalahan Umum dalam Hidroponik & Cara Menghindarinya',
            'slug' => 'kesalahan-umum-dalam-hidroponik-dan-cara-menghindarinya',
            'video' => 'video/sample_video_4.mp4',
            'thumbnail' => 'thumbnail/kesalahan_umum_hidroponik.jpg',
            'duration' => 200,
            'difficulty_level' => 'Pemula',
            'delivery_style' => 'Tips dan Trik',
            'description' => 'Hindari kesalahan yang sering dilakukan pemula dalam berkebun hidroponik! Dari pengaturan air hingga pemilihan media tanam, video ini akan membantu Anda mencapai hasil yang lebih maksimal.',
            'objective_heading1' => 'Kesalahan Pemula',
            'objective_description1' => 'Kesalahan umum yang sering dilakukan pemula dalam hidroponik.',
            'objective_heading2' => 'Solusi Praktis',
            'objective_description2' => 'Cara mudah untuk mengatasi kesalahan dan meningkatkan hasil hidroponik.',
            'objective_heading3' => 'Pemeliharaan Sistem',
            'objective_description3' => 'Cara merawat sistem hidroponik agar tetap optimal dan berfungsi dengan baik.',
            'objective_heading4' => 'Pemilihan Tanaman',
            'objective_description4' => 'Cara memilih tanaman yang sesuai dengan metode hidroponik untuk hasil maksimal.'
        ]);

        $thumbnails = [
            'thumbnail/kesalahan_umum_hidroponik.jpg',
            'thumbnail/rahasia_nutrisi_ab_mix.jpg',
            'thumbnail/instalasi_hidroponik.jpeg',
            'thumbnail/tips_menanam_bayam.jpeg'
        ];

        $adminIds = [1, 5, 6, 7];
        $categoryIds = [1, 2, 3, 4];

        for ($i = 0; $i < 30; $i++) {
            Video::create([
                'admin_id' => $adminIds[array_rand($adminIds)],
                'category_id' => $categoryIds[array_rand($categoryIds)],
                'title' => 'Video Dummy Title ' . ($i + 1),
                'slug' => 'video-dummy-title-' . ($i + 1),
                'video' => 'video/sample_video_' . rand(1, 5) . '.mp4',
                'thumbnail' => $thumbnails[array_rand($thumbnails)],
                'duration' => rand(180, 300),
                'difficulty_level' => ['Pemula', 'Menengah', 'Ahli'][array_rand(['Pemula', 'Menengah', 'Ahli'])],
                'delivery_style' => ['Tips dan Trik', 'Tutorial', 'Panduan'][array_rand(['Tips dan Trik', 'Tutorial', 'Panduan'])],
                'description' => 'Deskripsi video dummy ' . ($i + 1),
                'objective_heading1' => 'Kesalahan Pemula',
                'objective_description1' => 'Kesalahan umum dalam pemula hidroponik.',
                'objective_heading2' => 'Solusi Praktis',
                'objective_description2' => 'Solusi mudah untuk hasil lebih baik.',
                'objective_heading3' => 'Pemeliharaan Sistem',
                'objective_description3' => 'Pemeliharaan sistem hidroponik yang efektif.',
                'objective_heading4' => 'Pemilihan Tanaman',
                'objective_description4' => 'Pemilihan tanaman sesuai dengan hidroponik.'
            ]);
        }

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

        Product::create([
            'category_id' => 1,
            'name' => 'Bibit Sawi Segar',
            'slug' => 'bibit-sawi',
            'picture1' => 'product_images/bibit-sawi.png',
            'picture2' => 'product_images/fdkhgmiGr9NJHesXEz59NXnMVXSN9GexBPrsZ6bw.png',
            'picture3' => 'product_images/9dAGOhnIfiPfkvwMtjAAzCs9iXDzmmmdIsNx9NKM.jpg',
            'picture4' => '',
            'picture5' => '',
            'price' => 5000,
            'stock' => 100,
            'description' => '<p>Dapatkan bibit sawi berkualitas tinggi yang siap tumbuh dengan cepat dan&nbsp;subur! Cocok untuk sistem hidroponik maupun tanah, bibit ini memiliki tingkat&nbsp;keberhasilan tinggi dan daya tahan yang baik. Dengan perawatan yang tepat,&nbsp;Anda bisa menikmati panen sawi segar dalam waktu singkat.</p>
<p>🔹 Keunggulan:<br>✅ Pertumbuhan cepat &amp; hasil melimpah<br>✅ Cocok untuk hidroponik &amp; kebun konvensional<br>✅ Tingkat keberhasilan tinggi &amp; bebas hama</p>
<p>Kemasan: Dikemas secara kedap udara untuk menjaga kesegaran bibit.<br>Berat Bersih: 50 gram (&plusmn;5.000 butir biji).<br>Daya Tumbuh: &ge;85% dengan perawatan yang tepat.<br>Masa Panen: 25-30 hari setelah semai.<br>Media Tanam: Cocok untuk hidroponik, tanah, atau polybag.<br>Petunjuk Penyemaian: Direndam selama 6-12 jam sebelum ditanam untuk<br>mempercepat perkecambahan.<br>Kualitas Terjamin: Bebas dari hama &amp; penyakit, siap tumbuh dengan optimal.</p>',
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Paket Hidroponik Wick 9 Lubang 1 Bak',
            'slug' => 'paket-hidroponik-wick-9-lubang-1-bak',
            'picture1' => 'product_images/bibit-sawi.png',
            'picture2' => '',
            'picture3' => '',
            'picture4' => '',
            'picture5' => '',
            'price' => 920000,
            'stock' => 150,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500 s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'PH Meter TDS & EC Meter',
            'slug' => 'ph-meter-tds-ec-meter',
            'picture1' => 'product_images/bibit-sawi.png',
            'picture2' => '',
            'picture3' => '',
            'picture4' => '',
            'picture5' => '',
            'price' => 420000,
            'stock' => 150,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500 s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'Netpot Hidroponik 5cm',
            'slug' => 'netpot-hidroponik-5cm',
            'picture1' => 'product_images/bibit-sawi.png',
            'picture2' => '',
            'picture3' => '',
            'picture4' => '',
            'picture5' => '',
            'price' => 35000,
            'stock' => 720,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500 s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        ]);

        Product::create([
            'category_id' => 5,
            'name' => 'Nutrisi Hidroponik AB',
            'slug' => 'nutrisi-hidroponik-ab',
            'picture1' => 'product_images/bibit-sawi.png',
            'picture2' => '',
            'picture3' => '',
            'picture4' => '',
            'picture5' => '',
            'price' => 120000,
            'stock' => 31,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500 s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        ]);
    }
}
