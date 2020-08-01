<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$Faker = Faker::create('ID_id');
        //
         for($i=1;$i<=15;$i++){
    		
    		DB::table('lecture')->insert([
    		'name'=>$Faker->name,
    		'address'=>$Faker->address
    		]);
    	}
    }
}
