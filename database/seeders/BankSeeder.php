<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->delete();

        $banks = ['BIM','BCI','Standard','Absa']; 

        foreach ($banks as $bank) {
            DB::table('banks')->insert([
                'name' => $bank               
            ]);
        }

    }
}
