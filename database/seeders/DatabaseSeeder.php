<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $role_superadmin = Role::create(['name' => 'sadmin']);
        $role_instituteadmin = Role::create(['name' => 'iadmin']);


        $super_user = User::create([
            'name' => 'Admin Bilal',
            'email' => 'sadmin@example.com',
            'password' => bcrypt('sadmin@example.com'),
        ]);

        $super_user->assignRole($role_superadmin);


        $user2 = User::create([
            'name' => 'NON ADMIN',
            'email' => 'iadmin@example.com',
            'password' => bcrypt('iadmin@example.com'),
        ]);
        $user2->assignRole($role_instituteadmin);






        $this->call(HostelSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(RoomSeeder::class);

        $this->call(AllocationSeeder::class);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
