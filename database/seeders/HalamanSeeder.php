<?php

namespace Database\Seeders;

use App\Models\Halaman;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Halaman::insert([
            [
                'judul_halaman' => 'Visi Misi',
                'slug' => 'visi-misi',
                'konten' => 'Visi Misi, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status' => "Publish",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul_halaman' => 'Tugas Pokok & Fungsi',
                'slug' => 'tugas-pokok-fungsi',
                'konten' => 'Tugas Pokok & Fungsi, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status' => "Publish",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul_halaman' => 'Bidang Layanan',
                'slug' => 'bidang-layanan',
                'konten' => 'Bidang Layanan, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status' => "Publish",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul_halaman' => 'Profil Pimpinan',
                'slug' => 'profil-pimpinan',
                'konten' => 'Profil Pimpinan, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status' => "Publish",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
