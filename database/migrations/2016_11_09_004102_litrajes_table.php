<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LitrajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('litrajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lts');


            $table->integer('tipo_producto_id')->unsigned();
            $table->foreign("tipo_producto_id")->references("id")->on("tipo_productos");

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
        Schema::dropIfExists('litrajes');
    }
}
