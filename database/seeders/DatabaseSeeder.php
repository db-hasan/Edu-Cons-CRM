<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Branch;
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

    private $countries = [
        'Afghanistan', 'Albania', 'Algeria', 'Andorra', 'Angola', 
        'Antigua and Barbuda', 'Argentina', 'Armenia', 'Australia', 'Austria', 
        'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 
        'Belarus', 'Belgium', 'Belize', 'Benin', 'Bhutan', 
        'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'Brunei', 
        'Bulgaria', 'Burkina Faso', 'Burundi', 'Cabo Verde', 'Cambodia', 
        'Cameroon', 'Canada', 'Central African Republic', 'Chad', 'Chile', 
        'China', 'Colombia', 'Comoros', 'Congo (Congo-Brazzaville)', 'Costa Rica', 
        'Croatia', 'Cuba', 'Cyprus', 'Czechia (Czech Republic)', 'Democratic Republic of the Congo', 
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'Ecuador', 
        'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 
        'Eswatini (fmr. "Swaziland")', 'Ethiopia', 'Fiji', 'Finland', 'France', 
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 
        'Greece', 'Grenada', 'Guatemala', 'Guinea', 'Guinea-Bissau', 
        'Guyana', 'Haiti', 'Holy See', 'Honduras', 'Hungary', 
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 
        'Ireland', 'Israel', 'Italy', 'Jamaica', 'Japan', 
        'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Kuwait', 
        'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 
        'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 
        'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 
        'Malta', 'Marshall Islands', 'Mauritania', 'Mauritius', 'Mexico', 
        'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 
        'Morocco', 'Mozambique', 'Myanmar (formerly Burma)', 'Namibia', 'Nauru', 
        'Nepal', 'Netherlands', 'New Zealand', 'Nicaragua', 'Niger', 
        'Nigeria', 'North Korea', 'North Macedonia', 'Norway', 'Oman', 
        'Pakistan', 'Palau', 'Palestine State', 'Panama', 'Papua New Guinea', 
        'Paraguay', 'Peru', 'Philippines', 'Poland', 'Portugal', 
        'Qatar', 'Romania', 'Russia', 'Rwanda', 'Saint Kitts and Nevis', 
        'Saint Lucia', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 
        'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 
        'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 
        'South Africa', 'South Korea', 'South Sudan', 'Spain', 'Sri Lanka', 
        'Sudan', 'Suriname', 'Sweden', 'Switzerland', 'Syria', 
        'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 
        'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 
        'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 
        'United States', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican City', 
        'Venezuela', 'Vietnam', 'Yemen', 'Zambia', 'Zimbabwe'
    ];

    

    // private $degrees = [
    //     "SSC",
    //     "HSC",
    //     "Diploma",
    //     "Bachelor's",
    //     "Master's",
    //     "B.A",
    //     "B.Sc",
    //     "B.S.S",
    //     "B.B.A",
    //     "M.A",
    //     "M.Sc",
    //     "M.S.S",
    //     "MBA",
    //     "PhD",
    // ];

    // private $subjects = [
    //     "Arts",
    //     "Science",
    //     "Commerce",
    //     "Bangla",
    //     "English",
    //     "Math",
    // ];

    // private $countries = [
    //     'United Kingdom',
    //     'United States',
    //     'Australia',
    //     'Canada',
    //     'Malaysia',
    //     'Others',
    // ];

    // private $branches = [
    //     'Dhaka',
    //     'Rajshahi',
    //     'Rangpur',
    //     'Sylhet',
    //     'Chittagong',
    //     'Barisal',
    //     'Khulna',
    //     'Mymensingh',
    //     'United Kingdom',
    //     'United States',
    //     'Australia',
    //     'Canada',
    //     'Malaysia',
    //     'Others',
    // ];

    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        };

        foreach ($this->countries as $country) {
            Country::create(['name' => $country]);
        };

        // foreach ($this->degrees as $degree) {
        //     Degree::create(['name' => $degree]);
        // };
        // foreach ($this->subjects as $subject) {
        //     Subject::create(['name' => $subject]);
        // };
       

        // foreach ($this->branches as $index => $branch) {
        //     Branch::create([
        //         'name' => $branch,
        //         'number' => '017236290' . ($index + 1), // Phone number
        //         'email' => 'branch' . ($index + 1) . '@example.com', // Email format
        //         'address' => '1460 Joseph Street' . ($index + 1), // Zip code
        //         'zip' => '9080' . ($index + 1), // Zip code
        //         'status' => "1", // Active status
        //     ]);
        // }



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
