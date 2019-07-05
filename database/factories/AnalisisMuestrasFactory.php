<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Analisis_muestras;
use App\Empresa;
use App\Particular;
use App\Empleado;
use Faker\Generator as Faker;


$factory->define(Analisis_muestras::class, function (Faker $faker) {
    $empresas = Empresa::pluck('id')->toArray();
    $particulares = Particular::pluck('id')->toArray();
    $empleados = Empleado::pluck('rut')->toArray();
    return [
        'fecha_recepcion' => $faker->date,
        // 'email'           => $faker->email,
        'temperatura'     => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 48),
        'cantidad'        => $faker->numberBetween($min = 1000, $max = 9000),
        'id_empresa'    => $faker->randomElement($empresas),
        'id_particular' => $faker->randomElement($particulares),
        'rut_empleado'  => $faker->randomElement($empleados),
    ];
});
