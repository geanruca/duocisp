<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResultadoAnalisis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_analisis', function (Blueprint $table) {
            // PPM/ESTADO RUT EMPLEADO ANALISTA
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_analisis_muestras');
            $table->foreign('id_analisis_muestras')->references('id')->on('analisis_muestras');
            $table->string('rut_empleado_analista');
            $table->foreign('rut_empleado_analista')->references('rut')->on('empleado');
            $table->date('fecha_de_registro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultado_analisis');
    }
}