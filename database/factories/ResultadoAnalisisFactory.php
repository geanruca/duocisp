<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Resultado_analisis;
use App\Analisis_muestras;
use App\Empleado;
use Faker\Generator as Faker;

$factory->define(Resultado_analisis::class, function (Faker $faker) {
    $muestras = Analisis_muestras::pluck('id')->toArray();
    $ruts_analistas = Empleado::where('categoria','tecnico de laboratorio')->pluck('rut')->toArray();
    return [
        'id_analisis_muestras' =>$faker->randomElement($muestras),
        'rut_empleado_analista' =>$faker->randomElement($ruts_analistas),
        'fecha_de_registro' =>$faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
