<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdresasTableSeeder::class);
        $this->call(DrzavasTableSeeder::class);
        $this->call(TrgovinaTableSeeder::class);
        $this->call(MobitelTableSeeder::class);
        $this->call(MobitelTrgovinaPivotSeeder::class);
    }
}
