<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableParticular extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('particular', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rut')->unique();
            $table->string('password')->default('password');
            $table->string('email')->nullable();
            $table->string('nombre')->nullable();
            $table->string('direccion')->nullable();
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
        Schema::dropIfExists('particular');
    }
}
