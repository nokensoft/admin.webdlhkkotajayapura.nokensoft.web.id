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
            
            /*
            | GLOBAL SETTINGS
            |
            */
            // Site Information
            'id'                => 1,
            'judul_situs'       => 'LID DLHK Kota Jayapura',
            'deskripsi_situs'   => 'Layanan Informasi dan Dokumentasi Dinas Lingkungan Hidup Kota Jayapura',
            'copyright'         => "2023, Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura - All Rights Reserved. Powered By <a href='https://nokensoft.com/' target='_blank'>Nokensoft</a>",
            
            'logo'              => 'logo-hijau.png',
            'logo_loader'       => 'loader.png',
            'favicon'           => 'favicon.png',
            
            // Contact
            'alamat_email'      => "support.dlhk@jayapurakota.go.id",
            'nomor_telepon'     => "(+880)155-69569",
            'alamat_kantor'     => "Kompleks Kantor Walikota Jayapura, Kota Jayapura, Papua - Indonesia.",
            'alamat_google_map' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15943.319688111145!2d140.67285368715824!3d-2.5621025999999847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x686c593ecebe80db%3A0x3befb8abcc818c9!2sDinas%20Lingkungan%20Hidup%20Kota%20Jayapura!5e0!3m2!1sen!2sid!4v1683468075044!5m2!1sen!2sid",
            
            // Social Media
            'instagram'         => "https://instagram.com/dlhk_kotajayapura",
            'facebook'          => "https://facebook.com/",
            'twitter'           => "",
            'tiktok'            => "",
            'linkedin'          => "https://linkedin.com/",
            'youtube'           => "https://www.youtube.com/@infodinaslingkunganhidupko8058",
                        
            /*
            | DASHBOARD SETTINGS
            |
            */
            
            'logo_dark'         => 'logo-dasbor-dark.png',
            'logo_dark_sm'      => 'logo-dasbor-sm.png',
            'logo_light'        => 'logo-dasbor-light.png',
            'logo_light_sm'     => 'logo-dasbor-sm.png',

            // Dates
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
    }


}
