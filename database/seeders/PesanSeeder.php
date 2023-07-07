<?php

namespace Database\Seeders;

use App\Models\Pesan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Pesan dari Samuel
        Pesan::create([
            'nama' => 'Samuel Bosawer',
            'email' => 'z.bosawer@gmail.com',
            'no_telf' => '082199558191',
            'judul_topik' => 'Permohonan Data Laporan IKLH',
            'slug' => 'samuel-bosawer',
            'keterangan' => 'Hello Admin, saya mewakili pemuda gereja. Kami memliki kegiatan sosialisasi kegiatan lingkungan hidup. Mohon petunjuk agar kami bisa dapatkan dokumen terkair IKLH tahun 2023. Terima kasih!',
        ]);

        // Pesan dari Difano
        Pesan::create([
            'nama' => 'Difan Weya',
            'email' => 'difano.weya@gmail.com',
            'no_telf' => '082199558191',
            'judul_topik' => 'Permohonan Truk Sampah',
            'slug' => 'difan-weya',
            'keterangan' => 'Hello! Saya dari komunitas Papua Trada Sampah. Kami ingin melakukan aksi kumpul sampah di Pantai Base-G dan kami perlu 1 unit mobil pengangkut sampah. Demikian permohonan kami. Terima kasih banyak...',
        ]);

    }
}
