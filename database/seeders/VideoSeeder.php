<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::create([
            'admin_id' => 6, // Sesuaikan dengan ID admin yang ada
            'category_id' => 1, // Sesuaikan dengan ID kategori yang ada
            'title' => 'Panduan Praktis Menanam Sawi Hidroponik',
            'slug' => 'panduan-praktis-menanam-sawi-hidroponik',
            'video' => 'video/sample_video_1.mp4',
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

        $adminIds = [6, 8, 9, 10];
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
    }
}
