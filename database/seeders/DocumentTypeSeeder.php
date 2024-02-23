<?php

namespace Database\Seeders;

use App\Models\Document_Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('document_type')->delete();
       
        $docs = array(
            ['name'=>'B.I'],
            ['name'=>'NUIT'],
            ['name'=>'Extracto Bancário'],
            ['name'=>'Declaração Do Serviço ou Contrato'],
            ['name'=>'Declaração Do Bairro'],
            ['name'=>'Alvará Ou Licença De Actividade']

        );

        foreach ($docs as $d)
        {
            Document_Type::create($d);
        }
    }
}
