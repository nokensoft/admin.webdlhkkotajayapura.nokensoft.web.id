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
            'id'            => 1,
            'name'          => 'Laporan Tahunan',
            'kategori_slug'          => 'laporan-tahunan',
            'deskripsi'     => 'Laporan tahunan yang dikeluarkan oleh Dinas Lingkungan Hidup Kota Jayapura agar bisa diakses oleh masyarakat luas.',
            'status'        => 'publish',
        ]);

        KategoriBerita::create([
            'id'            => 2,
            'name'          => 'Laporan Berkala',
            'kategori_slug' => 'laporan-berkala',
            'deskripsi'     => 'Laporan berkala yang dikeluarkan oleh Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura agar bisa diakses oleh masyarakat luas.',
            'status'        => 'publish',
        ]);

        KategoriBerita::create([
            'id'            => 3,
            'name'          => 'Hari Lingkungan Hidup',
            'kategori_slug'          => 'hari-lingkungan-hidup',
            'deskripsi'     => 'Hari lingkungan hidup secara lokal, nasional dan internasional yang selalu diselenggarakan.',
            'status'        => 'draft',
        ]);

        KategoriBerita::create([
            'id'            => 4,
            'name'          => 'Hari Raya',
            'kategori_slug'          => 'hari-raya',
            'deskripsi'     => 'Berbagai hari raya yang selalu dirayakan di tingkat lokal, nasional dan internasional.',
            'status'        => 'publish',
        ]);

        KategoriBerita::create([
            'id'            => 5,
            'name'          => 'Siaran Pers',
            'kategori_slug'          => 'siaran-pers',
            'deskripsi'     => 'Siaran pers yang dilakukan oleh Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura kepada khalayak umum.',
            'status'        => 'publish',
        ]);
    }
}
