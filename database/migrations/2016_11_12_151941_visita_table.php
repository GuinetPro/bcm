<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VisitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('comentario');
            $table->float('costo');
            $table->datetime('fecha_visita');


            $table->integer('cliente_id')->unsigned();
            $table->integer('llamada_tipo_id')->unsigned();
            $table->integer('pago_tipo_id')->unsigned();
            $table->integer('estado_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('telefono_id')->unsigned();
            $table->integer('producto_cliente_id')->unsigned();
            $table->integer('gasfitero_id')->unsigned();


            $table->foreign("cliente_id")->references("id")->on("clientes");
            $table->foreign("llamada_tipo_id")->references("id")->on("llamada_tipo");
            $table->foreign("pago_tipo_id")->references("id")->on("pago_tipo");
            $table->foreign("estado_id")->references("id")->on("estados");
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("telefono_id")->references("id")->on("telefonos");
            $table->foreign("producto_cliente_id")->references("id")->on("producto_cliente");
            $table->foreign("gasfitero_id")->references("id")->on("gasfiteros");

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
        Schema::dropIfExists('visitas');
    }
}
