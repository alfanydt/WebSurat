<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('role')->insert([
            ['nama_role' => 'Sekretaris'],
            ['nama_role' => 'Kepala Cabang'],
            ['nama_role' => 'Superuser'],
        ]);
    }
}
