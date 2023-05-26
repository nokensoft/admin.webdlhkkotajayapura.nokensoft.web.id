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
            'judul'                 => 'Sekilas Dinas',
            'slug'                  => 'sekilas-dinas',

            'gambar_ilustrasi'      => 'gambar/ilustrasi/2.png',
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
            'judul'                 => 'Sekilas Dinas 2',
            'slug'                  => 'sekilas-dinas2',

            'gambar_ilustrasi'      => 'gambar/ilustrasi/1.png',
            'gambar_latar_belakang' => 'gambar/latar-belakang/2.jpg',

            'konten_text_1'         => '"Sayangi Lingkungan Seperti Mereka Menyanyai Kita"',
            'konten_text_2'         => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
            
            'link_1'                => 'halaman/profil-dinas',
            'link_1_label'          => 'Profil Dinas Lengkap',

            'link_2'                => 'halaman/video_profil-dinas',
            'link_2_label'          => 'Lihat Video Profil',
            
            'status'                => 'Publish',
        ]);

        // Banner 3
        Banner::create([
            'id'                    => 3,
            'judul'                 => 'Sekilas Dinas3',
            'slug'                  => 'sekilas-dinas3',

            'gambar_ilustrasi'      => 'gambar/ilustrasi/3.png',
            'gambar_latar_belakang' => 'gambar/latar-belakang/3.jpg',

            'konten_text_1'         => 'Selamat datang di portal kami',
            'konten_text_2'         => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
            
            'link_1'                => 'halaman/profil-dinas',
            'link_1_label'          => 'Profil Dinas Lengkap',

            'link_2'                => 'halaman/video_profil-dinas',
            'link_2_label'          => 'Lihat Video Profil',
            
            'status'                => 'Publish',
        ]);
    }
}
