<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
/*
       $table->string('name');
            $table->string('phone');
            $table->string('cnic');
            $table->date('dob');
            $table->string('email');
            $table->string('guardian_name');
            $table->string('guardian_phone');
            $table->string('guardian_address');
            $table->string('guardian_email')->nullable();
            $table->string('guardian_occupation')->nullable();
            */


        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'cnic' => $this->faker->phoneNumber,
            'dob' => $this->faker->date,
            'guardian_name' => $this->faker->name,
            'guardian_phone' => $this->faker->phoneNumber,
            'guardian_address' => $this->faker->address,
            'guardian_email' => $this->faker->safeEmail,
            'guardian_occupation' => $this->faker->jobTitle,

            // hostel id is the foreign key from the Hostel table
            'hostel_id' => 1,

        ];
    }
}
