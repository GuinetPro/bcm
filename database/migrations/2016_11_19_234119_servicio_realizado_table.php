<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServicioRealizadoTable extends Migration
{
    /**
     * Run the migrations.
     * cd_pen en la base de datos original tpo_pen
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_realizado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->boolean('activado');
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
         Schema::dropIfExists('servicio_realizado');
    }
}
