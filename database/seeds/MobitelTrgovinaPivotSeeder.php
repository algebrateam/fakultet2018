<?php

use App\Adresa;
use App\Mobitel;
use App\Trgovina;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobitelTrgovinaPivotSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        // obrisi sve prethodne
        DB::table('mobitel_trgovina')->delete();

        $mobitel_trgovina = array(
          array(
            "mobitel_id" => 1,
            "trgovina_id" => 1,
          ),
          array(
            "mobitel_id" => 2,
            "trgovina_id" => 2,
          ),
          array(
            "mobitel_id" => 2,
            "trgovina_id" => 3,
          ),
          array(
            "mobitel_id" => 2,
            "trgovina_id" => 4,
          ),
          array(
            "mobitel_id" => 3,
            "trgovina_id" => 4,
          ),
        );
        // 1. NAČIN: direktan upis iz fiksnog array polja $mobitels
        DB::table('mobitel_trgovina')->insert($mobitel_trgovina);

        // 2. NAČIN: generiramo random brojeve iz fakera
        DB::table('mobitel_trgovina')->insert(
            [
              'mobitel_id' => $faker->numberBetween(1, 7), // 1-7
              'trgovina_id' => $faker->numberBetween(1, 25) // 1-25
            ]
        );

        //  ###    PREPORUČEN NAČIN  ###
        // 3. NAČIN: dohvatiti stvarne id iz Mobitel i Trgovina modela
        //foreach (Mobitel::all() as $value) {
        foreach (Adresa::all() as $value) { // za svaku adresu dodaj random par mobitel-trgovina
            DB::table('mobitel_trgovina')->insert(
                [
                  'mobitel_id' => Mobitel::select('id')->orderByRaw("RAND()")->first()->id,
                  'trgovina_id' => Trgovina::select('id')->orderByRaw("RAND()")->first()->id,
                ]
            );
        }
    }

}
