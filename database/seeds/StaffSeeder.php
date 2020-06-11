<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker::create('id_ID');

    	for($i=1;$i<=15;$i++){

        	//insert data into staff table
	        DB::table('staff')->insert([
	        'name'=> $faker->name,
	    	'position'=>$faker->jobTitle,
	    	'age'=>$faker->numberBetween(25,40),
	    	'address'=>$faker->address]);
    
    	}
    }
}
