<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'role_name' => 'TrashBank',
        ]);

        Role::create([
            'role_name' => 'Redeemer',
        ]);

        Role::create([
            'role_name' => 'Member',
        ]);
    }
}
