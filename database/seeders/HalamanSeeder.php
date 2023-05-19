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
                'judul'     => 'Profil DLHK',
                'sub_judul' => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'cover'     => 'cover-1.jpg',
                'slug'      => 'profil-dlhk',
                'isi'       => '<blockquote><p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p></blockquote>
                                        <div class="blog-desc mb-40">
                                            <p>
                                                Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits.
                                            </p>
                                        </div>
                                        <ul class="unorder-list mb-20">
                                            <li>New Construction Benefit of Service</li>
                                            <li>Renovations Benefit of Service</li>
                                            <li>Historic Renovations and Restorations</li>
                                            <li>Additions Benefit of Service</li>
                                            <li>Rebuilding from fire or water damage</li>
                                        </ul>',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'Profil Pimpinan',
                'sub_judul' => 'sub judul halaman',
                'cover'     => 'cover-1.jpg',
                'slug'      => 'profil-pimpinan',
                'isi'       => '<blockquote><p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p></blockquote>
                                <div class="blog-desc mb-40">
                                    <p>
                                        Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits.
                                    </p>
                                </div>
                                <ul class="unorder-list mb-20">
                                    <li>New Construction Benefit of Service</li>
                                    <li>Renovations Benefit of Service</li>
                                    <li>Historic Renovations and Restorations</li>
                                    <li>Additions Benefit of Service</li>
                                    <li>Rebuilding from fire or water damage</li>
                                </ul>',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'Visi Misi',
                'sub_judul' => 'sub judul halaman',
                'cover'     => 'cover-1.jpg',
                'slug'              => 'visi-misi',
                'isi'            => '<blockquote><p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p></blockquote>
                                        <div class="blog-desc mb-40">
                                            <p>
                                                Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits.
                                            </p>
                                        </div>
                                        <ul class="unorder-list mb-20">
                                            <li>New Construction Benefit of Service</li>
                                            <li>Renovations Benefit of Service</li>
                                            <li>Historic Renovations and Restorations</li>
                                            <li>Additions Benefit of Service</li>
                                            <li>Rebuilding from fire or water damage</li>
                                        </ul>',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'Tugas Pokok & Fungsi',
                'sub_judul' => 'sub judul halaman',
                'cover'     => 'cover-1.jpg',
                'slug'              => 'tugas-pokok-fungsi',
                'isi'            => 'Tugas Pokok & Fungsi, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'Bidang Layanan',
                'sub_judul' => 'sub judul halaman',
                'cover'     => 'cover-1.jpg',
                'slug'              => 'bidang-layanan',
                'isi'            => 'Bidang Layanan, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'RPPLH',
                'sub_judul' => 'sub judul halaman',
                'cover'     => 'cover-1.jpg',
                'slug'              => 'rpplh',
                'isi'            => 'Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'IKLH',
                'sub_judul' => 'sub judul halaman',
                'cover'     => 'cover-1.jpg',
                'slug'              => 'iklh',
                'isi'            => 'Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'HPSN',
                'sub_judul' => 'sub judul halaman',
                'cover'     => 'cover-1.jpg',
                'slug'              => 'hpsn',
                'isi'            => 'Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'AMDAL',
                'sub_judul' => 'sub judul halaman',
                'cover'     => 'cover-1.jpg',
                'slug'              => 'amdal',
                'isi'            => 'Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'KEHATI',
                'sub_judul' => 'sub judul halaman',
                'cover'     => 'cover-1.jpg',
                'slug'              => 'kehati',
                'isi'            => 'Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'Konservasi Energi',
                'sub_judul' => 'sub judul halaman',
                'cover'     => 'cover-1.jpg',
                'slug'              => 'konservasi-energi',
                'isi'            => 'Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'Mekanisme Perizinan',
                'sub_judul' => 'sub judul halaman',
                'cover'     => 'cover-1.jpg',
                'slug'              => 'mekanisme-perizinan',
                'isi'            => 'Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'Izin Lingkungan',
                'sub_judul' => 'sub judul halaman',
                'cover'     => 'cover-1.jpg',
                'slug'              => 'izin-lingkungan',
                'isi'            => 'Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'Pengelolaan B3',
                'sub_judul' => 'sub judul halaman',
                'cover'     => 'cover-1.jpg',
                'slug'              => 'pengelolaan-b3',
                'isi'            => 'Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status'            => "Publish",
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
        ]);
    }
}
