<?php

namespace Database\Seeders;

use App\Models\Hostel;
use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // foreach hostel create 10 rooms
        foreach (Hostel::all() as $hostel) {
            Room::factory()->count(10)->create([
                
                'hostel_id' => $hostel->id,
            ]);
        }
    }
}
