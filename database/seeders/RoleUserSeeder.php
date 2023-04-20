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

        // ADMIN
        $admin = User::create([
            'name'              => 'Admin',
            'slug'              => 'admin',
            'email'             => 'admin@gmail.com',
            'password'          => bcrypt('admin@gmail.com')
        ]);
        $admin->assignRole($adminRole);

        // EDITOR
        $editor = User::create([
            'name'              => 'Editor',
            'slug'              => 'Editor',
            'email'             => 'editor@gmail.com',
            'password'          => bcrypt('editor@gmail.com')
        ]);
        $editor->assignRole($editorRole);

        // AUTHOR
        $author = User::create([
            'name'              => 'Author',
            'slug'              => 'author',
            'email'             => 'author@gmail.com',
            'password'          => bcrypt('author@gmail.com')
        ]);
        $author->assignRole($authorRole);



    }
}
