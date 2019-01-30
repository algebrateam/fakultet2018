<?php

use App\Adresa;
use Illuminate\Database\Seeder;

class AdresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Adresa::truncate();  // brise sve prethodne podatke
        factory(Adresa::class, 100)->create();
    }
}
