<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

/* $table->string('name');
            $table->string('description');
            // capacity
            $table->integer('capacity');
 */


        return [

            // fake name should be like  Room-1, Room-2, Room-3, etc
            'name' => 'Room-' . $this->faker->numberBetween(1,100),
            // fake description
            'description' => $this->faker->text(100),
            //capacity should be between 1 and 4
            'capacity' => $this->faker->numberBetween(1,4),
            // hostel id is the foreign key from the Hostel table
            'hostel_id' => 1, // by default its HostelID 1


        ];
    }
}
