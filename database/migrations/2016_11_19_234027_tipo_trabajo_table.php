<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tipo_trabajo',function(Blueprint $table){

            $table->increments("id");
            
            $table->string("trabajo");
            $table->boolean('activado');
        

            $table->integer('tipo_atencion_id')->unsigned();
            $table->foreign("tipo_atencion_id")->references("id")->on("tipo_atenciones");

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
        Schema::dropIfExists('tipo_trabajo');
    }
}
