<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RepuestoVisitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repuesto_visita',function(Blueprint $table){
            $table->increments("id");

            $table->integer('repuesto_id')->unsigned()->index();
            $table->foreign("repuesto_id")->references("id")->on("repuestos");

            $table->integer('visita_id')->unsigned()->index();
            $table->foreign("visita_id")->references("id")->on("visitas");


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
       Schema::drop('repuesto_visita');
    }
}
