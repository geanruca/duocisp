<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Contacto;
use App\Empresa;
use Faker\Generator as Faker;

$factory->define(Contacto::class, function (Faker $faker) {
    $empresas = Empresa::pluck('id')->toArray();
    
    return [
        'nombre'     => $faker->name,
        'email'      => $faker->email,
        'telefono'   => $faker->e164PhoneNumber,
        'id_empresa' => $faker->randomElement($empresas),
    ];
});
