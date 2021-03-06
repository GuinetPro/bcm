<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');

            $table->integer('tipo_gas_id')->unsigned();
            $table->foreign("tipo_gas_id")->references("id")->on("tipo_gas");

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
      Schema::dropIfExists('tiros');
    }
}
