<?php

namespace Database\Seeders;

use App\Models\LinkTerkait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkTerkaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LinkTerkait::factory()->count(5)->create();
    }
}
