<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Empresa;
use Faker\Generator as Faker;
use \Freshwork\ChileanBundle\Rut;

$factory->define(Empresa::class, function (Faker $faker) {
    $ruts = [];
    for($i = 0; $i < 10; $i++)
    {
        $random_number = rand(7000000, 95000000);
        $rut = new Rut($random_number);
        array_push($ruts,$rut->fix()->format());
    }
    return [
        'rut'=> $faker->randomElement($ruts),
        'nombre'=> $faker->name,
        'direccion'=> $faker->address,
        'password'=> bcrypt('password'),
    ];
});
