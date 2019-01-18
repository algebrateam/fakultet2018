<?php
// php artisan make:seeder DrzavasTableSeeder


use App\Drzava;
use Illuminate\Database\Seeder;

class DrzavasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Drzava::truncate();  // brise sve prethodne podatke
        factory(Drzava::class,35)->create();
    }
}
