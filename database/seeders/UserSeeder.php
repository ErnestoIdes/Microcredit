<?php

namespace Database\Seeders;

use App\Models\api_logins_mst;
use App\Models\reg_employee_mst;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        $factoryUsers = [
            [
                'firstname' => 'super-admin',
                'lastname' => 'administrator',
                'nrc' => '123456789',
                'dob' => '10/10/1990',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$dD8yarAAR8v75qt7ekre1utGJE7dA0PS2Ge5FLX9OkPxVBzMIBAcC', // test1234
                'role' => 'super-admin'
            ],

          

            [
                'firstname' => 'chief financial officer',
                'lastname' => 'cfo',
                'nrc' => '123456189',
                'dob' => '10/10/1990',
                'email' => 'cfo@cfo.com',
                'password' => '$2y$10$dD8yarAAR8v75qt7ekre1utGJE7dA0PS2Ge5FLX9OkPxVBzMIBAcC', // test1234
                'role' => 'cfo'
            ],

            [
                'firstname' => 'divisional loan officer',
                'lastname' => 'dlo',
                'nrc' => '123456121',
                'dob' => '10/10/1990',
                'email' => 'dlo@dlo.com',
                'password' => '$2y$10$dD8yarAAR8v75qt7ekre1utGJE7dA0PS2Ge5FLX9OkPxVBzMIBAcC', // test1234
                'role' => 'dlo'
            ],
        ];

        foreach ($factoryUsers as $user) {
            $newUser =  reg_employee_mst::create([
                'firstname' => $user['firstname'],
                'lastname' => $user['lastname'],
                'email' => $user['email'],
                'nrc' => $user['nrc'],
                'dob' => $user['dob'],
            ]);

            $new =  api_logins_mst::create([
                'nrc' => $user['nrc'],
                'password' => $user['password'],
                'employee_id' => reg_employee_mst::where('email',"=",$user['email'])->first()->employee_id
            ]);
            $newUser->assignRole($user['role']);
        }
    }
}
