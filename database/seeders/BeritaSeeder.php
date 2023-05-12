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
            'user_id'   => 1,
            'category_id'   => 1,
            'title'   => 'What is Lorem Ipsum',
            'slug'   => 'what-is-lorem-ipsum',
            'body'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
            'status'   => 'publish',
        ]);
        Berita::create([
            'user_id'   => 2,
            'category_id'   => 2,
            'title'   => 'Where does it come from',
            'slug'   => 'where-does-it-come-from',
            'body'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
            'status'   => 'draft',
        ]);
        Berita::create([
            'user_id'   => 1,
            'category_id'   => 2,
            'title'   => 'Where does it come from',
            'slug'   => 'where-does-it-come-from',
            'body'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
            'status'   => 'draft',
        ]);
        Berita::create([
            'user_id'   => 3,
            'category_id'   => 2,
            'title'   => 'Why do we use it',
            'slug'   => 'why-do-we-use-it',
            'body'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
            'status'   => 'publish',
        ]);
    }
}
