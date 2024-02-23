<?php

namespace Database\Seeders;

use App\Models\Credit_Rate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreditRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('credit_rate')->delete();

        
        $credit = array(
            ['quant_month'=>1,'rate'=>20],
            ['quant_month'=>2,'rate'=>25],
            ['quant_month'=>3,'rate'=>30],
            ['quant_month'=>4,'rate'=>35],
            ['quant_month'=>5,'rate'=>35],
            ['quant_month'=>6,'rate'=>35]          

        );

        foreach ($credit as $cr)
        {
            Credit_Rate::create($cr);
        }
    }
}
