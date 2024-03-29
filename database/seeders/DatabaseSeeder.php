<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleUserSeeder::class,
            KategoriBeritaSeeder::class,
            BeritaSeeder::class,
            PengaturanSeeder::class,
            HalamanSeeder::class,
            BannerSeeder::class,
            LinkTerkaitSeeder::class,
            LayananOnlineSeeder::class,
            InformasiLingkunganSeeder::class,
            FaqSeeder::class,
            SliderSeeder::class,
            PesanSeeder::class,
        ]);
    }
}
