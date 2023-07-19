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

        // FOLE : ADMIN
        $adminRole = Role::create(
            [
            'guard_name' => 'web',
            'name' => 'administrator',
            'display_name' => 'Administrator',
        ]);

        // ROLE : GUEST
        $guestRole = Role::create(
            [
            'guard_name' => 'web',
            'name' => 'guest',
            'display_name' => 'Guest',
        ]);

        /*
        | ==========================================
        | CREATING USERS
        | ==========================================
        */

        // ADMIN USERS
        $adminMelanTabuni = User::create([
            'name' => 'Melan Tabuni',
            'slug' => 'melan-tabuni',
            'job_title' => 'Information System Student',
            'picture' => 'melan-tabuni-200x200.jpg',
            'email' => 'melan.tabuni@gmail.com',
            'password' => bcrypt('melan.tabuni@gmail.com'),
            'status' => 'Publish',
        ]);
        $adminMelanTabuni->assignRole($adminRole);

        // GUEST USERS
        $adminMelanTabuni = User::create([
            'name' => 'Guest',
            'slug' => 'guest',
            'job_title' => 'Just a guest here',
            'picture' => '00.jpg',
            'email' => 'guest@gmail.com',
            'password' => bcrypt('guest@gmail.com'),
            'status' => 'Publish',
        ]);
        $adminMelanTabuni->assignRole($guestRole);







    }
}
