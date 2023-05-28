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
     * @retur
     * n void
     */
    public function run()
    {

        Halaman::insert([
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Profil Dinas',
                'sub_judul'         => 'Gambaran Umum Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '1.jpg',
                'slug'              => 'profil-dinas',

                'konten_singkat'    => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura telah berdiri sejak tahun 2017. DLHK Kota Jayapura memiliki Tugas dan Fungsi dan juga tata kerja secara dinas',

                'konten'            => '<blockquote><p>Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura dibentuk berdasarkan Peraturan Walikota Jaypura Nomor 47 Tahun 2017 tentang Perubahan Atas Peraturan Walikota Jayapura Nomor 31 Tahun 2016 Tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi Serta Tata Kerja Dinas-Dinas Daerah, mempunyai tugas membantu Walikota dalam melaksanakan Urusan Pemerintah yang menjadi kewenangan daerah di Bidang Lingkungan Hidup.</p></blockquote>
                                        <p>Untuk menyelenggarakan tugas sebagaimana tersebut di atas, Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura mempunyai fungsi:</p>
                                        <ol class="unorder-list mb-20">
                                            <li>Perumusan Kebijakan Daerah di Bidang Lingkungan Hidup;</li>
                                            <li>Pelaksanaan Kebijakan Daerah di Bidang Lingkungan Hidup;</li>
                                            <li>Pelaksanaan Evaluasi dan Pelaporan Daerah di Bidang Lingkungan Hidup;</li>
                                            <li>Pelaksanaan Tugas lain yang diberikan oleh Walikota sesuai dengan Tugas dan Fungsinya.;</li>
                                        </ol>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Profil Pimpinan',
                'sub_judul'         => 'Profil Kepala Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '2.jpg',
                'slug'              => 'profil-pimpinan',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Visi Misi',
                'sub_judul'         => 'Visi dan Misi Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '3.jpg',
                'slug'              => 'visi-misi',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Tugas Pokok & Fungsi',
                'sub_judul'         => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '4.jpg',
                'slug'              => 'tugas-pokok-fungsi',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],

            [
                'user_id'           => 3,
                'judul_halaman'     => 'Bidang Layanan',
                'slug'              => 'bidang-layanan',
                'sub_judul'         => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '5.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Informasi Lingkungan',
                'slug'              => 'informasi-lingkungan',
                'sub_judul'         => 'Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '6.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Video Profil Dinas',
                'slug'              => 'video-profil-dinas',
                'sub_judul'         => 'Video Profil Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '6.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Profil Pejabat',
                'slug'              => 'profil-pejabat',
                'sub_judul'         => 'Para Pejabat di Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '7.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Struktur Organisasi',
                'slug'              => 'struktur-organisasi',
                'sub_judul'         => 'Struktur Organisasi Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura',
                'gambar'            => '8.jpg',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Kontak',
                'slug'              => 'kontak',
                'sub_judul'         => 'Silahkan hubungi kami melalui informasi kontak yang tertera',
                'gambar'            => '',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Media Sosial',
                'slug'              => 'media-sosial',
                'sub_judul'         => 'Kami juga ada di berbagai platform media sosial',
                'gambar'            => '',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Informasi Lingkungan',
                'slug'              => 'informasi-lingkungan',
                'sub_judul'         => 'Kami mempublikasikan berbagai informasi tentang kinerja kami',
                'gambar'            => '',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
            [
                'user_id'           => 3,
                'judul_halaman'     => 'Layanan Online',
                'slug'              => 'layanan-online',
                'sub_judul'         => 'Layanan online yang kami sediakan bagi masyarakat',
                'gambar'            => '',

                'konten_singkat'    => '',

                'konten'            => '<p><h2>Maaf!</h2> Halaman ini dalam tahap pengembangan. Silahkan kembali lagi kemudian untuk mendapatkan informasi yang Anda cari.</p>',



                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ],
        ]);
    }
}
