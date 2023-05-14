<?php

namespace Database\Seeders;

use App\Models\Pengaturan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaturan::create([
            'judul_situs' => 'DHLK - Kota Jayapura',
            'slug' => 'dhlk-kota-jayapura',
            'deskripsi_situs' => 'Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
            'alamat_email' => "support.dlhk@jayapurakota.go.id",
            'nomor_telepon' => "(+880)155-69569",
            'alamat_kantor' => "Kompleks Kantor Walikota Jayapura, Kota Jayapura, Papua - Indonesia.",
            'alamat_google_map' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15943.319688111145!2d140.67285368715824!3d-2.5621025999999847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x686c593ecebe80db%3A0x3befb8abcc818c9!2sDinas%20Lingkungan%20Hidup%20Kota%20Jayapura!5e0!3m2!1sen!2sid!4v1683468075044!5m2!1sen!2sid",
            'instagram' => "dlhk_kotajayapura/",
            'youtube' => "https://www.youtube.com/@infodinaslingkunganhidupko8058",
            'copyright' => "2020 All Rights Reserved. Developed By Nokensoft",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }


}
