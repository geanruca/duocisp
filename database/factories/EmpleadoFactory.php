<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Empleado;
use Faker\Generator as Faker;
use \Freshwork\ChileanBundle\Rut;

$factory->define(Empleado::class, function (Faker $faker) {
    $ruts = [];
    $categoria = ['administador','receptor de muestras','tecnico de laboratorio'];

    for($i = 0; $i < 10; $i++)
    {
        $random_number = rand(1000000, 25000000);
        $rut = new Rut($random_number);
        array_push($ruts,$rut->fix()->format());
    }

    return [
        'rut'=> $faker->randomElement($ruts),
        'nombre'=> $faker->name,
        'password'=> bcrypt('password'),
        'categoria'=> $faker->randomElement($categoria),
    ];
});
