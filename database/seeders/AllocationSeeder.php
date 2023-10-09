<?php

namespace Database\Seeders;

use App\Models\Allocation;
use App\Models\Room;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Allocation::create([
            'student_id' => 1,
            'room_id' => 1,
            'check_in' => '2021-01-01',
        ]);
        Allocation::create([
            'student_id' => 2,
            'room_id' => 1,
            'check_in' => '2021-01-01',
        ]);


        Allocation::create([
            'student_id' => 3,
            'room_id' => 2,
            'check_in' => '2021-01-01',
        ]);
        Allocation::create([
            'student_id' => 4,
            'room_id' => 2,
            'check_in' => '2021-01-01',
        ]);

        Allocation::create([
            'student_id' => 4,
            'room_id' => 3,
            'check_in' => '2021-01-01',
        ]);
    }
}
