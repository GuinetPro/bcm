<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClienteProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_cliente',function(Blueprint $table){
            $table->increments("id");

            $table->integer('producto_id')->unsigned()->index();
            $table->foreign("producto_id")->references("id")->on("productos");

            $table->integer('cliente_id')->unsigned()->index();
            $table->foreign("cliente_id")->references("id")->on("clientes");

            $table->integer("direccion_id")->unsigned()->index();
            $table->foreign("direccion_id")->references("id")->on("direcciones");

            $table->string('codigo');
            $table->string('codigo_qr');

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
        Schema::drop('producto_cliente');
    }
}
