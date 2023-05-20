<?php

namespace Database\Seeders;

use App\Models\InformasiLingkungan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformasiLingkunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InformasiLingkungan::factory()->count(10)->create();
    }
}
