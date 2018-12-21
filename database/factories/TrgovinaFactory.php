<?php

use App\Trgovina;
use Faker\Generator as Faker;

$factory->define(Trgovina::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName,
      'drzava'=>$faker->country
    ];
});
