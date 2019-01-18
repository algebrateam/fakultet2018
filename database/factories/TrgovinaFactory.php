<?php

use App\Trgovina;
use Faker\Generator as Faker;

$factory->define(Trgovina::class, function (Faker $faker) {
    return [
      'name' => $faker->colorName,
      'drzava'=>$faker->country,
      'drzava_id'=>factory('App\Drzava')->create()->id
    ];
});
