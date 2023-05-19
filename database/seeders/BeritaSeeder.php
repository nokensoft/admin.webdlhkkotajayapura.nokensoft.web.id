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

            'judul'         => 'judul berita satu',
            'slug'          => 'judul-berita-satu',
            'cover'         => 'file/berita/cover-0.jpg',
            'isi'           => '<blockquote><p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p></blockquote>
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
                                    
            'isi_singkat'    => 'Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.',

            'status'        => 'publish',
        ]);

        Berita::create([
            'user_id'       => 3,
            'category_id'   => 2,

            'judul'         => 'judul berita dua',
            'slug'          => 'judul-berita-dua',
            'cover'         => 'file/berita/cover-0.jpg',
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

            'isi_singkat'    => 'Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.',

            'status'        => 'publish',
        ]);

        Berita::create([
            'user_id'       => 3,
            'category_id'   => 3,

            'judul'         => 'judul berita tiga',
            'slug'          => 'judul-berita-tiga',
            'cover'         => 'file/berita/cover-0.jpg',
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

            'isi_singkat'    => 'Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.',

            'status'        => 'publish',
        ]);

        Berita::create([
            'user_id'       => 3,
            'category_id'   => 4,

            'judul'         => 'judul berita empat',
            'slug'          => 'judul-berita-empat',
            'cover'         => 'file/berita/cover-0.jpg',
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

            'isi_singkat'    => 'Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.',
            
            'status'        => 'publish',
        ]);

        Berita::create([
            'user_id'       => 3,
            'category_id'   => 1,

            'judul'         => 'judul berita lima',
            'slug'          => 'judul-berita-lima',
            'cover'         => 'file/berita/cover-0.jpg',
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

            'isi_singkat'    => 'Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.',
            
            'status'        => 'publish',
        ]);

    }
}
