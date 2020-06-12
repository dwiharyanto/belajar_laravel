<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = faker::create('id_ID');

        for($i=1;$i<=15;$i++){

        	//insert data into staff table
	        DB::table('pembeli')->insert([
	        'name'=> $faker->name,
	    	'address'=>'ini alamat']);
    
    	}
    }
}
