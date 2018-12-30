<?php

use Illuminate\Database\Seeder;

class KamusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create(); //import library faker
  		$limit = 1000; //batasan berapa banyak data
  
  		for ($i = 0; $i < $limit; $i++) {
			DB::table('Kamus')->insert([ //mengisi data di database
				'istilah' => $faker->istilah,
				'kategori' => $faker->kategori,
				'penjelasan' => $faker->penjelasan,

				]);
		}
    }
}
