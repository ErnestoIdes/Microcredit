<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->delete();

        // $provinces = array(
        //     ['name'=>'Maputo Cidade'],
        //     ['name'=>'Maputo'],
        //     ['name'=>'Gaza'],
        //     ['name'=>'Inhambane'],
        //     ['name'=>'Manica'],
        //     ['name'=>'Sofala'],
        //     ['name'=>'Zambézia'],
        //     ['name'=>'Tete'],
        //     ['name'=>'Niassa'],
        //     ['name'=>'Nampula'],
        //     ['name'=>'Cabo Delgado'],
        //     // ['name'=>'Não definida'],

        // );
        $provinces = array(
            ['name'=>'Maputo Cidade','is_active'=>1],
            ['name'=>'Maputo','is_active'=>1],
            ['name'=>'Gaza','is_active'=>1],
            ['name'=>'Inhambane','is_active'=>1],
            ['name'=>'Manica','is_active'=>1],
            ['name'=>'Sofala','is_active'=>1],
            ['name'=>'Zambézia','is_active'=>1],
            ['name'=>'Tete','is_active'=>1],
            ['name'=>'Niassa','is_active'=>1],
            ['name'=>'Nampula','is_active'=>1],
            ['name'=>'Cabo Delgado','is_active'=>1]
            // ['name'=>'Não definida','country_id'=>157],

        );

        foreach ($provinces as $province)
        {
            Province::create($province);
        }
    }
}
