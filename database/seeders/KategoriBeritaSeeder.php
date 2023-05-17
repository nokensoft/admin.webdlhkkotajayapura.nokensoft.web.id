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
            'name'   => 'Publikasi',
            'slug'   => 'publikasi',
            'status' => 'publish'
        ]);

        KategoriBerita::create([
            'name'   => 'Pengumuman',
            'slug'   => 'pengumuman',
            'status' => 'publish'
        ]);

        KategoriBerita::create([
            'name'   => 'Penghargaan',
            'slug'   => 'penghargaan',
            'status' => 'draft'
        ]);

        KategoriBerita::create([
            'name'   => 'Hari Lingkukngan',
            'slug'   => 'hari-lingkungan',
            'status' => 'publish'
        ]);

        KategoriBerita::create([
            'name'   => 'Siaran Pers',
            'slug'   => 'siaran-pers',
            'status' => 'publish'
        ]);
    }
}
