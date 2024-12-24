<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Branch;
use App\Models\Degree;
use App\Models\Subject;
use App\Models\Country;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    private $permissions = [
        'user-permission',
        'role-permission',
        'password-update',
        'admin-dashboard',
        
        'branch-permission',
        'upload-permission',
        'single-permission',
    ];

    private $degrees = [
        "SSC",
        "HSC",
        "Diploma",
        "Bachelor's",
        "Master's",
        "B.A",
        "B.Sc",
        "B.S.S",
        "B.B.A",
        "M.A",
        "M.Sc",
        "M.S.S",
        "MBA",
        "PhD",
    ];

    private $subjects = [
        "Arts",
        "Science",
        "Commerce",
        "Bangla",
        "English",
        "Math",
    ];

    private $countries = [
        'United Kingdom',
        'United States',
        'Australia',
        'Canada',
        'Malaysia',
        'Others',
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
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        };

        foreach ($this->degrees as $degree) {
            Degree::create(['name' => $degree]);
        };
        foreach ($this->subjects as $subject) {
            Subject::create(['name' => $subject]);
        };
        foreach ($this->countries as $country) {
            Country::create(['name' => $country]);
        };

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
            'status' => "1",
        ]);

        $role = Role::create(['name' => 'superadmin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->syncRoles([$role->id]);
    }
}
