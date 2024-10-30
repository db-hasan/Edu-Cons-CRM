<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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

    public function run(): void
    {
        // foreach ($this->roles as $role) {
        //     Role::create(['name' => $role]);
        // };

        $user = User::create([
            'name' => 'Developer',
            'email' => 'ahasan.jobs@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => "admin",
            'status' => "1",
        ]);
    }
}
