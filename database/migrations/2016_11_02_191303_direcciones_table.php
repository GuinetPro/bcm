<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('calle');
            $table->integer('numero');
            $table->integer('departamento');
            $table->string('latitud');
            $table->string('longitud');
            $table->text('comentario');

            $table->integer('cliente_id')->unsigned();
            $table->integer('comuna_id')->unsigned();

            
            $table->foreign("cliente_id")->references("id")->on("clientes");
            $table->foreign("comuna_id")->references("id")->on("comunas");
            
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
         Schema::dropIfExists('direcciones');
    }
}
