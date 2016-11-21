<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoPresupuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tipo_presupuesto',function(Blueprint $table){

            $table->increments("id");
            $table->string("presupuesto");
            $table->boolean('activado');
            $table->integer('trabajo_realizar_id')->unsigned();
            $table->foreign("trabajo_realizar_id")->references("id")->on("trabajo_realizar");

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
        Schema::dropIfExists('tipo_presupuesto');
    }
}
