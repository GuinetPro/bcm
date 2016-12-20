<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GasfiterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gasfiteros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('email');
            $table->string('rut');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('movil');
            $table->string('comentario');
            
            $table->integer('taller_id')->unsigned();
            $table->foreign("taller_id")->references("id")->on("talleres");

            $table->integer('comuna_id')->unsigned();
            $table->foreign("comuna_id")->references("id")->on("comunas");

            $table->integer('region_id')->unsigned();
            $table->foreign("region_id")->references("id")->on("regiones");


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
        Schema::drop('gasfiteros');
    }
}
