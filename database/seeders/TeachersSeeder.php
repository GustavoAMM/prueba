<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'address' => 'Calle 1',
            'phone' => '1234567890',
            'subject' => 'Matematicas',
            'seniority' => '10 años',
            'user_id' => 1,
        ]);
    }
}
