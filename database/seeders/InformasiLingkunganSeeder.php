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
        // InformasiLingkungan::factory()->count(10)->create();

        InformasiLingkungan::create([
            'judul'                 => 'RPPLH',
            'slug'                  => 'rpplh',
            'keterangan_singkat'    => 'Rencana Perlindungan dan Pengelolaan Lingkungan Hidup',
            'keterangan_lengkap'    => '',

            'gambar'                => '1.jpg',
            'url'                   => 'halaman/rpplh',
        ]);

        InformasiLingkungan::create([
            'judul'                 => 'IKLH',
            'slug'                  => 'iklh',
            'keterangan_singkat'    => 'Index Kualitas Lingkungan Hidup',
            'keterangan_lengkap'    => '',

            'gambar'                => '2.jpg',
            'url'                   => 'halaman/iklh',
        ]);

        InformasiLingkungan::create([
            'judul'                 => 'AMDAL',
            'slug'                  => 'amdal',
            'keterangan_singkat'    => 'Analisis Mengenai Dampak Lingkungan',
            'keterangan_lengkap'    => '',

            'gambar'                => '3.jpg',
            'url'                   => 'halaman/amdal',
        ]);

        InformasiLingkungan::create([
            'judul'                 => 'Izin Lingkungan',
            'slug'                  => 'izin-lingkungan',
            'keterangan_singkat'    => 'Dokumen Perizinan Lingkungan',
            'keterangan_lengkap'    => '',

            'gambar'                => '4.jpg',
            'url'                   => 'halaman/izin-lingkungan',
        ]);

    }
}
