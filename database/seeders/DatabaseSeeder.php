<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role; 
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // // Membuat peran
        // $superAdminRole = Role::create(['name' => 'superadmin']);
        // $adminRole = Role::create(['name' => 'admin']);
        // $supervisorRole = Role::create(['name' => 'supervisor']);
        $this->call([
            RoleSeeder::class,
        ]);
        // // Membuat pengguna
        // User::create([
        //     'name' => 'Super Admin',
        //     'email' => 'superadmin@example.com',
        //     'password' => bcrypt('superadmin'), // Ganti dengan password yang diinginkan
        //     'role_id' => $superAdminRole->id,
        //]);

    //     User::create([
    //         'name' => 'Admin',
    //         'email' => 'admin@example.com',
    //         'password' => bcrypt('admin'), // Ganti dengan password yang diinginkan
    //         'role_id' => $adminRole->id,
    //     ]);

    //     User::create([
    //         'name' => 'Supervisor',
    //         'email' => 'supervisor@example.com',
    //         'password' => bcrypt('supervisor'), // Ganti dengan password yang diinginkan
    //         'role_id' => $supervisorRole->id,
    //     ]);

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);
    // }
}
}
