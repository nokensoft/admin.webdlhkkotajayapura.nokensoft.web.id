<?php

namespace Database\Seeders;

use App\Models\Berita\KategoriBerita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriBerita::create([
            'id' => 1,
            'name' => 'Bidang Tata Lingkungan',
            'kategori_slug' => 'bidang-tata-lingkungan',
            'deskripsi' => 'Publikasi kegiatan dari Bidang Tata Lingkungan',
            'status' => 'Publish',
            'user_id' => 1, // created by Admin DLHK
        ]);

        KategoriBerita::create([
            'id' => 2,
            'name' => 'Bidang Pengolaan Sampah & Limbah B3',
            'kategori_slug' => 'bidang-pengolaan-sampah-limbah-b3',
            'deskripsi' => 'Publikasi kegiatan dari Bidang Pengolaan Sampah & Limbah B3',
            'status' => 'Publish',
            'user_id' => 1, // created by Admin DLHK
        ]);

        KategoriBerita::create([
            'id' => 3,
            'name' => 'Bidang Pengendalian Pencemaran & Kerusakan Lingkungan',
            'kategori_slug' => 'bidang-pengendalian-pencemaran-kerusakan-lingkungan',
            'deskripsi' => 'Publikasi kegiatan dari Bidang Pengendalian Pencermaran & Kerusakan Lingkungan',
            'status' => 'Publish',
            'user_id' => 1, // created by Admin DLHK
        ]);

        KategoriBerita::create([
            'id' => 4,
            'name' => 'Bidang Penataan & Peningkatan Kapasitas Lingkungan',
            'kategori_slug' => 'bidang-penataan-peningkatan-kapasitas-lingkungan',
            'deskripsi' => 'Publikasi kegiatan dari Bidang Penataan & Peningkatan Kapasitas Lingkungan',
            'status' => 'Publish',
            'user_id' => 1, // created by Admin DLHK
        ]);

        KategoriBerita::create([
            'id' => 5,
            'name' => 'Sekretariat',
            'kategori_slug' => 'sekretariat',
            'deskripsi' => 'Publikasi kegiatan dari Sekretariat',
            'status' => 'Publish',
            'user_id' => 1, // created by Admin DLHK
        ]);

        KategoriBerita::create([
            'id' => 6,
            'name' => 'UPTD Laboratorium',
            'kategori_slug' => 'uptd-laboratorium',
            'deskripsi' => 'Publikasi kegiatan dari UPTD Laboratorium',
            'status' => 'Publish',
            'user_id' => 1, // created by Admin DLHK
        ]);

        KategoriBerita::create([
            'id' => 7,
            'name' => 'UPTD TPA',
            'kategori_slug' => 'uptd-tpa',
            'deskripsi' => 'Publikasi kegiatan dari UPTD TPA',
            'status' => 'Publish',
            'user_id' => 1, // created by Admin DLHK
        ]);

        KategoriBerita::create([
            'id' => 8,
            'name' => 'UPTD Bank Sampah',
            'kategori_slug' => 'uptd-bank-sampah',
            'deskripsi' => 'Publikasi kegiatan dari UPTD Bank Sampah',
            'status' => 'Publish',
            'user_id' => 1, // created by Admin DLHK
        ]);

        KategoriBerita::create([
            'id' => 9,
            'name' => 'Pengumuman',
            'kategori_slug' => 'pengumuman',
            'deskripsi' => 'Publikasi informasi yang dikategorikan sebagai pengumuman',
            'status' => 'Publish',
            'user_id' => 1, // created by Admin DLHK
        ]);

        KategoriBerita::create([
            'id' => 10,
            'name' => 'Undang-Undang',
            'kategori_slug' => 'undang-undang',
            'deskripsi' => 'Publikasi informasi yang dikategorikan sebagai undang-undang',
            'status' => 'Publish',
            'user_id' => 1, // created by Admin DLHK
        ]);

        KategoriBerita::create([
            'id' => 11,
            'name' => 'Layanan Online',
            'kategori_slug' => 'layanan-online',
            'deskripsi' => 'Publikasi informasi yang dikategorikan sebagai layanan-online',
            'status' => 'Publish',
            'user_id' => 1, // created by Admin DLHK
        ]);

        KategoriBerita::create([
            'id' => 12,
            'name' => 'Siaran Pers',
            'kategori_slug' => 'siaran-pers',
            'deskripsi' => 'Publikasi informasi yang dikategorikan sebagai siaran pers',
            'status' => 'Draft',
            'user_id' => 1, // created by Admin DLHK
        ]);

    }
}
