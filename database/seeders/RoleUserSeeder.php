<?php

namespace Database\Seeders;

use App\Models\User;
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

        $adminJanzen = User::create([
            'name'              => 'Janzen Faidiban',
            'slug'              => 'janzen-faidiban',
            'picture'           => 'gambar/pengguna/05-janzen.jpg',
            'email'             => 'janzen.dlhk@jayapurakota.go.id',
            'password'          => bcrypt('janzen.dlhk@jayapurakota.go.id')
        ]);
        $adminJanzen->assignRole($adminRole);

        $adminDLHK = User::create([
            'name'              => 'Admin DLHK',
            'slug'              => 'admin-dlhk',
            'picture'           => 'gambar/pengguna/01.jpg',
            'email'             => 'admin.dlhk@jayapurakota.go.id',
            'password'          => bcrypt('admin.dlhk@jayapurakota.go.id')
        ]);
        $adminDLHK->assignRole($adminRole);

        // EDITOR
        $editorDLHK = User::create([
            'name'              => 'Editor DLHK',
            'slug'              => 'editor-dlhk',
            'picture'           => 'gambar/pengguna/04.jpg',
            'email'             => 'editor.dlhk@jayapurakota.go.id',
            'password'          => bcrypt('editor.dlhk@jayapurakota.go.id')
        ]);
        $editorDLHK->assignRole($editorRole);

        // AUTHOR
        $authorDLHK = User::create([
            'name'              => 'Author DLHK',
            'slug'              => 'author-dlhk',
            'picture'           => 'gambar/pengguna/02.jpg',
            'email'             => 'author.dlhk@jayapurakota.go.id',
            'password'          => bcrypt('author.dlhk@jayapurakota.go.id')
        ]);
        $authorDLHK->assignRole($authorRole);

        // SUPERVISOR
        $supervisorDLHK = User::create([
            'name'              => 'Supervisor DLHK',
            'slug'              => 'supervisor-dlhk',
            'picture'           => 'gambar/pengguna/03.jpg',
            'email'             => 'supervisor.dlhk@jayapurakota.go.id',
            'password'          => bcrypt('supervisor.dlhk@jayapurakota.go.id')
        ]);
        $supervisorDLHK->assignRole($supervisorRole);



    }
}
