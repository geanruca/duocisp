<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnalisisMuestras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analisis_muestras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_recepcion')->nullable();
            $table->decimal('temperatura',3,1)->nullable();
            $table->unsignedBigInteger('cantidad')->nullable();
            $table->unsignedBigInteger('id_empresa')->nullable();
            $table->foreign('id_empresa')->references('id')->on('empresa');
            $table->unsignedBigInteger('id_particular')->nullable();
            $table->foreign('id_particular')->references('id')->on('particular');
            $table->string('rut_empleado')->nullable();
            $table->foreign('rut_empleado')->references('rut')->on('empleado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analisis_muestras');
    }
}
