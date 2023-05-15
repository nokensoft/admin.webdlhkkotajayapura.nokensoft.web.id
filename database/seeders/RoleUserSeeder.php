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

        // ADMIN
        $admin = User::create([
            'name'              => 'Admin',
            'slug'              => 'admin',
            'email'             => 'admin@demo.id',
            'password'          => bcrypt('admin@demo.id')
        ]);
        $admin->assignRole($adminRole);

        // EDITOR
        $editor = User::create([
            'name'              => 'Editor',
            'slug'              => 'Editor',
            'email'             => 'editor@demo.id',
            'password'          => bcrypt('editor@demo.id')
        ]);
        $editor->assignRole($editorRole);

        // AUTHOR
        $author = User::create([
            'name'              => 'Author',
            'slug'              => 'author',
            'email'             => 'author@demo.id',
            'password'          => bcrypt('author@demo.id')
        ]);
        $author->assignRole($authorRole);

        // supervisor
        $supervisor = User::create([
            'name'              => 'Supervisor',
            'slug'              => 'supervisor',
            'email'             => 'supervisor@demo.id',
            'password'          => bcrypt('supervisor@demo.id')
        ]);
        $supervisor->assignRole($supervisorRole);



    }
}
