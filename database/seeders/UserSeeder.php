<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [

            [
                'id' => 2,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'number' => '01700000002',
                'password' => Hash::make('12345678'),
                'rolename' => 'Admin',
                'status' => '1',
            ],
            [
                'id' => 3,
                'name' => 'Viewers',
                'email' => 'viewers@gmail.com',
                'number' => '01700000003',
                'password' => Hash::make('12345678'),
                'rolename' => 'Admin',
                'status' => '1',
            ],
            [
                'id' => 4,
                'name' => 'Accounts',
                'email' => 'accounts@gmail.com',
                'number' => '01700000004',
                'password' => Hash::make('12345678'),
                'rolename' => 'Accounts',
                'status' => '1',
            ],
            [
                'id' => 5,
                'name' => 'Data',
                'email' => 'data@gmail.com',
                'number' => '01700000005',
                'password' => Hash::make('12345678'),
                'rolename' => 'Data',
                'status' => '1',
            ],
            [
                'id' => 6,
                'name' => 'Country-Manager',
                'email' => 'cm@gmail.com',
                'number' => '01700000006',
                'password' => Hash::make('12345678'),
                'rolename' => 'Country-Manager',
                'status' => '1',
            ],
            [
                'id' => 7,
                'name' => 'Region-Manager',
                'email' => 'rm@gmail.com',
                'number' => '01700000007',
                'password' => Hash::make('12345678'),
                'rolename' => 'Region-Manager',
                'status' => '1',
            ],
            [
                'id' => 8,
                'name' => 'Branch-Manager',
                'email' => 'bm@gmail.com',
                'number' => '01700000008',
                'password' => Hash::make('12345678'),
                'rolename' => 'Branch-Manager',
                'status' => '1',
            ],
            [
                'id' => 9,
                'name' => 'Consultant',
                'email' => 'consultant@gmail.com',
                'number' => '01700000009',
                'password' => Hash::make('12345678'),
                'rolename' => 'Consultant',
                'status' => '1',
            ],
            [
                'id' => 10,
                'name' => 'Agent-Manager',
                'email' => 'agm@gmail.com',
                'number' => '01700000010',
                'password' => Hash::make('12345678'),
                'rolename' => 'Agent-Manager',
                'status' => '1',
            ],
            [
                'id' => 11,
                'name' => 'Agent',
                'email' => 'agent@gmail.com',
                'number' => '01700000011',
                'password' => Hash::make('12345678'),
                'rolename' => 'Agent',
                'status' => '1',
            ],
            [
                'id' => 12,
                'name' => 'Admission-Manager',
                'email' => 'adm@gmail.com',
                'number' => '01700000012',
                'password' => Hash::make('12345678'),
                'rolename' => 'Admission-Manager',
                'status' => '1',
            ],
            [
                'id' => 13,
                'name' => 'Admission-Team-Lead',
                'email' => 'adtl@gmail.com',
                'number' => '01700000013',
                'password' => Hash::make('12345678'),
                'rolename' => 'Admission-Team-Lead',
                'status' => '1',
            ],
            [
                'id' => 14,
                'name' => 'Sr.Admission-Officer',
                'email' => 'adf@gmail.com',
                'number' => '01700000014',
                'password' => Hash::make('12345678'),
                'rolename' => 'Sr.Admission-Officer',
                'status' => '1',
            ],
            [
                'id' => 15,
                'name' => 'Compliance-Manager',
                'email' => 'com@gmail.com',
                'number' => '01700000015',
                'password' => Hash::make('12345678'),
                'rolename' => 'Compliance-Manager',
                'status' => '1',
            ],
            [
                'id' => 16,
                'name' => 'Compliance-Team-Lead',
                'email' => 'cotm@gmail.com',
                'number' => '01700000016',
                'password' => Hash::make('12345678'),
                'rolename' => 'Compliance-Team-Lead',
                'status' => '1',
            ],
            [
                'id' => 17,
                'name' => 'Sr.Compliance-Officer',
                'email' => 'cof@gmail.com',
                'number' => '01700000017',
                'password' => Hash::make('12345678'),
                'rolename' => 'Admission-Manager',
                'status' => '1',
            ],
            [
                'id' => 18,
                'name' => 'Marketing-Manager',
                'email' => 'mam@gmail.com',
                'number' => '01700000018',
                'password' => Hash::make('12345678'),
                'rolename' => 'Marketing-Manager',
                'status' => '1',
            ],
            [
                'id' => 19,
                'name' => 'Marketing-Team-Lead',
                'email' => 'mtl@gmail.com',
                'number' => '01700000019',
                'password' => Hash::make('12345678'),
                'rolename' => 'Marketing-Team-Lead',
                'status' => '1',
            ],
            [
                'id' => 20,
                'name' => 'Sr.Marketing-Officer',
                'email' => 'mf@gmail.com',
                'number' => '01700000020',
                'password' => Hash::make('12345678'),
                'rolename' => 'Marketing-Manager',
                'status' => '1',
            ],   
        ];

        foreach ($users as $userData) {
            // Ensure the role exists
            $role = Role::firstOrCreate(['name' => $userData['rolename']]);

            // Create or update the user
            $user = User::updateOrCreate(
                [
                    'id' => $userData['id'],
                    'email' => $userData['email'],
                    'name' => $userData['name'],
                    'number' => $userData['number'],
                    'password' => $userData['password'],
                    'rolename' => $userData['rolename'],
                    'status' => $userData['status'],
                ]
            );
            $user->assignRole($role);
        }
    }
}
