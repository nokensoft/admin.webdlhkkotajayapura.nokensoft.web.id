<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $random = Str::random(12);
        Banner::create([
            'title'      => Str::upper('selamat data di portal kami'),
            'slug'       =>  $random,
            'subtitle'   => Str::upper('dinas lingkungan hidup dan kebersihan kota jayapura'),
            'status'     => 'Publish',
            'link'       => 'https://www.dlhk.jayapurakota.go.id/'
        ]);
    }
}
