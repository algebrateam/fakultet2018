<?php

use App\Adresa;
use Faker\Generator as Faker;

$factory->define(Adresa::class, function (Faker $faker) {
    return [
      'country' => $faker->country,
      'city' => $faker->city,
      'pbr' => $faker->postcode,
      'street' => $faker->streetAddress,
      'phone' => $faker->phoneNumber,
      'email' => $faker->email,
      'trgovina_id'=> factory('App\Trgovina')->create()->id
    ];
});
