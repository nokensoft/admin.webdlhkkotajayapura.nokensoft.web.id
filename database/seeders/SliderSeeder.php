<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'judul' => 'IKLH 2022',
            'slug' => 'iklh-2022',
            'deskripsi' => 'Indeks Kualitas Lingkungan Hidup Kota Jayapura Tahun 2022',
            'gambar' => 'slider-1.png',
            'posisi' => 'Tengah',
            'status' => 'Publish',
            'user_id' => 3,
        ]);
        
        Slider::create([
            'judul' => 'IKA',
            'slug' => 'ika',
            'deskripsi' => 'Penjelasan Indeks Kualitas Air',
            'gambar' => 'slider-2.png',
            'posisi' => 'Tengah',
            'status' => 'Publish',
            'user_id' => 3,
        ]);
        
        Slider::create([
            'judul' => 'IKU',
            'slug' => 'iku',
            'deskripsi' => 'Penjelasan Indeks Kualitas Udara',
            'gambar' => 'slider-3.png',
            'posisi' => 'Tengah',
            'status' => 'Publish',
            'user_id' => 3,
        ]);
        
        Slider::create([
            'judul' => 'IKL',
            'slug' => 'ikl',
            'deskripsi' => 'Penjelasan Indeks Kualitas Lahan',
            'gambar' => 'slider-4.png',
            'posisi' => 'Tengah',
            'status' => 'Publish',
            'user_id' => 3,
        ]);
        
        Slider::create([
            'judul' => 'Info Kunjungi Alamat Website DLHK - Ilustrasi Tablet',
            'slug' => 'info-kunjungi-alamat-website-dlhk-tablet',
            'deskripsi' => 'Info Kunjungi Alamat Website DLHK pada alamat www.dlhk.jayapurakota.go.id',
            'gambar' => 'slider-atas-3.png',
            'posisi' => 'Atas',
            'status' => 'Publish',
            'user_id' => 3,
        ]);
        
        Slider::create([
            'judul' => 'Info Kunjungi Alamat Website DLHK',
            'slug' => 'info-kunjungi-alamat-website-dlhk',
            'deskripsi' => 'Info Kunjungi Alamat Website DLHK pada alamat www.dlhk.jayapurakota.go.id',
            'gambar' => 'slider-atas-2.png',
            'posisi' => 'Atas',
            'status' => 'Publish',
            'user_id' => 3,
        ]);
        
        Slider::create([
            'judul' => 'Selamat datang',
            'slug' => 'selamat-datang',
            'deskripsi' => 'Ucapan selamat datang di website',
            'gambar' => 'slider-atas-1.png',
            'posisi' => 'Atas',
            'status' => 'Publish',
            'user_id' => 3,
        ]);

    }
}
