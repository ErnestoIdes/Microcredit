<?php

namespace Database\Seeders;

// use App\Models\api_logins_mst;
use App\Models\user;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* create admin, author and user */
        /* password for these users is password */

        // $factoryUsers = [
        //     [
        //         'firstname' => 'Ernesto',
        //         'lastname' => 'Simango',
        //         'gender' => 'Male',
        //         'marital_status' => 'Single',
        //         'is_blacklisted' => false,
        //         'province_id' => 1,
        //         'district_id' => 1,
        //         'address' => 'guava-Marracuene',
        //         'email' => 'neto.sima@gmail.com',
        //         'phone' => '842983939',                
        //         'microcredit_id' => 1,                
        //         'password' => '$2y$10$dD8yarAAR8v75qt7ekre1utGJE7dA0PS2Ge5FLX9OkPxVBzMIBAcC', // test1234
             
        //     ],

          
        // ];

        // foreach ($factoryUsers as $user) {
            $newUser =  user::create([
                'firstname' => 'Ernesto',
                'lastname' => 'Simango',
                'gender' => 'Male',
                'marital_status' => 'Single',
                'is_blacklisted' => false,
                'type'=>'Admin',
                'province_id' => 1,
                'district_id' => 1,
                'address' => 'guava-Marracuene',
                'email' => 'neto.sima@gmail.com',
                'phone' => '842983939',                
                'microcredit_id' => 1,                
                'password' => bcrypt("password"), // password
             
            ]);

           
        // }
    }
}
