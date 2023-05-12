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
            'status' => 'publish'
        ]);
         KategoriBerita::create([
            'name'   => 'Kesehatan',
            'slug'   => 'kesehatan',
            'status' => 'publish'
        ]);
         KategoriBerita::create([
            'name'   => 'Penjelasan',
            'slug'   => 'penjelasan',
            'status' => 'draft'
        ]);
         KategoriBerita::create([
            'name'   => 'Interpretatif',
            'slug'   => 'interpretatif',
            'status' => 'draft'
        ]);
    }
}
