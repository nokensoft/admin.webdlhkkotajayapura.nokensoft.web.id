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
        $admin = User::create([
            'name'              => 'Admin',
            'slug'              => 'admin',
            // 'picture'           => 'gambar/pengguna/01.jpg',
            'email'             => 'admin.dlhk@jayapurakab.go.id',
            'password'          => bcrypt('admin.dlhk@jayapurakab.go.id')
        ]);
        $admin->assignRole($adminRole);

        // EDITOR
        $editor = User::create([
            'name'              => 'Editor',
            'slug'              => 'editor',
            // 'picture'           => 'gambar/pengguna/02.jpg',
            'email'             => 'editor.dlhk@jayapurakab.go.id',
            'password'          => bcrypt('editor.dlhk@jayapurakab.go.id')
        ]);
        $editor->assignRole($editorRole);

        // AUTHOR
        $author = User::create([
            'name'              => 'Author',
            'slug'              => 'author',
            // 'picture'           => 'gambar/pengguna/02.jpg',
            'email'             => 'author.dlhk@jayapurakab.go.id',
            'password'          => bcrypt('author.dlhk@jayapurakab.go.id')
        ]);
        $author->assignRole($authorRole);

        // supervisor
        $supervisor = User::create([
            'name'              => 'Supervisor',
            'slug'              => 'supervisor',
            // 'picture'           => 'gambar/pengguna/03.jpg',
            'email'             => 'supervisor.dlhk@jayapurakab.go.id',
            'password'          => bcrypt('supervisor.dlhk@jayapurakab.go.id')
        ]);
        $supervisor->assignRole($supervisorRole);



    }
}
