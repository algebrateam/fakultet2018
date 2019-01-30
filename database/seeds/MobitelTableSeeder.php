<?php

use Illuminate\Database\Seeder;

class MobitelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //obrisi sve iz tablice mobitels
        DB::table('mobitels')->delete();

        $mobitels = [
          [
        'producer'   => 'Samsung',
        'model'      => 'wewe',
        'screen'     => 2.00,
        'price'      => 2.00,
        'created_at' => null,
        'updated_at' => null,
          ],
          [
        'producer'   => 'Apple',
        'model'      => 'wewe',
        'screen'     => 2.00,
        'price'      => 2.00,
        'created_at' => null,
        'updated_at' => null,
          ],
          [
        'producer'   => 'CXiaomi',
        'model'      => 'wewe',
        'screen'     => 2.00,
        'price'      => 2.00,
        'created_at' => null,
        'updated_at' => null,
          ],
          [
        'producer'   => 'wew',
        'model'      => 'wewe',
        'screen'     => 2.00,
        'price'      => 2.00,
        'created_at' => null,
        'updated_at' => null,
          ],
          [
        'producer'   => 'wew',
        'model'      => 'wewe',
        'screen'     => 2.00,
        'price'      => 2.00,
        'created_at' => null,
        'updated_at' => null,
          ],
          [
        'producer'   => 'wew',
        'model'      => 'wewe',
        'screen'     => 2.00,
        'price'      => 2.00,
        'created_at' => null,
        'updated_at' => null,
          ],
          [
        'producer'   => 'wew',
        'model'      => 'wewe',
        'screen'     => 2.00,
        'price'      => 2.00,
        'created_at' => null,
        'updated_at' => null,
          ],
        ];

        DB::table('mobitels')->insert($mobitels);
    }
}
