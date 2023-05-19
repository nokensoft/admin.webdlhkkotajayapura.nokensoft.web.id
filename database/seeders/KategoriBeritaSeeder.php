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
            'id'        => 1,
            'name'      => 'Publikasi',
            'kategori_slug'      => 'publikasi',
            'status'    => 'publish'
        ]);

        KategoriBerita::create([
            'id'        => 2,
            'name'      => 'Pengumuman',
            'kategori_slug'      => 'pengumuman',
            'status'    => 'publish'
        ]);

        KategoriBerita::create([
            'id'        => 3,
            'name'      => 'Penghargaan',
            'kategori_slug'      => 'penghargaan',
            'status'    => 'draft'
        ]);

        KategoriBerita::create([
            'id'        => 4,
            'name'      => 'Hari Lingkungan',
            'kategori_slug'      => 'hari-lingkungan',
            'status'    => 'publish'
        ]);

        KategoriBerita::create([
            'id'        => 5,
            'name'      => 'Siaran Pers',
            'kategori_slug'      => 'siaran-pers',
            'status'    => 'publish'
        ]);
    }
}
