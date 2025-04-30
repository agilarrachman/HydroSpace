<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use App\Models\Video;
use App\Models\VideoCategory;
use App\Models\VideoView;
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
            'profile_picture' => 'profile_picture/pp pillah.jpg',
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
            'title' => 'Panduan Praktis Menanam Sawi Hidroponik',
            'slug' => 'panduan-praktis-menanam-sawi-hidroponik',
            'video' => 'video/1.mp4',
            'thumbnail' => 'thumbnail/tips_menanam_bayam.jpeg',
            'duration' => 120,
            'difficulty_level' => 'Pemula',
            'delivery_style' => 'Panduan Praktis',
            'description' => 'Hai HydroMates! 👋 Ingin menanam sawi hidroponik sendiri di rumah? Video ini akan membimbingmu dari pemilihan bibit, perawatan nutrisi, hingga panen dengan hasil yang maksimal. Cocok untuk pemula maupun yang ingin meningkatkan teknik bercocok tanam hidroponik!',
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
            'title' => 'HydroMates Wajib Tahu! 9 Jebakan Pemula Biar Gak Boncos',
            'slug' => 'hydromates-wajib-tahu-9-jebakan-pemula-biar-gak-boncos',
            'video' => 'video/Tutorial Hidroponik Sederhana Lengkap dan Mudah Untuk Pemula _ Simple Hydroponics at home.mp4',
            'thumbnail' => 'thumbnail/8h0HLYv215uZYUcHvHGmR2HNz3mDJqvdWwMpfcXc.jpg',
            'duration' => 9,
            'difficulty_level' => 'Pemula',
            'delivery_style' => 'Informatif, friendly, dan solutif',
            'description' => 'Hai HydroMates! 👋 Baru mau coba hidroponik? Tonton ini dulu biar gak boncos! ➡️ Video ini kupas tuntas 9 kesalahan pemula yang sering bikin gagal panen. Dijamin, setelah nonton, berkebun hidroponikmu makin lancar jaya! 😉',
            'objective_heading1' => 'Hindari Jebakan Pemula! 9 Kesalahan Fatal di Hidroponik',
            'objective_description1' => 'Pemula sering kurang memahami dasar hidroponik, padahal ini penting banget.',
            'objective_heading2' => 'Sukses Hidroponik Sejak Awal: Tips Jitu untuk HydroMates!',
            'objective_description2' => 'Pelajari dulu fondasi hidroponik yang kuat sebelum mulai menanam.',
            'objective_heading3' => 'Jangan Sampai Gagal! Dampak Buruk Kesalahan Pemula di Hidroponik',
            'objective_description3' => 'Kesalahan awal bisa bikin benih terbuang percuma dan panen tidak maksimal.',
            'objective_heading4' => 'Mulai Hidroponik dengan Mantap: Panduan Anti Gagal untuk Pemula',
            'objective_description4' => 'Bekali diri dengan ilmu dasar hidroponik yang benar sebelum memulai praktik.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 1,
            'title' => 'Tutorial Hidroponik Kangkung Pemula: Mudah dari Nol Sampai Panen!',
            'slug' => 'tutorial-hidroponik-kangkung-pemula-mudah-dari-nol-sampai-panen',
            'video' => 'video/Tutorial Hidroponik Sederhana Lengkap dan Mudah Untuk Pemula _ Simple Hydroponics at home.mp4',
            'thumbnail' => 'thumbnail/kangkung.jpg',
            'duration' => 9,
            'difficulty_level' => 'Pemula',
            'delivery_style' => 'Step-by-step, Jelas, Ramah',
            'description' => 'Hai HydroMates! 👋 Pengen coba hidroponik di rumah tapi bingung mulai dari mana? 🤩 Tonton tutorial lengkap ini dari nol sampai panen kangkung! Dijamin mudah diikuti, cocok banget buat pemula! 🌱',
            'objective_heading1' => 'Persiapan Awal Semai Benih Kangkung',
            'objective_description1' => 'Siapkan wadah, tisu basah, dan benih kangkung pilihanmu untuk memulai proses penyemaian yang benar.',
            'objective_heading2' => 'Proses Penyemaian Benih Hingga Berkecambah',
            'objective_description2' => 'Ikuti langkah-langkah merendam, menabur benih, menyimpan di tempat gelap, hingga membantu benih yang \'nungging\' agar tumbuh optimal.',
            'objective_heading3' => 'Membuat Larutan Nutrisi AB Mix untuk Hidroponik',
            'objective_description3' => 'Pelajari cara melarutkan serbuk nutrisi A dan B secara terpisah dengan takaran yang tepat menggunakan air.',
            'objective_heading4' => 'Memberikan Nutrisi pada Bibit Kangkung Hidroponik',
            'objective_description4' => 'Setelah 7 hari, bibit kangkung siap diberi nutrisi AB Mix yang sudah dilarutkan dengan benar.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 1,
            'title' => 'Panen Selada Segar di Rumah? Ini Dia Panduan Hidroponik Lengkap!',
            'slug' => 'panduan-menanam-selada-hidroponik-lengkap',
            'video' => 'video/Panduan Menanam Selada Hidroponik Lengkap.mp4',
            'thumbnail' => 'thumbnail/selada.jpg',
            'duration' => 7,
            'difficulty_level' => 'Pemula',
            'delivery_style' => 'Informatif dan Praktis',
            'description' => 'HydroMates, mau selada segar terus di rumah? Yuk, ikuti panduan lengkap menanam selada hidroponik dari semai sampai panen! 🌱🥬',
            'objective_heading1' => 'Persiapan Penyemaian Selada Hidroponik',
            'objective_description1' => 'Pelajari langkah-langkah awal menyemai bibit selada dengan media rockwool yang benar.',
            'objective_heading2' => 'Tahap Persemaian dan Pemindahan Bibit',
            'objective_description2' => 'Ketahui cara memindahkan bibit selada yang sudah berkecambah ke sistem persemaian dengan nutrisi yang tepat.',
            'objective_heading3' => 'Proses Peremajaan dan Pendewasaan Selada',
            'objective_description3' => 'Pahami tahapan pemindahan selada ke meja peremajaan dan pendewasaan untuk pertumbuhan optimal.',
            'objective_heading4' => 'Panen Selada Hidroponik yang Subur',
            'objective_description4' => 'Lihat hasil panen selada hidroponik yang besar dan segar, bahkan mencapai setengah kilogram per tanaman!',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 1,
            'title' => 'Pakcoy Auto Sukses! Cara Semai Hidroponik Anti Gagal untuk Pemula',
            'slug' => 'cara-semai-pakcoy-hidroponik-anti-gagal',
            'video' => 'video/Cara semai pakcoy di rockwool - Anti kutilang Hidroponik.mp4',
            'thumbnail' => 'thumbnail/chards.jpg',
            'duration' => 7,
            'difficulty_level' => 'Pemula',
            'delivery_style' => 'Informatif dan Praktis',
            'description' => 'Hai HydroMates! Bingung cara semai pakcoy di rockwool biar gak kutilang? Tonton video ini sampai habis! Dijamin semaianmu sukses! 🌱',
            'objective_heading1' => 'Persiapan Awal Semai Pakcoy',
            'objective_description1' => 'Pelajari cara memilih benih pakcoy yang bagus dan teknik perendamannya.',
            'objective_heading2' => 'Media Semai Rockwool yang Tepat',
            'objective_description2' => 'Ketahui cara menyiapkan rockwool sebagai media semai yang ideal dan melubanginya dengan benar.',
            'objective_heading3' => 'Langkah-Langkah Menanam Benih di Rockwool',
            'objective_description3' => 'Simak tutorial lengkap cara menanam benih pakcoy ke dalam rockwool agar cepat berkecambah dan terlindung dari hama.',
            'objective_heading4' => 'Perawatan Semaian Hingga Siap Tanam',
            'objective_description4' => 'Panduan lengkap tentang pencahayaan, penyiraman, dan ciri-ciri semaian pakcoy yang sehat dan siap dipindah tanam.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 1,
            'title' => 'Cabe Rawit Merah Merona di Rumah? Bongkar Rahasia Hidroponik Box Es Krim!',
            'slug' => 'menanam-cabe-rawit-hidroponik-box-es-krim',
            'video' => 'video/Menanam cabe rawit hidroponik.mp4',
            'thumbnail' => 'thumbnail/chilli-pepper-dark-surface.jpg',
            'duration' => 9,
            'difficulty_level' => 'Pemula',
            'delivery_style' => 'Praktis dan Sederhana',
            'description' => 'HydroMates, siapa bilang hidroponik itu ribet? Buktikan sendiri! Kita tanam cabe rawit super pedas pakai box es krim bekas. Dijamin berhasil! 🔥🌶️',
            'objective_heading1' => 'Persiapan Wadah dan Nutrisi Hidroponik',
            'objective_description1' => 'Pelajari cara membuat wadah hidroponik sederhana dari box es krim dan meracik larutan nutrisi AB mix yang tepat.',
            'objective_heading2' => 'Penanaman Bibit Cabe Rawit',
            'objective_description2' => 'Ketahui cara membersihkan akar bibit cabe, menggunakan spons, netpot, dan menambahkan media tanam kerikil.',
            'objective_heading3' => 'Perawatan Cabe Rawit Hidroponik Hingga Berbuah',
            'objective_description3' => 'Simak tips pemotongan pucuk, penambahan nutrisi berkala, dan pemupukan daun untuk hasil panen maksimal.',
            'objective_heading4' => 'Panen Cabe Rawit Hidroponik yang Melimpah',
            'objective_description4' => 'Lihat bagaimana cabe rawit tumbuh subur dan menghasilkan banyak buah merah merona yang siap dipanen di rumah.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 2,
            'title' => 'Jangan Sampai Salah! Ini Cara Benar Kasih Nutrisi Hidroponik Biar Sayuranmu Subur Jaya!',
            'slug' => 'cara-memberi-nutrisi-tanaman-hidroponik',
            'video' => 'video/Cara Memberi Nutrisi Tanaman Hidroponik.mp4',
            'thumbnail' => 'thumbnail/cara memberi nutrisi.jpg',
            'duration' => 5,
            'difficulty_level' => 'Pemula',
            'delivery_style' => 'Praktis dan Informatif',
            'description' => 'HydroMates, masih bingung kasih makan tanaman hidroponikmu? Tonton video ini! Kita bahas tuntas cara pakai pupuk AB Mix dan kapan air nutrisi perlu ditambah/diganti! 🥬💧',
            'objective_heading1' => 'Mengenal Nutrisi AB Mix untuk Hidroponik',
            'objective_description1' => 'Pahami apa itu pupuk AB Mix, kenapa terdiri dari pekatan A dan B, serta takaran awal pemberian nutrisi saat tanam.',
            'objective_heading2' => 'Kapan dan Bagaimana Menambah/Mengganti Air Nutrisi',
            'objective_description2' => 'Ketahui frekuensi penambahan air nutrisi yang tepat dan kapan saatnya mengganti seluruh larutan dalam sistem hidroponik.',
            'objective_heading3' => 'Takaran Nutrisi AB Mix yang Benar untuk Sayuran Daun',
            'objective_description3' => 'Pelajari dosis standar penggunaan pekatan A dan B untuk berbagai jenis sayuran daun seperti kangkung, sawi, bayam, dan pakcoy.',
            'objective_heading4' => 'Tips Lebih Akurat dengan TDS Meter dan Tabel PPM',
            'objective_description4' => 'Manfaatkan alat TDS meter dan tabel PPM sebagai panduan untuk memberikan nutrisi yang lebih presisi sesuai kebutuhan tanaman.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 2,
            'title' => 'Rahasia Panen Melimpah! Kupas Tuntas Nutrisi Hidroponik AB Mix untuk Semua Tanaman',
            'slug' => 'nutrisi-hidroponik-ab-mix-sejuta-manfaat',
            'video' => 'video/NUTRISI HIDROPONIK AB MIX, NUTRISI TANAMAN SEJUTA MANFAAT.mp4',
            'thumbnail' => 'thumbnail/abmix.jpg',
            'duration' => 7,
            'difficulty_level' => 'Menengah',
            'delivery_style' => 'Informatif dan Antusias',
            'description' => 'HydroMates, penasaran kenapa AB Mix jadi andalan hidroponik? Yuk, kita bongkar kandungan, fungsi, dan cara pakainya untuk semua jenis tanaman! 🚀✨',
            'objective_heading1' => 'Mengenal Lebih Dekat Nutrisi Hidroponik AB Mix',
            'objective_description1' => 'Pahami apa itu AB Mix, kenapa terdiri dari dua bagian (A dan B), serta kandungan unsur hara makro dan mikro esensial di dalamnya.',
            'objective_heading2' => 'Keunggulan dan Manfaat AB Mix untuk Tanaman',
            'objective_description2' => 'Ketahui berbagai kelebihan pupuk AB Mix, mulai dari kelarutan sempurna hingga formulasinya yang spesifik untuk berbagai jenis tanaman.',
            'objective_heading3' => 'Cara Tepat Melarutkan dan Menggunakan AB Mix',
            'objective_description3' => 'Pelajari langkah demi langkah melarutkan AB Mix menjadi larutan stok pekat dan cara pengencerannya sesuai kebutuhan tanaman dengan alat TDS meter.',
            'objective_heading4' => 'AB Mix untuk Semua Jenis Tanaman? Bisa Banget!',
            'objective_description4' => 'Temukan bagaimana AB Mix tidak hanya untuk hidroponik, tapi juga efektif untuk tanaman hortikultura, tanaman hias, hingga tanaman keras.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 2,
            'title' => 'Wajib Tahu! Rahasia Ukur Nutrisi Hidroponik dengan PPM Biar Tanaman Gak Stres',
            'slug' => 'ppm-nutrisi-hidroponik-pengertian-cara-ukur-tabel',
            'video' => 'video/PPM NUTRISI HIDROPONIK (pengertian, cara mengukur dan tabel tahapan PPM nutrisi hidroponik).mp4',
            'thumbnail' => 'thumbnail/ppm.jpg',
            'duration' => 7,
            'difficulty_level' => 'Pemula',
            'delivery_style' => 'Informatif dan Mudah Dipahami',
            'description' => 'HydroMates, bingung soal PPM nutrisi hidroponik? Tenang! Video ini jelasin pengertian, cara ukur pakai TDS meter, sampai tabel PPM ideal buat tanamanmu! 😉💧',
            'objective_heading1' => 'Mengenal Apa Itu PPM dalam Hidroponik',
            'objective_description1' => 'Pahami definisi PPM (Part Per Million) dan pentingnya mengukur kadar nutrisi untuk pertumbuhan tanaman hidroponik yang optimal.',
            'objective_heading2' => 'Langkah Mudah Mengukur PPM Nutrisi dengan TDS Meter',
            'objective_description2' => 'Simak tutorial praktis cara menggunakan alat TDS meter untuk mengukur kadar PPM larutan nutrisi hidroponik di rumah.',
            'objective_heading3' => 'Cara Mengontrol dan Menyesuaikan Kadar PPM Nutrisi',
            'objective_description3' => 'Pelajari tips mengatasi kadar PPM yang terlalu rendah atau terlalu tinggi agar nutrisi tanaman selalu ideal.',
            'objective_heading4' => 'Solusi Ukur PPM Tanpa TDS Meter (Cara Sementara)',
            'objective_description4' => 'Temukan cara memperkirakan kadar PPM nutrisi hidroponik tanpa menggunakan TDS meter dengan berpedoman pada dosis baku kemasan.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 3,
            'title' => 'Rakit Sendiri! Panduan Lengkap Pasang Sistem Hidroponik NFT di Rumah',
            'slug' => 'cara-memasang-rangkaian-sistem-hidroponik-nft',
            'video' => 'video/Cara Memasang Rangkaian Sistem Hidroponik NFT _ Install the NFT Hydroponic System.mp4',
            'thumbnail' => 'thumbnail/instalasi_hidroponik.jpeg',
            'duration' => 5,
            'difficulty_level' => 'Pemula',
            'delivery_style' => 'Informatif dan Step-by-step',
            'description' => 'HydroMates, lahan sempit bukan halangan! Ikuti langkah demi langkah merakit sistem hidroponik NFT impianmu dan mulai berkebun sayuran segar! 🛠️🌿',
            'objective_heading1' => 'Mengenal Komponen Utama Sistem Hidroponik NFT',
            'objective_description1' => 'Identifikasi berbagai komponen penting dalam sistem NFT, mulai dari pipa, ember nutrisi, pompa, hingga netpot dan rockwool.',
            'objective_heading2' => 'Langkah Demi Langkah Merakit Rangkaian Pipa NFT',
            'objective_description2' => 'Pelajari cara menyusun dan menyambungkan pipa berdiameter kecil, pipa gully, dan pipa penghubung dengan benar agar tidak bocor.',
            'objective_heading3' => 'Memasang Selang dan Pipa ke Ember Nutrisi',
            'objective_description3' => 'Ketahui cara menghubungkan selang dari pompa ke rangkaian NFT dan memasang pipa pembuangan air kembali ke ember nutrisi.',
            'objective_heading4' => 'Hasil Akhir Perakitan Sistem Hidroponik NFT Sederhana',
            'objective_description4' => 'Lihat tampilan akhir sistem hidroponik NFT yang siap digunakan untuk menanam berbagai jenis sayuran di lahan terbatas.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 3,
            'title' => 'Pilih Mana? Bongkar Perbedaan Sistem Hidroponik NFT vs DFT!',
            'slug' => 'perbedaan-sistem-nft-dan-dft-hidroponik',
            'video' => 'video/BEDANYA SISTEM NFT DAN DFT PADA TANAMAN HIDROPONIK.mp4',
            'thumbnail' => 'thumbnail/nft dft.jpg',
            'duration' => 4,
            'difficulty_level' => 'Menengah',
            'delivery_style' => 'Informatif dan Perbandingan Langsung',
            'description' => 'HydroMates, lagi pilih-pilih sistem hidroponik? Yuk, kita bedah tuntas perbedaan NFT dan DFT biar kamu gak salah pilih! Mana yang lebih cocok buatmu? 🤔🌱',
            'objective_heading1' => 'Mengenal Lebih Dekat Sistem Hidroponik NFT',
            'objective_description1' => 'Pahami konsep dasar sistem NFT (Nutrient Film Technique) dengan lapisan nutrisi dangkal dan sirkulasi terus-menerus.',
            'objective_heading2' => 'Mengenal Lebih Dekat Sistem Hidroponik DFT',
            'objective_description2' => 'Pahami konsep dasar sistem DFT (Deep Flow Technique) dengan genangan air nutrisi di dalam pipa.',
            'objective_heading3' => 'Perbandingan Kelebihan dan Kekurangan NFT vs DFT',
            'objective_description3' => 'Analisis perbedaan utama antara NFT dan DFT, termasuk keuntungan dalam efisiensi nutrisi dan kekurangan saat listrik padam.',
            'objective_heading4' => 'Tips Memilih Sistem Hidroponik yang Tepat untukmu',
            'objective_description4' => 'Dapatkan panduan untuk menentukan sistem NFT atau DFT mana yang paling sesuai dengan kebutuhan dan kondisi lingkunganmu.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 4,
            'title' => 'Rahasia Tanaman Hidroponik Subur Bebas Penyakit! Ini Dia Cara Perawatan yang Benar!',
            'slug' => 'cara-merawat-tanaman-hidroponik-dengan-baik-dan-benar',
            'video' => 'video/CARA MERAWAT TANAMAN HIDROPONIK DENGAN BAIK DAN BENAR.mp4',
            'thumbnail' => 'thumbnail/rahasia subur.jpg',
            'duration' => 3,
            'difficulty_level' => 'Menengah',
            'delivery_style' => 'Informatif dan Praktis',
            'description' => 'HydroMates, mau tanaman hidroponikmu tumbuh sehat dan panen melimpah? Yuk, ikuti tips perawatan air, nutrisi, dan kebersihan sistem hidroponik ini! 🌱💦',
            'objective_heading1' => 'Pentingnya Pengecekan dan Penggantian Air Nutrisi',
            'objective_description1' => 'Pelajari cara menjaga kebersihan air dalam bak penampungan dan frekuensi ideal untuk penggantian air nutrisi agar tanaman tetap sehat.',
            'objective_heading2' => 'Mengontrol Ketersediaan dan Dosis Larutan Nutrisi',
            'objective_description2' => 'Ketahui cara memantau kondisi larutan nutrisi, frekuensi penggantian, dan dosis pemberian yang tepat untuk pertumbuhan optimal.',
            'objective_heading3' => 'Mencegah Penyumbatan dan Memastikan Kelancaran Nutrisi',
            'objective_description3' => 'Pahami pentingnya memeriksa saluran nutrisi dari potensi penyumbatan dan cara menjaga kelancaran aliran larutan nutrisi ke tanaman.',
            'objective_heading4' => 'Sanitasi Lingkungan untuk Tanaman Hidroponik yang Sehat',
            'objective_description4' => 'Pelajari pentingnya menjaga kebersihan wadah dan lingkungan sekitar sistem hidroponik untuk mencegah timbulnya hama dan penyakit.',
        ]);

        Video::create([
            'admin_id' => 6,
            'category_id' => 4,
            'title' => 'Hidroponik Sistem Wick Tetap Subur! Ini Rahasia Perawatannya untuk Pemula!',
            'slug' => 'merawat-tanaman-hidroponik-sederhana-sistem-wick',
            'video' => 'video/SISTEM WICK.mp4',
            'thumbnail' => 'thumbnail/wick.jpeg',
            'duration' => 4,
            'difficulty_level' => 'Pemula',
            'delivery_style' => 'Sederhana dan Praktis',
            'description' => 'HydroMates, punya hidroponik sistem wick di rumah? Jangan khawatir! Video ini kasih tau cara mudah merawatnya, dari kasih nutrisi sampai atasi hama! 😉🌿',
            'objective_heading1' => 'Rutinitas Pengecekan dan Penambahan Nutrisi Sistem Wick',
            'objective_description1' => 'Pelajari frekuensi ideal untuk memeriksa volume air nutrisi dan cara menambahkan larutan AB Mix yang tepat pada sistem wick.',
            'objective_heading2' => 'Takaran Nutrisi AB Mix untuk Sistem Wick',
            'objective_description2' => 'Ketahui dosis penggunaan nutrisi AB Mix (pekatan A dan B) yang disarankan untuk menjaga pertumbuhan tanaman hidroponik sistem wick.',
            'objective_heading3' => 'Mengatasi Serangan Hama pada Hidroponik Sederhana',
            'objective_description3' => 'Simak cara alami dan sederhana menggunakan bawang putih tumbuk sebagai solusi mengatasi hama pada tanaman hidroponik sistem wick.',
            'objective_heading4' => '',
            'objective_description4' => '',
        ]);

        VideoView::create([
            'customer_id' => 2,
            'video_id' => 7,
        ]);

        VideoView::create([
            'customer_id' => 2,
            'video_id' => 2,
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

        // Paket Bibit & Benih
        Product::create([
            'category_id' => 1,
            'name' => 'Bibit Sawi Segar',
            'slug' => 'bibit-sawi',
            'picture1' => 'product_images/bibit-sawi-1.jpg',
            'picture2' => 'product_images/bibit-sawi-2.jpg',
            'picture3' => 'product_images/bibit-sawi-3.png',
            'picture4' => 'product_images/bibit-sawi-4.png',
            'picture5' => 'product_images/bibit-sawi-5.png',
            'price' => 5000,
            'stock' => 100,
            'description' => '<p>Dapatkan bibit sawi berkualitas tinggi yang siap tumbuh dengan cepat dan&nbsp;subur! Cocok untuk sistem hidroponik maupun tanah, bibit ini memiliki tingkat&nbsp;keberhasilan tinggi dan daya tahan yang baik. Dengan perawatan yang tepat,&nbsp;Anda bisa menikmati panen sawi segar dalam waktu singkat.</p>
            <p>🔹 Keunggulan:<br>✅ Pertumbuhan cepat &amp; hasil melimpah<br>✅ Cocok untuk hidroponik &amp; kebun konvensional<br>✅ Tingkat keberhasilan tinggi &amp; bebas hama</p>
            <p>Kemasan: Dikemas secara kedap udara untuk menjaga kesegaran bibit.<br>Berat Bersih: 50 gram (&plusmn;5.000 butir biji).<br>Daya Tumbuh: &ge;85% dengan perawatan yang tepat.<br>Masa Panen: 25-30 hari setelah semai.<br>Media Tanam: Cocok untuk hidroponik, tanah, atau polybag.<br>Petunjuk Penyemaian: Direndam selama 6-12 jam sebelum ditanam untuk<br>mempercepat perkecambahan.<br>Kualitas Terjamin: Bebas dari hama &amp; penyakit, siap tumbuh dengan optimal.</p>',
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Bibit Tomat Segar',
            'slug' => 'bibit-tomat',
            'picture1' => 'product_images/bibit-tomat-1.jpg',
            'picture2' => 'product_images/bibit-tomat-2.jpg',
            'picture3' => 'product_images/bibit-tomat-3.png',
            'picture4' => 'product_images/bibit-tomat-4.png',
            'picture5' => 'product_images/bibit-tomat-5.png',
            'price' => 7500,
            'stock' => 100,
            'description' => '<p>Dapatkan bibit tomat berkualitas tinggi yang siap tumbuh dengan cepat dan&nbsp;subur! Cocok untuk sistem hidroponik maupun tanah, bibit ini memiliki tingkat&nbsp;keberhasilan tinggi dan daya tahan yang baik. Dengan perawatan yang tepat,&nbsp;Anda bisa menikmati panen tomat segar dalam waktu singkat.</p>
            <p>🔹 Keunggulan:<br>✅ Pertumbuhan cepat &amp; hasil melimpah<br>✅ Cocok untuk hidroponik &amp; kebun konvensional<br>✅ Tingkat keberhasilan tinggi &amp; bebas hama</p>
            <p>Kemasan: Dikemas secara kedap udara untuk menjaga kesegaran bibit.<br>Berat Bersih: 50 gram (&plusmn;5.000 butir biji).<br>Daya Tumbuh: &ge;85% dengan perawatan yang tepat.<br>Masa Panen: 25-30 hari setelah semai.<br>Media Tanam: Cocok untuk hidroponik, tanah, atau polybag.<br>Petunjuk Penyemaian: Direndam selama 6-12 jam sebelum ditanam untuk<br>mempercepat perkecambahan.<br>Kualitas Terjamin: Bebas dari hama &amp; penyakit, siap tumbuh dengan optimal.</p>',
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Bibit Kangkung',
            'slug' => 'bibit-kangkung',
            'picture1' => 'product_images/bibit-kangkung-1.png',
            'picture2' => 'product_images/bibit-kangkung-2.png',
            'picture3' => 'product_images/bibit-kangkung-3.png',
            'picture4' => 'product_images/bibit-kangkung-4.png',
            'picture5' => 'product_images/bibit-kangkung-5.png',
            'price' => 4000,
            'stock' => 100,
            'description' => '<p>Dapatkan bibit kangkung berkualitas tinggi yang siap tumbuh dengan cepat dan&nbsp;subur! Cocok untuk sistem hidroponik maupun tanah, bibit ini memiliki tingkat&nbsp;keberhasilan tinggi dan daya tahan yang baik. Dengan perawatan yang tepat,&nbsp;Anda bisa menikmati panen kangkung segar dalam waktu singkat.</p>
            <p>🔹 Keunggulan:<br>✅ Pertumbuhan cepat &amp; hasil melimpah<br>✅ Cocok untuk hidroponik &amp; kebun konvensional<br>✅ Tingkat keberhasilan tinggi &amp; bebas hama</p>
            <p>Kemasan: Dikemas secara kedap udara untuk menjaga kesegaran bibit.<br>Berat Bersih: 50 gram (&plusmn;5.000 butir biji).<br>Daya Tumbuh: &ge;85% dengan perawatan yang tepat.<br>Masa Panen: 25-30 hari setelah semai.<br>Media Tanam: Cocok untuk hidroponik, tanah, atau polybag.<br>Petunjuk Penyemaian: Direndam selama 6-12 jam sebelum ditanam untuk<br>mempercepat perkecambahan.<br>Kualitas Terjamin: Bebas dari hama &amp; penyakit, siap tumbuh dengan optimal.</p>',
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Bibit Selada',
            'slug' => 'bibit-selada',
            'picture1' => 'product_images/bibit-selada-1.png',
            'picture2' => 'product_images/bibit-selada-2.png',
            'picture3' => 'product_images/bibit-selada-3.png',
            'picture4' => 'product_images/bibit-selada-4.png',
            'picture5' => 'product_images/bibit-selada-5.png',
            'price' => 6000,
            'stock' => 100,
            'description' => '<p>Dapatkan bibit selada berkualitas tinggi yang siap tumbuh dengan cepat dan&nbsp;subur! Cocok untuk sistem hidroponik maupun tanah, bibit ini memiliki tingkat&nbsp;keberhasilan tinggi dan daya tahan yang baik. Dengan perawatan yang tepat,&nbsp;Anda bisa menikmati panen selada segar dalam waktu singkat.</p>
            <p>🔹 Keunggulan:<br>✅ Pertumbuhan cepat &amp; hasil melimpah<br>✅ Cocok untuk hidroponik &amp; kebun konvensional<br>✅ Tingkat keberhasilan tinggi &amp; bebas hama</p>
            <p>Kemasan: Dikemas secara kedap udara untuk menjaga kesegaran bibit.<br>Berat Bersih: 50 gram (&plusmn;5.000 butir biji).<br>Daya Tumbuh: &ge;85% dengan perawatan yang tepat.<br>Masa Panen: 25-30 hari setelah semai.<br>Media Tanam: Cocok untuk hidroponik, tanah, atau polybag.<br>Petunjuk Penyemaian: Direndam selama 6-12 jam sebelum ditanam untuk<br>mempercepat perkecambahan.<br>Kualitas Terjamin: Bebas dari hama &amp; penyakit, siap tumbuh dengan optimal.</p>',
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Bibit Pakcoy',
            'slug' => 'bibit-pakcoy',
            'picture1' => 'product_images/bibit-pakcoy-1.png',
            'picture2' => 'product_images/bibit-pakcoy-2.png',
            'picture3' => 'product_images/bibit-pakcoy-3.png',
            'picture4' => 'product_images/bibit-pakcoy-4.png',
            'picture5' => 'product_images/bibit-pakcoy-5.png',
            'price' => 5500,
            'stock' => 100,
            'description' => '<p>Dapatkan bibit pakcoy berkualitas tinggi yang siap tumbuh dengan cepat dan&nbsp;subur! Cocok untuk sistem hidroponik maupun tanah, bibit ini memiliki tingkat&nbsp;keberhasilan tinggi dan daya tahan yang baik. Dengan perawatan yang tepat,&nbsp;Anda bisa menikmati panen pakcoy segar dalam waktu singkat.</p>
            <p>🔹 Keunggulan:<br>✅ Pertumbuhan cepat &amp; hasil melimpah<br>✅ Cocok untuk hidroponik &amp; kebun konvensional<br>✅ Tingkat keberhasilan tinggi &amp; bebas hama</p>
            <p>Kemasan: Dikemas secara kedap udara untuk menjaga kesegaran bibit.<br>Berat Bersih: 50 gram (&plusmn;5.000 butir biji).<br>Daya Tumbuh: &ge;85% dengan perawatan yang tepat.<br>Masa Panen: 25-30 hari setelah semai.<br>Media Tanam: Cocok untuk hidroponik, tanah, atau polybag.<br>Petunjuk Penyemaian: Direndam selama 6-12 jam sebelum ditanam untuk<br>mempercepat perkecambahan.<br>Kualitas Terjamin: Bebas dari hama &amp; penyakit, siap tumbuh dengan optimal.</p>',
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Bibit Cabe Rawit',
            'slug' => 'bibit-cabe-rawit',
            'picture1' => 'product_images/bibit-cabe-1.png',
            'picture2' => 'product_images/bibit-cabe-2.png',
            'picture3' => 'product_images/bibit-cabe-3.png',
            'picture4' => 'product_images/bibit-cabe-4.png',
            'picture5' => 'product_images/bibit-cabe-5.png',
            'price' => 7000,
            'stock' => 100,
            'description' => '<p>Dapatkan bibit cabe berkualitas tinggi yang siap tumbuh dengan cepat dan&nbsp;subur! Cocok untuk sistem hidroponik maupun tanah, bibit ini memiliki tingkat&nbsp;keberhasilan tinggi dan daya tahan yang baik. Dengan perawatan yang tepat,&nbsp;Anda bisa menikmati panen cabe segar dalam waktu singkat.</p>
            <p>🔹 Keunggulan:<br>✅ Pertumbuhan cepat &amp; hasil melimpah<br>✅ Cocok untuk hidroponik &amp; kebun konvensional<br>✅ Tingkat keberhasilan tinggi &amp; bebas hama</p>
            <p>Kemasan: Dikemas secara kedap udara untuk menjaga kesegaran bibit.<br>Berat Bersih: 50 gram (&plusmn;5.000 butir biji).<br>Daya Tumbuh: &ge;85% dengan perawatan yang tepat.<br>Masa Panen: 25-30 hari setelah semai.<br>Media Tanam: Cocok untuk hidroponik, tanah, atau polybag.<br>Petunjuk Penyemaian: Direndam selama 6-12 jam sebelum ditanam untuk<br>mempercepat perkecambahan.<br>Kualitas Terjamin: Bebas dari hama &amp; penyakit, siap tumbuh dengan optimal.</p>',
        ]);

        // Paket Hidroponik
        Product::create([
            'category_id' => 2,
            'name' => 'Paket Hidroponik Pemula',
            'slug' => 'paket-hidroponik-pemula',
            'picture1' => 'product_images/paket-hidroponik-pemula-1.png',
            'picture2' => '',
            'picture3' => '',
            'picture4' => '',
            'picture5' => '',
            'price' => 850000,
            'stock' => 50,
            'description' => 'Paket lengkap untuk pemula hidroponik, mudah digunakan dan sudah termasuk nutrisi dasar. Cocok untuk Anda yang ingin mulai berkebun di rumah secara praktis dan efisien.',
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Paket Hidroponik NFT',
            'slug' => 'paket-hidroponik-nft',
            'picture1' => 'product_images/komponen-nft-1.png',
            'picture2' => 'product_images/komponen-nft-2.png',
            'picture3' => 'product_images/komponen-nft-3.png',
            'picture4' => 'product_images/komponen-nft-4.png',
            'picture5' => 'product_images/nft-dft.png',
            'price' => 1500000,
            'stock' => 30,
            'description' => 'Paket Hidroponik NFT (Nutrient Film Technique) siap pakai untuk Anda yang ingin memulai budidaya hidroponik di rumah atau skala komersial. Paket ini sudah termasuk semua komponen utama seperti pipa NFT, pompa air, netpot, bak nutrisi, dan selang penghubung. Mudah dirakit, efisien dalam penggunaan air dan nutrisi, serta cocok untuk berbagai jenis sayuran daun seperti sawi, selada, dan kangkung.',
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Paket Hidroponik DFT',
            'slug' => 'paket-hidroponik-dft',
            'picture1' => 'product_images/komponen-dft-1.png',
            'picture2' => 'product_images/komponen-dft-2.png',
            'picture3' => 'product_images/komponen-dft-3.png',
            'picture4' => 'product_images/komponen-dft-4.png',
            'picture5' => 'product_images/nft-dft.png',
            'price' => 1400000,
            'stock' => 25,
            'description' => 'Paket Hidroponik DFT (Deep Flow Technique) siap pakai untuk Anda yang ingin menanam berbagai jenis sayuran di rumah dengan sistem efisien dan mudah dirawat. Paket ini sudah termasuk semua komponen utama seperti pipa DFT, pompa air, netpot, bak nutrisi, dan selang penghubung. Cocok untuk pemula maupun penghobi hidroponik.',
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Paket Hidroponik Wick 9 Lubang 1 Bak',
            'slug' => 'paket-hidroponik-wick-9-lubang-1-bak',
            'picture1' => 'product_images/paket-hidroponik-wick-9-lubang-1-bak.png',
            'picture2' => '',
            'picture3' => '',
            'picture4' => '',
            'picture5' => '',
            'price' => 920000,
            'stock' => 150,
            'description' => 'Paket hidroponik sistem wick dengan 9 lubang dan 1 bak, solusi praktis untuk pemula yang ingin menanam sayuran di rumah tanpa listrik. Mudah digunakan, hemat tempat, dan cocok untuk berbagai jenis tanaman daun.',
        ]);

        // Aksesori & Pendukung
        Product::create([
            'category_id' => 4,
            'name' => 'Rockwool',
            'slug' => 'rockwool',
            'picture1' => 'product_images/rockwool-1.png',
            'picture2' => 'product_images/rockwool-2.png',
            'picture3' => 'product_images/rockwool-3.png',
            'picture4' => '',
            'picture5' => '',
            'price' => 15000,
            'stock' => 200,
            'description' => 'Rockwool adalah media tanam ideal untuk penyemaian benih hidroponik. Memiliki daya serap air tinggi, ringan, dan mendukung pertumbuhan akar tanaman secara optimal.',
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'PH Meter TDS & EC Meter',
            'slug' => 'ph-meter-tds-ec-meter',
            'picture1' => 'product_images/tds-meter.jpg',
            'picture2' => '',
            'picture3' => '',
            'picture4' => '',
            'picture5' => '',
            'price' => 420000,
            'stock' => 150,
            'description' => 'Alat pengukur pH, TDS, dan EC untuk memastikan nutrisi hidroponik sesuai kebutuhan tanaman. Akurat, mudah digunakan, dan penting untuk pemantauan kualitas air.',
        ]);

        // Peralatan Hidroponik
        Product::create([
            'category_id' => 4,
            'name' => 'Netpot Hidroponik 5cm',
            'slug' => 'netpot-hidroponik-5cm',
            'picture1' => 'product_images/netpot-1.webp',
            'picture2' => 'product_images/netpot-2.jpg',
            'picture3' => '',
            'picture4' => '',
            'picture5' => '',
            'price' => 35000,
            'stock' => 720,
            'description' => 'Netpot hidroponik berdiameter 5cm, cocok untuk berbagai sistem hidroponik seperti NFT, DFT, dan wick. Kuat, tahan lama, dan mendukung pertumbuhan akar tanaman.',
        ]);

        // Nutrisi Tanaman
        Product::create([
            'category_id' => 5,
            'name' => 'Nutrisi AB Mix untuk Sayuran Daun',
            'slug' => 'ab-mix-sayuran-daun',
            'picture1' => 'product_images/ab-daun-1.png',
            'picture2' => 'product_images/ab-daun-2.png',
            'picture3' => 'product_images/ab-daun-3.png',
            'picture4' => 'product_images/ab-daun-4.png',
            'picture5' => 'product_images/ab-daun-5.png',
            'price' => 110000,
            'stock' => 60,
            'description' => 'Nutrisi AB Mix khusus untuk sayuran daun seperti sawi, selada, dan kangkung. Mempercepat pertumbuhan, meningkatkan hasil panen, dan mudah diaplikasikan.',
        ]);

        Product::create([
            'category_id' => 5,
            'name' => 'Nutrisi AB Mix untuk Sayuran Buah',
            'slug' => 'ab-mix-sayuran-buah',
            'picture1' => 'product_images/ab-buah-1.png',
            'picture2' => 'product_images/ab-buah-2.png',
            'picture3' => 'product_images/ab-buah-3.png',
            'picture4' => 'product_images/ab-buah-4.png',
            'picture5' => 'product_images/ab-buah-5.png',
            'price' => 115000,
            'stock' => 60,
            'description' => 'Nutrisi AB Mix diformulasikan khusus untuk sayuran buah seperti tomat dan cabai. Menyediakan unsur hara lengkap untuk pertumbuhan dan pembuahan optimal.',
        ]);
    }
}
