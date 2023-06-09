<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\InformasiLingkungan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformasiLingkunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // InformasiLingkungan::factory()->count(10)->create();

        InformasiLingkungan::create([
            'judul'                 => 'RPPLH',
            'slug'                  => 'rpplh'.time().Str::random(12),
            'keterangan_singkat'    => 'Rencana Perlindungan dan Pengelolaan Lingkungan Hidup',
            'keterangan_lengkap'    => '',
            'author'                => 2,
            'gambar'                => '1.jpg',
            'url'                   => 'halaman/rpplh',
        ]);

        InformasiLingkungan::create([
            'judul'                 => 'IKLH',
            'slug'                  => 'iklh'.time().Str::random(12),
            'keterangan_singkat'    => 'Index Kualitas Lingkungan Hidup',
            'keterangan_lengkap'    => '',
            'author'                => 2,
            'gambar'                => '2.jpg',
            'url'                   => 'halaman/iklh',
        ]);

        InformasiLingkungan::create([
            'judul'                 => 'AMDAL',
            'slug'                  => 'amdal'.time().Str::random(12),
            'keterangan_singkat'    => 'Analisis Mengenai Dampak Lingkungan',
            'keterangan_lengkap'    => '',
            'author'                => 1,
            'gambar'                => '3.jpg',
            'url'                   => 'halaman/amdal',
        ]);

        InformasiLingkungan::create([
            'judul'                 => 'Izin Lingkungan',
            'slug'                  => 'izin-lingkungan'.time().Str::random(12),
            'keterangan_singkat'    => 'Dokumen Perizinan Lingkungan',
            'keterangan_lengkap'    => '',
            'author'                => 1,
            'gambar'                => '4.jpg',
            'url'                   => 'halaman/izin-lingkungan',
        ]);

    }
}
