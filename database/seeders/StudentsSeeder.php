<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'enrollment' => 'S18012131',
            'generation' => '2018-2022',
            'classroom' => '1A',
            'final_grade' => 10,
            'user_id' => 2,
        ]);
        Student::create([
            'enrollment' => 'S18012132',
            'generation' => '2018-2022',
            'classroom' => '1A',
            'final_grade' => 10,
            'user_id' => 3,
        ]);
    }
}
