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
        $this->call(RoleUserSeeder::class);
        $this->call(KategoriBeritaSeeder::class);
        $this->call(BeritaSeeder::class);
        $this->call(PengaturanSeeder::class);
        $this->call(HalamanSeeder::class);
        $this->call(BannerSeeder::class);
    }
}
