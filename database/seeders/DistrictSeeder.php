<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->delete();

        $districts = array(


            // Maputo Cidade

            ['name'=>'KaMpfumo', 'province_id'=>1],
            ['name'=>'KaNlamankulo', 'province_id'=>1],
            ['name'=>'KaMaxaqueni', 'province_id'=>1],
            ['name'=>'KaMavota', 'province_id'=>1],
            ['name'=>'KaMubukana', 'province_id'=>1],
            ['name'=>'Ka Tembe', 'province_id'=>1],
            ['name'=>'KaNyaka', 'province_id'=>1],



            // Maputo
            ['name'=>'Matola', 'province_id'=>2],
            ['name'=>'Boane', 'province_id'=>2],
            ['name'=>'Magude', 'province_id'=>2],
            ['name'=>'Manhiça', 'province_id'=>2],
            ['name'=>'Marracuene', 'province_id'=>2],
            ['name'=>'Matutuíne', 'province_id'=>2],
            ['name'=>'Moamba', 'province_id'=>2],
            ['name'=>'Namaacha', 'province_id'=>2],


            // Gaza
            ['name'=>'Bilene Macia', 'province_id'=>3],
            ['name'=>'Chibuto', 'province_id'=>3],
            ['name'=>'Chicualacuala', 'province_id'=>3],
            ['name'=>'Chigubo', 'province_id'=>3],
            ['name'=>'Chókwè', 'province_id'=>3],
            ['name'=>'Guijá', 'province_id'=>3],
            ['name'=>'Mabalane', 'province_id'=>3],
            ['name'=>'Manjacaze', 'province_id'=>3],
            ['name'=>'Manjacaze', 'province_id'=>3],
            ['name'=>'Massangena', 'province_id'=>3],
            ['name'=>'Massingir', 'province_id'=>3],

            // Inhabane

            ['name'=>'Funhalouro', 'province_id'=>4],
            ['name'=>'Govuro', 'province_id'=>4],
            ['name'=>'Homoíne', 'province_id'=>4],
            ['name'=>'Inhambane', 'province_id'=>4],
            ['name'=>'Inharrime', 'province_id'=>4],
            ['name'=>'Inhassoro', 'province_id'=>4],
            ['name'=>'Jangamo', 'province_id'=>4],
            ['name'=>'Mabote', 'province_id'=>4],
            ['name'=>'Massinga', 'province_id'=>4],
            ['name'=>'Morrumbene', 'province_id'=>4],
            ['name'=>'Panda', 'province_id'=>4],
            ['name'=>'Vilanculos', 'province_id'=>4],
            ['name'=>'Zavala', 'province_id'=>4],

            // Manica

            ['name'=>'Bárue', 'province_id'=>5],
            ['name'=>'Chimoio', 'province_id'=>5],
            ['name'=>'Gondola', 'province_id'=>5],
            ['name'=>'Guro', 'province_id'=>5],
            ['name'=>'Machaze', 'province_id'=>5],
            ['name'=>'Macossa', 'province_id'=>5],
            ['name'=>'Manica', 'province_id'=>5],
            ['name'=>'Mossurize', 'province_id'=>5],
            ['name'=>'Sussundenga', 'province_id'=>5],
            ['name'=>'Tambara', 'province_id'=>5],

            // Sofala

            ['name'=>'Beira', 'province_id'=>6],
            ['name'=>'Búzi', 'province_id'=>6],
            ['name'=>'Caia', 'province_id'=>6],
            ['name'=>'Chemba', 'province_id'=>6],
            ['name'=>'Cheringoma', 'province_id'=>6],
            ['name'=>'Chibabava', 'province_id'=>6],
            ['name'=>'Dondo', 'province_id'=>6],
            ['name'=>'Gorongosa', 'province_id'=>6],
            ['name'=>'Machanga', 'province_id'=>6],
            ['name'=>'Maringué', 'province_id'=>6],
            ['name'=>'Marromeu', 'province_id'=>6],
            ['name'=>'Muanza', 'province_id'=>6],
            ['name'=>'Nhamatanda', 'province_id'=>6],

            // Zambezia

            ['name'=>'Alto Molócue', 'province_id'=>7],
            ['name'=>'Chinde', 'province_id'=>7],
            ['name'=>'Gilé', 'province_id'=>7],
            ['name'=>'Gurué', 'province_id'=>7],
            ['name'=>'Ile', 'province_id'=>7],
            ['name'=>'Inhassunge', 'province_id'=>7],
            ['name'=>'Lugela', 'province_id'=>7],
            ['name'=>'Maganja da Costa', 'province_id'=>7],
            ['name'=>'Milange', 'province_id'=>7],
            ['name'=>'Mocuba', 'province_id'=>7],
            ['name'=>'Mopeia', 'province_id'=>7],
            ['name'=>'Morrumbala', 'province_id'=>7],
            ['name'=>'Namacurra', 'province_id'=>7],
            ['name'=>'Namarroi', 'province_id'=>7],
            ['name'=>'Nicoadala', 'province_id'=>7],
            ['name'=>'Pebane', 'province_id'=>7],
            ['name'=>'Quelimane', 'province_id'=>7],


            // Tete


            ['name'=>'Angónia', 'province_id'=>8],
            ['name'=>'Cahora-Bassa', 'province_id'=>8],
            ['name'=>'Changara', 'province_id'=>8],
            ['name'=>'Chifunde', 'province_id'=>8],
            ['name'=>'Chiuta', 'province_id'=>8],
            ['name'=>'Macanga', 'province_id'=>8],
            ['name'=>'Magoé', 'province_id'=>8],
            ['name'=>'Marávia da Costa', 'province_id'=>8],
            ['name'=>'Moatize', 'province_id'=>8],
            ['name'=>'Mutarara', 'province_id'=>8],
            ['name'=>'Tete', 'province_id'=>8],
            ['name'=>'Tsangano', 'province_id'=>8],
            ['name'=>'Zumbo', 'province_id'=>8],

            // Niassa


            ['name'=>'Cuamba', 'province_id'=>9],
            ['name'=>'Lago', 'province_id'=>9],
            ['name'=>'Lichinga', 'province_id'=>9],
            ['name'=>'Majune', 'province_id'=>9],
            ['name'=>'Mandimba', 'province_id'=>9],
            ['name'=>'Marrupa', 'province_id'=>9],
            ['name'=>'Maúa', 'province_id'=>9],
            ['name'=>'Mavago', 'province_id'=>9],
            ['name'=>'Mecanhelas', 'province_id'=>9],
            ['name'=>'Mecula', 'province_id'=>9],
            ['name'=>'Metarica', 'province_id'=>9],
            ['name'=>'Muembe', 'province_id'=>9],
            ['name'=>'Ngauma', 'province_id'=>9],
            ['name'=>'Nipepe', 'province_id'=>9],
            ['name'=>'Sanga', 'province_id'=>9],

            // Nampula


            ['name'=>'Angoche', 'province_id'=>10],
            ['name'=>'Eráti', 'province_id'=>10],
            ['name'=>'Lalaua', 'province_id'=>10],
            ['name'=>'Malema', 'province_id'=>10],
            ['name'=>'Meconta', 'province_id'=>10],
            ['name'=>'Mecubúri', 'province_id'=>10],
            ['name'=>'Memba', 'province_id'=>10],
            ['name'=>'Mogincual', 'province_id'=>10],
            ['name'=>'Mogovolas', 'province_id'=>10],
            ['name'=>'Moma', 'province_id'=>10],
            ['name'=>'Monapo', 'province_id'=>10],
            ['name'=>'Mossuril', 'province_id'=>10],
            ['name'=>'Muecate', 'province_id'=>10],
            ['name'=>'Murrupula', 'province_id'=>10],
            ['name'=>'Nacala-a-Velha', 'province_id'=>10],
            ['name'=>'Nacarôa', 'province_id'=>10],
            ['name'=>'Nampula', 'province_id'=>10],
            ['name'=>'Ribáuè', 'province_id'=>10],

            // Cabo delgado

            ['name'=>'Ancuabe', 'province_id'=>11],
            ['name'=>'Balama', 'province_id'=>11],
            ['name'=>'Chiúre', 'province_id'=>11],
            ['name'=>'Ibo', 'province_id'=>11],
            ['name'=>'Macomia', 'province_id'=>11],
            ['name'=>'Mecúfi', 'province_id'=>11],
            ['name'=>'Meluco', 'province_id'=>11],
            ['name'=>'Mocímboa da Praia', 'province_id'=>11],
            ['name'=>'Montepuez', 'province_id'=>11],
            ['name'=>'Mueda', 'province_id'=>11],
            ['name'=>'Muidumbe', 'province_id'=>11],
            ['name'=>'Namuno', 'province_id'=>11],
            ['name'=>'Nangade', 'province_id'=>11],
            ['name'=>'Palma', 'province_id'=>11],
            ['name'=>'Pemba-Metuge', 'province_id'=>11],
            ['name'=>'Quissanga', 'province_id'=>11]
        );



        foreach ($districts as $district)
        {
            District::create($district);
        }
    }
}
