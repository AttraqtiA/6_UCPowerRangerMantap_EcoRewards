<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'user_name' => 'Hendra',
            'role_id' => 1, // DI USER FACTORY ROLENYA 3, member
            'isLogin' => '0',
            'isActive' => '1',
            'email' => 'owner_lisahwan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('lisahwanSnack88'),
            'user_quantity' => 20,
            'user_point' => 240,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'user_name' => 'Oppy',
            'role_id' => 2,
            'isLogin' => '0',
            'isActive' => '1',
            'email' => 'admin_lisahwan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('adminLisahwan88'),
            'user_quantity' => 30,
            'user_point' => 320,
            'remember_token' => Str::random(10),
        ]);

        User::factory(3)->create();

    }
}
