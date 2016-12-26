<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoGasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_gas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');


            $table->integer('litraje_id')->unsigned();
            $table->foreign("litraje_id")->references("id")->on("litrajes");
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
        Schema::dropIfExists('tipo_gas');
    }
}
