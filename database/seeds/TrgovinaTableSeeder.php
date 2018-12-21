<?php

use App\Trgovina;
use Illuminate\Database\Seeder;

class TrgovinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('trgovinas')->delete();  // moze "RAW" pristup ili preko modela ...
        Trgovina::truncate();  // brise sve prethodne podatke
        factory(Trgovina::class,25)->create();
    }
}
