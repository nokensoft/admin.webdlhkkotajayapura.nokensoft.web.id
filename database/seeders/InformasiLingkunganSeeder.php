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
            'id'                    => 1,
            'judul'                 => 'RPPLH',
            'keterangan_singkat'    => 'Rencana Perlindungan dan Pengelolaan Lingkungan Hidup',
            'keterangan_lengkap'    => '',

            'gambar'                => '1.jpg',
            'url'                   => 'halaman/informasi-lingkungan',


        ]);

        InformasiLingkungan::create([
            'id'                    => 2,
            'judul'                 => 'IKLH',
            'keterangan_singkat'    => 'Index Kualitas Lingkungan Hidup',
            'keterangan_lengkap'    => '',

            'gambar'                => '2.jpg',
            'url'                   => 'halaman/informasi-lingkungan',


        ]);

        InformasiLingkungan::create([
            'id'                    => 3,
            'judul'                 => 'AMDAL',
            'keterangan_singkat'    => 'Analisis Mengenai Dampak Lingkungan',
            'keterangan_lengkap'    => '',

            'gambar'                => '3.jpg',
            'url'                   => 'halaman/informasi-lingkungan',


        ]);

        InformasiLingkungan::create([
            'id'                    => 4,
            'judul'                 => 'Izin Lingkungan',
            'keterangan_singkat'    => 'Dokumen Perizinan Lingkungan',
            'keterangan_lengkap'    => '',

            'gambar'                => '4.jpg',
            'url'                   => 'halaman/informasi-lingkungan',


        ]);

        InformasiLingkungan::create([
            'id'                    => 5,
            'judul'                 => 'RPPLH',
            'keterangan_singkat'    => 'Rencana Perlindungan dan Pengelolaan Lingkungan Hidup',
            'keterangan_lengkap'    => '',

            'gambar'                => '5.jpg',
            'url'                   => 'halaman/informasi-lingkungan',


        ]);

        InformasiLingkungan::create([
            'id'                    => 6,
            'judul'                 => 'IKLH',
            'keterangan_singkat'    => 'Index Kualitas Lingkungan Hidup',
            'keterangan_lengkap'    => '',

            'gambar'                => '6.jpg',
            'url'                   => 'halaman/informasi-lingkungan',


        ]);

        InformasiLingkungan::create([
            'id'                    => 7,
            'judul'                 => 'AMDAL',
            'keterangan_singkat'    => 'Analisis Mengenai Dampak Lingkungan',
            'keterangan_lengkap'    => '',

            'gambar'                => '7.jpg',
            'url'                   => 'halaman/informasi-lingkungan',


        ]);

        InformasiLingkungan::create([
            'id'                    => 8,
            'judul'                 => 'Izin Lingkungan',
            'keterangan_singkat'    => 'Dokumen Perizinan Lingkungan',
            'keterangan_lengkap'    => '',

            'gambar'                => '8.jpg',
            'url'                   => 'halaman/informasi-lingkungan',


        ]);


    }
}
