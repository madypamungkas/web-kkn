<?php

use Illuminate\Database\Seeder;

class PadukuhanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('padukuhan')->delete();
        
        \DB::table('padukuhan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'village_id' => '3403070003',
                'name' => 'BEDOYO KIDUL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'village_id' => '3403070003',
                'name' => 'BEDOYO KULON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'village_id' => '3403070003',
                'name' => 'BEDOYO WETAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'village_id' => '3403070003',
                'name' => 'BEDOYO LOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'village_id' => '3403070003',
                'name' => 'NGALASOMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'village_id' => '3403070003',
                'name' => 'NGROMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'village_id' => '3403070003',
                'name' => 'PRINGLUWANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'village_id' => '3403070003',
                'name' => 'SERUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'village_id' => '3403070003',
                'name' => 'SURUBENDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}