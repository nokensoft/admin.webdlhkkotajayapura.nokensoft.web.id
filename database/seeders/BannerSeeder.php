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
            'id'                    => 1,
            'judul'                 => 'Banner Utama',
            'slug'                  => 'banner-utama',

            'gambar_ilustrasi'      => 'gambar/ilustrasi/3.png',
            'gambar_latar_belakang' => 'gambar/latar-belakang/1.jpg',

            'konten_text_1'         => 'Selamat datang di portal kami',
            'konten_text_2'         => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
            
            'link_1'                => '#sekilas-profil',
            'link_1_label'          => 'Profil Dinas Lengkap',

            'link_2'                => '',
            'link_2_label'          => '',
            
            'status'                => 'Publish',
        ]);

        // Banner 2
        Banner::create([
            'id'                    => 2,
            'judul'                 => 'Banner Himbauan 1',
            'slug'                  => 'banner-himbauan-1',

            'gambar_ilustrasi'      => 'gambar/ilustrasi/1.png',
            'gambar_latar_belakang' => 'gambar/latar-belakang/2.jpg',

            'konten_text_1'         => '"Sayangi Lingkungan Seperti Mereka Menyanyai Kita"',
            'konten_text_2'         => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
            
            'link_1'                => '',
            'link_1_label'          => '',

            'link_2'                => '',
            'link_2_label'          => '',
            
            'status'                => 'Publish',
        ]);

        // Banner 3
        Banner::create([
            'id'                    => 3,
            'judul'                 => 'Banner Himbauan 2',
            'slug'                  => 'banner-himbauan-2',

            'gambar_ilustrasi'      => 'gambar/ilustrasi/1.png',
            'gambar_latar_belakang' => 'gambar/latar-belakang/1.jpg',

            'konten_text_1'         => 'Menjaga lingkungan bukan hanya dengan angan-angan saja, melainkan dengan tindakan.',
            'konten_text_2'         => '',
            
            'link_1'                => 'https://dlhk.jayapurakota.go.id',
            'link_1_label'          => 'www.dlhk.jayapurakota.go.id',

            'link_2'                => '',
            'link_2_label'          => '',
            
            'status'                => 'Publish',
        ]);
    }
}
