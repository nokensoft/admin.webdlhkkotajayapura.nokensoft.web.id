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
                'judul'     => 'Profil Dinas',
                'sub_judul' => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'cover'     => 'cover-1.jpg',
                'slug'      => 'profil-dinas',
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
                'status'            => "publish",
                
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'Profil Pimpinan',
                'sub_judul' => 'sub judul halaman',
                'cover'         => '',
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
                'status'            => "publish",

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'Visi Misi',
                'sub_judul' => 'sub judul halaman',
                'cover'         => '',
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
                'status'            => "publish",

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'Tugas Pokok & Fungsi',
                'sub_judul' => 'sub judul halaman',
                'cover'         => '',
                'slug'              => 'tugas-pokok-fungsi',
                'isi'            => 'Tugas Pokok & Fungsi, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status'            => "publish",

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'     => 'Bidang Layanan',
                'sub_judul' => 'sub judul halaman',
                'cover'         => '',
                'slug'              => 'bidang-layanan',
                'isi'            => 'Bidang Layanan, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.',
                'status'            => "publish",

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'judul'         => 'Informasi Lingkungan',
                'slug'          => 'informasi-lingkungan',
                'sub_judul'     => 'Publikasi Laporan dan Kinerja DLHK',
                'cover'         => '',
                'isi'           => '<p>Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.</p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Judul Dokumen</th>
                                            <th scope="col">Format File</th>
                                            <th scope="col">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">1</td>
                                                <td>Judul file pertama</td>
                                                <td>*.PDF</td>
                                                <td>
                                                    <a href="#" clas="btn btn-primary btn-sm rounded-0">Download</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row">2</td>
                                                <td>Judul file kedua</td>
                                                <td>*.PDF</td>
                                                <td>
                                                    <a href="#" clas="btn btn-primary btn-sm rounded-0">Download</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row">3</td>
                                                <td>Judul file ketiga</td>
                                                <td>*.PDF</td>
                                                <td>
                                                    <a href="#" clas="btn btn-primary btn-sm rounded-0">Download</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>',
                'status'        => "publish",

                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'judul'         => 'Video Profil Dinas',
                'slug'          => 'video-profil-dinas',
                'sub_judul'     => 'Berikut adalah video profil dinas',
                'cover'         => '',
                'isi'           => '<p>Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.</p>
                <iframe width="100%" height="560" src="https://www.youtube.com/embed/UV0mhY2Dxr0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status'        => "publish",

                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'judul'         => 'Profil Pejabat',
                'slug'          => 'profil-pejabat',
                'sub_judul'     => 'Berikut adalah profil pejabat pada dinas',
                'cover'         => '',
                'isi'           => '<p>Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.</p>',
                'status'        => "publish",

                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'judul'         => 'Struktur Organisasi',
                'slug'          => 'struktur-organisasi',
                'sub_judul'     => 'Berikut struktur organisasi pada dinas',
                'cover'         => '',
                'isi'           => '<p>Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.</p>',
                'status'        => "publish",

                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'judul'         => 'Kontak',
                'slug'          => 'kontak',
                'sub_judul'     => 'Silahkan hubungi kami melalui informasi kontak yang tertera',
                'cover'         => '',
                'isi'           => '<p>Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.</p>',
                'status'        => "publish",

                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'judul'         => 'Media Sosial',
                'slug'          => 'media-sosial',
                'sub_judul'     => 'Kami juga ada di berbagai platform media sosial',
                'cover'         => '',
                'isi'           => '<p>Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.</p>',
                'status'        => "publish",

                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'judul'         => 'Informasi Lingkungan',
                'slug'          => 'informasi-lingkungan',
                'sub_judul'     => 'Kami mempublikasikan berbagai informasi tentang kinerja kami',
                'cover'         => '',
                'isi'           => '<p>Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.</p>',
                'status'        => "publish",

                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'judul'         => 'Layanan Online',
                'slug'          => 'layanan-online',
                'sub_judul'     => 'Layanan online yang kami sediakan bagi masyarakat',
                'cover'         => '',
                'isi'           => '<p>Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.</p>',
                'status'        => "publish",

                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
        ]);
    }
}
