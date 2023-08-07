<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'id_role' => 1,
        ]);
        User::create([
            'name' => 'User',
            'lastname' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'id_role' => 2,
        ]);
        User::create([
            'name' => 'User2',
            'lastname' => 'User2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('password'),
            'id_role' => 2,
        ]);
    }
}
