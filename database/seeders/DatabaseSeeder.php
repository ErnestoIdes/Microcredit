<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);        
        $this->call(BankSeeder::class);
        $this->call(DistrictSeeder::class);
         $this->call(ProvinceSeeder::class);
         $this->call(PaymentMethodSeeder::class);
         $this->call(DocumentTypeSeeder::class);
         $this->call(CreditRateSeeder::class);
        
    }
}
