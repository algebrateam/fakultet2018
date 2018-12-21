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
        factory(Trgovina::class,25)->create();
    }
}
