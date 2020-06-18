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
                'name' => 'GEDONG KUNING',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'village_id' => '3403070003',
                'name' => 'REJOWINANGUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'village_id' => '3403070003',
                'name' => 'PILAHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
                  ));
        
        
    }
}