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
            'status' => 'Publish',
            'user_id' => 3,
        ]);
        
        Slider::create([
            'judul' => 'IKA',
            'slug' => 'ika',
            'deskripsi' => 'Penjelasan Indeks Kualitas Air',
            'gambar' => 'slider-2.png',
            'status' => 'Publish',
            'user_id' => 3,
        ]);
        
        Slider::create([
            'judul' => 'IKU',
            'slug' => 'iku',
            'deskripsi' => 'Penjelasan Indeks Kualitas Udara',
            'gambar' => 'slider-3.png',
            'status' => 'Publish',
            'user_id' => 3,
        ]);
        
        Slider::create([
            'judul' => 'IKL',
            'slug' => 'ikl',
            'deskripsi' => 'Penjelasan Indeks Kualitas Lahan',
            'gambar' => 'slider-4.png',
            'status' => 'Publish',
            'user_id' => 3,
        ]);

    }
}
