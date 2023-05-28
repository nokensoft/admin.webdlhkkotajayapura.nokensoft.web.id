<?php

namespace Database\Seeders;

use App\Models\Berita\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Berita::create([
            'user_id'       => 3,
            'category_id'   => 1,

            'judul'         => 'Judul Berita Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura Satu',
            'slug'          => 'judul-berita-dinas-lingkungan-hidup-dan-kebersihan-kota-jayapura-satu',
            // 'gambar'         => 'gambar/berita/01.jpg',
            'konten'           => '<blockquote><p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p></blockquote>
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

            'konten_singkat'    => 'Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.',

            'status'        => 'publish',
        ]);

        Berita::create([
            'user_id'       => 3,
            'category_id'   => 2,

            'judul'         => 'Judul Berita Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura-Dua',
            'slug'          => 'judul-berita-dinas-lingkungan-hidup-dan-kebersihan-kota-jayapura-dua',
            // 'gambar'         => 'gambar/berita/02.jpg',
            'konten'       => '<blockquote><p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p></blockquote>
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

            'konten_singkat'    => 'Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.',

            'status'        => 'publish',
        ]);

        Berita::create([
            'user_id'       => 3,
            'category_id'   => 3,

            'judul'         => 'Judul Berita Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura-Tiga',
            'slug'          => 'judul-berita-dinas-lingkungan-hidup-dan-kebersihan-kota-jayapura-tiga',
            // 'gambar'         => 'gambar/berita/04.jpg',
            'konten'       => '<blockquote><p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p></blockquote>
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

            'konten_singkat'    => 'Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.',

            'status'        => 'publish',
        ]);

        Berita::create([
            'user_id'       => 3,
            'category_id'   => 4,

            'judul'         => 'Judul Berita Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura Empat',
            'slug'          => 'judul-berita-dinas-lingkungan-hidup-dan-kebersihan-kota-jayapura-empat',
            // 'gambar'         => 'gambar/berita/05.jpg',
            'konten'       => '<blockquote><p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p></blockquote>
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

            'konten_singkat'    => 'Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.',

            'status'        => 'publish',
        ]);

        Berita::create([
            'user_id'       => 3,
            'category_id'   => 1,

            'judul'         => 'Judul Berita Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura Lima',
            'slug'          => 'judul-berita-dinas-lingkungan-hidup-dan-kebersihan-kota-jayapura-lima',
            // 'gambar'         => 'gambar/berita/06.jpg',
            'konten'       => '<blockquote><p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p></blockquote>
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

            'konten_singkat'    => 'Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.',

            'status'        => 'publish',
        ]);

    }
}
