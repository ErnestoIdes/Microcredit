<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_method')->delete();
       
        $paym = array(
            ['name'=>'M-Pesa'],
            ['name'=>'E-Mola'],
            ['name'=>'M-Kesh'],
            ['name'=>'Bank'],
            ['name'=>'Cash']
            // ['name'=>'Não definida','country_id'=>157],

        );

        foreach ($paym as $p)
        {
            PaymentMethod::create($p);
        }
    }
}
