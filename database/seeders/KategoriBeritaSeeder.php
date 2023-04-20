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
            'name'   => 'Informasi',
            'slug'   => 'informasi',
        ]);
         KategoriBerita::create([
            'name'   => 'Kesehatan',
            'slug'   => 'kesehatan',
        ]);
         KategoriBerita::create([
            'name'   => 'Penjelasan',
            'slug'   => 'penjelasan',
        ]);
         KategoriBerita::create([
            'name'   => 'Interpretatif',
            'slug'   => 'interpretatif',
        ]);
    }
}
