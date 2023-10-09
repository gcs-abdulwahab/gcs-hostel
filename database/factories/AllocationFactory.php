<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Allocation>
 */
class AllocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // get all the students of the hostel 1
        $students = Student::where('hostel_id', 1)->get();
        // get all the rooms of the hostel 1
        $rooms = Room::where('hostel_id', 1)->get();

        return [
            // get the random student id from the students collection
            'student_id' => $students->random()->id,
            'room_id' => $rooms->random()->id,

            'check_in' => $this->faker->date,
            'check_out' => $this->faker->date,

        ];
    }
}
