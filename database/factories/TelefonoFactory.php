<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Telefono;
use App\Particular;
use Faker\Generator as Faker;

$factory->define(Telefono::class, function (Faker $faker) {
    $particulares = Particular::pluck('id')->toArray();
    return [
        'id_particular' => $faker->randomElement($particulares),
        'numero'         => $faker->e164PhoneNumber,
    ];
});
