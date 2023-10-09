<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create 10 Students of hostel 1
        Student::factory(30)->create([
            'hostel_id' => 1,
        ]);

        Student::factory(20)->create([
            'hostel_id' => 2,
        ]);


    }
}
