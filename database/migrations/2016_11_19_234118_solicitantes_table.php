<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SolicitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('solicitantes',function(Blueprint $table){

            $table->increments("id");
            $table->string("solicitante");
            $table->integer('cod2');
            $table->boolean('activado');
            $table->integer('tipo_pago_id')->unsigned();
            $table->foreign("tipo_pago_id")->references("id")->on("tipo_pagos");

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
        Schema::dropIfExists('solicitantes');
    }
}
