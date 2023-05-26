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

        // Banner 1
        Banner::create([
            'judul'                 => 'Banner 1',
            'slug'                  => 'banner-1',

            'gambar_ilustrasi'      => 'gambar/ilustrasi/1.png',
            'gambar_latar_belakang' => 'gambar/latar-belakang/1.jpg',

            'konten_text_1'         => 'Menjaga lingkungan bukan hanya angan-angan, tapi tindakan.',
            'konten_text_2'         => '...',
            'link'                  => 'https://www.dlhk.jayapurakota.go.id/',
            'status'                => 'Publish',
        ]);

        // Banner 2
        Banner::create([
            'judul'                 => 'Banner 2',
            'slug'                  => 'banner-2',

            'gambar_ilustrasi'      => 'gambar/ilustrasi/2.png',
            'gambar_latar_belakang' => 'gambar/latar-belakang/2.jpg',

            'konten_text_1'                => '"Sayangi Lingkungan Seperti Mereka Menyanyai Kita."',
            'konten_text_2'         => '...',
            'link'                  => 'https://www.dlhk.jayapurakota.go.id/',

            'status'                => 'Publish',
        ]);

        // Banner 3
        Banner::create([
            'judul'                 => 'Banner 3',
            'slug'                  => 'banner-3',

            'gambar_ilustrasi'      => 'gambar/ilustrasi/3.png',
            'gambar_latar_belakang' => 'gambar/latar-belakang/2.jpg',

            'konten_text_1'                => 'Menjaga lingkungan bukan hanya angan-angan, tapi tindakan.',
            'konten_text_2'         => '...',
            'link'                  => 'https://www.dlhk.jayapurakota.go.id/',

            'status'                => 'Publish',
        ]);
    }
}
