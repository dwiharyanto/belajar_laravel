<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TelponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Faker = Faker::create('id_ID');

        for($i=1;$i<=15;$i++){
    		
    		DB::table('telpon')->insert([
    		'lecture_id'=>$i,
    		'phone'=>$Faker->phoneNumber
    		]);
    	}
    }
}
