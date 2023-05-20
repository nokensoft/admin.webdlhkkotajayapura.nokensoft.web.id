<?php

namespace Database\Seeders;

use App\Models\LayananOnline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananOnlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LayananOnline::factory()->count(5)->create();
    }
}
