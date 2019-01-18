<?php
// php artisan make:seeder DrzavasTableSeeder
// php artisan db:seed --class=UsersTableSeeder


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
