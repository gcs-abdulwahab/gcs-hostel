<?php

namespace Database\Seeders;

use App\Models\Hostel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HostelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create Hajveri Hostel
        Hostel::create([
            'name' => 'Hajveri Hostel',
            'location' => 'Lahore',
            'phone' => '03001234567',
            'email' => 'haj@gmail.com',
            'status' => 'active',
            'isMale' => true,
        ]);
        // create Islamia Hostel
        Hostel::create([
            'name' => 'Islamia Hostel',
            'location' => 'Lahore',
            'phone' => '03001234567',
            'email' => 'islamia@gmail.com',
            'status' => 'active',
            'isMale' => true,
        ]);
        Hostel::create([
            'name' => 'GMDC Hostel',
            'location' => 'Lahore',
            'phone' => '03231234567',
            'email' => 'gmdc@gmail.com',
            'status' => 'active',
            'isMale' => true,
        ]);
    }
}
