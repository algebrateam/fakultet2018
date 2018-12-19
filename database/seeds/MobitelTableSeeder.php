<?php

use Illuminate\Database\Seeder;

class MobitelTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //obrisi sve iz tablice mobitels
        DB::table('mobitels')->delete();

        $mobitels = array(
          array(
		"producer" => "Samsung",
		"model" => "wewe",
		"screen" => 2.00,
		"price" => 2.00,
		"created_at" => NULL,
		"updated_at" => NULL,
          ),
          array(
		"producer" => "Apple",
		"model" => "wewe",
		"screen" => 2.00,
		"price" => 2.00,
		"created_at" => NULL,
		"updated_at" => NULL,
          ),
          array(
		"producer" => "CXiaomi",
		"model" => "wewe",
		"screen" => 2.00,
		"price" => 2.00,
		"created_at" => NULL,
		"updated_at" => NULL,
          ),
          array(
		"producer" => "wew",
		"model" => "wewe",
		"screen" => 2.00,
		"price" => 2.00,
		"created_at" => NULL,
		"updated_at" => NULL,
          ),
          array(
		"producer" => "wew",
		"model" => "wewe",
		"screen" => 2.00,
		"price" => 2.00,
		"created_at" => NULL,
		"updated_at" => NULL,
          ),
          array(
		"producer" => "wew",
		"model" => "wewe",
		"screen" => 2.00,
		"price" => 2.00,
		"created_at" => NULL,
		"updated_at" => NULL,
          ),
          array(
		"producer" => "wew",
		"model" => "wewe",
		"screen" => 2.00,
		"price" => 2.00,
		"created_at" => NULL,
		"updated_at" => NULL,
          ),
        );


        DB::table('mobitels')->insert($mobitels);
    }

}
