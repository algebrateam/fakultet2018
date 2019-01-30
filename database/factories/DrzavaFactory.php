<?php

use Faker\Generator as Faker;

$factory->define(App\Drzava::class, function (Faker $faker) {
    return [
       'name' => $faker->country,
       'code' => $faker->countryCode,
    ];
});
