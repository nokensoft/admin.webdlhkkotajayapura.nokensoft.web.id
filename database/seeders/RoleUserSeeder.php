<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Str;
class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()['cache']->forget('spatie.permission.cache');

        // ASIGN ROLES
        $adminRole = Role::create(
            [
            'guard_name'        => 'web',
            'name'              => 'administrator',
            'display_name'      => 'Administrator',
        ]);

        $editorRole = Role::create(
            [
            'guard_name'        => 'web',
            'name'              => 'editor',
            'display_name'      => 'Editor',
        ]);

        $authorRole = Role::create(
            [
            'guard_name'        => 'web',
            'name'              => 'author',
            'display_name'      => 'Author',
        ]);

        $supervisorRole = Role::create(
            [
            'guard_name'        => 'web',
            'name'              => 'supervisor',
            'display_name'      => 'Supervisor',
        ]);

        /*
        |
        | CREATING USERS
        |
        */

        // ADMIN

        $adminDLHK = User::create([
            'id' => 1,
            'name'              => 'Admin DLHK',
            'slug'              => 'admin-dlhk'.time().Str::random(12),
            'picture'           => '00.jpg',
            'email'             => 'admin@dlhk.jayapurakota.go.id',
            'password'          => bcrypt('4dm1n@DLHK_2023'),
            'status'           => 'Publish',
            'description' => 'Admin website memiliki tugas mengelolah semua fitur yang ada pada bagian dasbor website. Termasuk mengelola pengguna (user).',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $adminDLHK->assignRole($adminRole);

        $adminJanzen = User::create([
            'id' => 2,
            'name'              => 'Janzen Faidiban',
            'slug'              => 'janzen-faidiban'.time().Str::random(12),
            'picture'           => '05-janzen.jpg',
            'email'             => 'janzen@dlhk.jayapurakota.go.id',
            'password'          => bcrypt('janzen@dlhk.jayapurakota.go.id'),
            'status'           => 'Publish',
            'description' => 'Akun web developer yang menangani pembuatan website dan maintenance website DLHK',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $adminJanzen->assignRole($adminRole);


        /*
        | =====================================================
        |
        */ 

        // EDITOR
        $editorDLHK = User::create([
            'name'              => 'Editor DLHK',
            'slug'              => 'editor-dlhk'.time().Str::random(12),
            'picture'           => '00.jpg',
            'email'             => 'editor@dlhk.jayapurakota.go.id',
            'password'          => bcrypt('3d1t0r@DLHK_2023'),
            'status'           => 'Publish',
            'description' => 'Editor berita bertugas memeriksa dan melakukan perubahan konten berita, halaman, dan halaman pada bagian informasi lingkungan.',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $editorDLHK->assignRole($editorRole);




        /*
        | =====================================================
        |
        */ 

        // AUTHOR
        $authorDLHK = User::create([
            'name'              => 'Author DLHK',
            'slug'              => 'author-dlhk'.time().Str::random(12),
            'picture'           => '02.jpg',
            'email'             => 'author.dlhk@jayapurakota.go.id',
            'password'          => bcrypt('author.dlhk@jayapurakota.go.id'),
            'status'           => 'Publish',
            'description' => 'Akun "author" untuk developer web',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $authorDLHK->assignRole($authorRole);

        // AUTHOR > BIDANG TATA LINGKUKNGAN
        $authorSyakur = User::create([
            'name'              => 'Syakur',
            'slug'              => 'syakur'.time().Str::random(12),
            'picture'           => '00.jpg',
            'email'             => 'syakur@dlhk.jayapurakota.go.id',
            'password'          => bcrypt('sy4kur@DLHK_2023'),
            'status'           => 'Publish',
            'description' => 'Bidang Tata Lingkungan',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $authorSyakur->assignRole($authorRole);

        // AUTHOR > BIDANG PENGELOLAAN SAMPAH DAN LIMBAH B3
        $authorAgus = User::create([
            'name'              => 'Agus Hariyadi',
            'slug'              => 'agus'.time().Str::random(12),
            'picture'           => '00.jpg',
            'email'             => 'agus@dlhk.jayapurakota.go.id',
            'password'          => bcrypt('4gu5@DLHK_2023'),
            'status'           => 'Publish',
            'description' => 'Bidang Pengelolaan Sampah dan Limbah B3',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $authorAgus->assignRole($authorRole);

        // AUTHOR > BIDANG PENGENDALIAN PENCEMARAN DAN KERUSAKAN LINGKUNGAN
        $authorNatalia = User::create([
            'name'              => 'Natalia Kristy Merauje',
            'slug'              => 'natalia'.time().Str::random(12),
            'picture'           => '00.jpg',
            'email'             => 'natalia@dlhk.jayapurakota.go.id',
            'password'          => bcrypt('n4t4l14@DLHK_2023'),
            'status'           => 'Publish',
            'description' => 'Bidang Pengendalian Pencemaran dan Kerusakan Lingkungan',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $authorNatalia->assignRole($authorRole);

        // AUTHOR > BIDANG PENAATAN DAN PENINGKATAN KAPASITAS LINGKUNGAN
        $authorJabbar = User::create([
            'name'              => 'Abdul Jabbaar',
            'slug'              => 'jabbaar'.time().Str::random(12),
            'picture'           => '00.jpg',
            'email'             => 'jabbaar@dlhk.jayapurakota.go.id',
            'password'          => bcrypt('j46644r@DLHK_2023'),
            'status'           => 'Publish',
            'description' => 'Bidang Penataan dan Peningkatan Kapasitas Lingkukngan',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $authorJabbar->assignRole($authorRole);

        // AUTHOR > SEKREATARIAT
        $authorWFerbiadi = User::create([
            'name'              => 'Wero Ferbiadi Mandala',
            'slug'              => 'wferbiadi'.time().Str::random(12),
            'picture'           => '00.jpg',
            'email'             => 'wferbiadi@dlhk.jayapurakota.go.id',
            'password'          => bcrypt('wf3b1ard1@DLHK_2023'),
            'status'           => 'Publish',
            'description' => 'Sekretaris Dina Lingkungan Hidup Kota Jayapura',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $authorWFerbiadi->assignRole($authorRole);

        // AUTHOR > UPTD Laboratorium
        $authorEflantin = User::create([
            'name'              => 'Eflantin Berlien Siahaya',
            'slug'              => 'eflantin'.time().Str::random(12),
            'picture'           => '00.jpg',
            'email'             => 'eflantin@dlhk.jayapurakota.go.id',
            'password'          => bcrypt('3fl4nt1n@DLHK_2023'),
            'status'           => 'Publish',
            'description' => 'Unit Pelaksana Teknis Dinas Bagian Laboratorium',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $authorEflantin->assignRole($authorRole);

        // AUTHOR > UPTD TPA
        $authorBernharth = User::create([
            'name'              => 'Bernharth Surijin Rumkorem',
            'slug'              => 'bernharth'.time().Str::random(12),
            'picture'           => '00.jpg',
            'email'             => 'bernharth@dlhk.jayapurakota.go.id',
            'password'          => bcrypt('b3rh4rth@DLHK_2023'),
            'status'           => 'Publish',
            'description' => 'Unit Pelaksana Teknis Dinas Bagian Tempat Pembuangan Akhir',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $authorBernharth->assignRole($authorRole);

        // AUTHOR > UPTD Bank Sampah
        $authorSammanggas = User::create([
            'name'              => 'Sammanggas Ronsumbre',
            'slug'              => 'sammanggas'.time().Str::random(12),
            'picture'           => '00.jpg',
            'email'             => 'sammanggas@dlhk.jayapurakota.go.id',
            'password'          => bcrypt('s4mm4ngg45@DLHK_2023'),
            'status'           => 'Publish',
            'description' => 'Unit Pelaksana Teknis Dinas Bagian Bank Sampah',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $authorSammanggas->assignRole($authorRole);




        /*
        | =====================================================
        |
        */ 


        // SUPERVISOR
        $supervisorDLHK = User::create([
            'name'              => 'Supervisor DLHK',
            'slug'              => 'supervisor-dlhk'.time().Str::random(12),
            'picture'           => '03.jpg',
            'email'             => 'supervisor.dlhk@jayapurakota.go.id',
            'password'          => bcrypt('supervisor.dlhk@jayapurakota.go.id'),
            'status'           => 'Publish',
            'description' => 'Akun "Supervisor" adalah akun yang memiliki hak untuk memberikan konfirmasi pada konten yang hendak dipublikasikan di website DLHK Kota Jayapura.',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $supervisorDLHK->assignRole($supervisorRole);

        $supervisorAlex = User::create([
            'name'              => 'Alex Deu',
            'slug'              => 'alex-Deu'.time().Str::random(12),
            'picture'           => '07-alex-deu.jpg',
            'email'             => 'alex.dlhk@jayapurakota.go.id',
            'password'          => bcrypt('alex.dlhk@jayapurakota.go.id'),
            'status'           => 'Publish',
            'description' => 'Akun "Sekreataris DLHK" dengan peran sebagai "Supervisor". ',

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
        $supervisorAlex->assignRole($supervisorRole);



    }
}
