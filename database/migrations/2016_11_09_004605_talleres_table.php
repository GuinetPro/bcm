<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TalleresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talleres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('razon_social');
            $table->string('codigo_sap');
            $table->string('email');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('rut');
            $table->integer('decuento');
            $table->string('movil');
            //$table->string('comentario');


            $table->integer('descuento');
            $table->integer('bonificacion');
            $table->integer('kilometro');
            $table->integer('calefones');
            $table->integer('termos_electricos');
            $table->integer('calderas');
            $table->integer('aire_acondicionado');
            $table->integer('estufas');
            $table->integer('solar');
            $table->integer('eficiencia_energetica');

            $table->integer('region_id')->unsigned();
            $table->foreign("region_id")->references("id")->on("regiones");


            $table->integer('comuna_id')->unsigned();
            $table->foreign("comuna_id")->references("id")->on("comunas");

            $table->integer('user_id')->unsigned();
            $table->foreign("user_id")->references("id")->on("users");

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
        Schema::dropIfExists('talleres');
    }
}
