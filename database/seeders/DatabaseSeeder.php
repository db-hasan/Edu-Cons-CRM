<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Branch;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    private $roles = [
        'admin',
        'visitor',
        'vendor',
        'seller',
        'checker',
    ];
    private $branches = [
        'Dhaka',
        'Rajshahi',
        'Rangpur',
        'Sylhet',
        'Chittagong',
        'Barisal',
        'Khulna',
        'Mymensingh',
        'United Kingdom',
        'United States',
        'Australia',
        'Canada',
        'Malaysia',
        'Others',
    ];

    public function run(): void
    {
        // foreach ($this->roles as $role) {
        //     Role::create(['name' => $role]);
        // };

        foreach ($this->branches as $index => $branch) {
            Branch::create([
                'name' => $branch,
                'number' => '017236290' . ($index + 1), // Phone number
                'email' => 'branch' . ($index + 1) . '@example.com', // Email format
                'address' => '1460 Joseph Street' . ($index + 1), // Zip code
                'zip' => '9080' . ($index + 1), // Zip code
                'status' => "1", // Active status
            ]);
        }



        $user = User::create([
            'name' => 'Developer',
            'email' => 'ahasan.jobs@gmail.com',
            'number' => '01723629080',
            'password' => Hash::make('12345678'),
            'roles' => "admin",
            'status' => "1",
        ]);
    }
}
