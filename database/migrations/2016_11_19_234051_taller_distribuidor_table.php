<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TallerDistribuidorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('taller_distribuidor',function(Blueprint $table){

        
            $table->increments("id");
            
            $table->string("distribuidor");
            $table->string("reg_x");
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
        Schema::dropIfExists('taller_distribuidor');
    }
}
