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

        $adminRole = Role::create(
            [
            'guard_name' => 'web',
            'name' => 'administrator',
            'display_name' => 'Administrator',
        ]);
        $editorRole = Role::create(
            [
            'guard_name' => 'web',
            'name' => 'editor',
            'display_name' => 'Editor',
        ]);
        $authorRole = Role::create(
            [
            'guard_name' => 'web',
            'name' => 'author',
            'display_name' => 'Author',
        ]);
        

        $admin = User::create([
            'name' => 'Hardik Savani', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole($adminRole);

        $editor = User::create([
            'name' => 'Johan', 
            'email' => 'editor@gmail.com',
            'password' => bcrypt('johan@1234')
        ]);
        $editor->assignRole($editorRole);

        $author = User::create([
            'name' => 'Janzen', 
            'email' => 'author@gmail.com',
            'password' => bcrypt('author@1234')
        ]);
        $author->assignRole($authorRole);



    }
}
