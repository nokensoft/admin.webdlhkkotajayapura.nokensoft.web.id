<?php

namespace Database\Seeders;

use App\Models\LayananOnline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananOnlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // LayananOnline::factory()->count(5)->create();

        // SIPAKOT
        LayananOnline::create([
            'id'                    => 1,
            'judul'                 => 'SIPAKOT',
            'keterangan_singkat'    => 'Sistem Informasi Pajak Air Tanah Bagi Para Wajib Pajak di Kota Jayapura',
            'keterangan_lengkap'    => '',

            'gambar'                => 'gambar/layanan-online/1.png',
            'url'                   => 'https://sipakot.jayapurakota.go.id',
            
            'status'                => 'Publish',
        ]);

        // Pengaduan
        LayananOnline::create([
            'id'                    => 2,
            'judul'                 => 'Pengaduan',
            'keterangan_singkat'    => 'Layanan Pengaduan Masyarakat Terhadap Masalah Kebersihan di Kota Jayapura',
            'keterangan_lengkap'    => 'halaman/informasi-lingkungan',

            'gambar'                => 'gambar/layanan-online/2.png',
            'url'                   => 'halaman/informasi-lingkungan',
            
            'status'                => 'Publish',
        ]);

    }
}
