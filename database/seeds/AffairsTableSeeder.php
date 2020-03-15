<?php

use Illuminate\Database\Seeder;

class AffairsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('affairs')->detete();

        $affairs = array(
        	array(
        		"user_id" => '1',
        		'name' => "хавать",
        		'status' => '0'
        	),
         	array(
        		"user_id" => '1',
        		'name' => "кодить",
        		'status' => '2'
        	)       	
        );

        DB::table('affairs')->insert($affairs);

    }
}
