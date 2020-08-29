<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductCatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 100; $i++){
 
            // insert data ke table pegawai menggunakan Faker
    		DB::table('catagory_product')->insert([
                'product_id' => $faker->numberBetween($min = 1, $max = 100),
                'catagory_id' => $faker->numberBetween($min = 1, $max = 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
