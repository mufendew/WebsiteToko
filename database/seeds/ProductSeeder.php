<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
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
            $nama = $faker->firstName." ".$faker->word;
    		DB::table('products')->insert([
                'status' => "available",
                'thumbnail' => $faker->imageUrl($width = 600, $height = 600),
                'nama' => $nama,
                'slug' => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $nama))),
    			'deskripsi' => $faker->text($maxNbChars = 255) ,
                'stock' => $faker->numberBetween($min = 1, $max = 100),
                'harga' => $faker->numberBetween($min = 1, $max = 100)*10000,
                'berat' => $faker->numberBetween($min = 1, $max = 100)*10,
                'barcode' => $faker->ean13,
                'id_merek' => $faker->randomElement($array = array (1,2,3,4,5,6)),
                'rating' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 5),
                'created_at' => now(),
                'updated_at' => now(),
    		]);
 
    	}
    }
}
