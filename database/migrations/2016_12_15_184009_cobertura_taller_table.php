<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CoberturaTallerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobertura_taller', function (Blueprint $table) {
            
            $table->increments('id');

            $table->text('comentario');

            $table->integer('comuna_id')->unsigned();      
            $table->foreign("comuna_id")->references("id")->on("comunas");
            

            $table->integer('taller_id')->unsigned();
            $table->foreign("taller_id")->references("id")->on("talleres");        

            $table->integer('kilometro');
            
            $table->integer('valor_visita');
            
            $table->integer('tipo_sat');

            $table->string('respuesta');

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
        Schema::dropIfExists('cobertura_taller');
    }
}
