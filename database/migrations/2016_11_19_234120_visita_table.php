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
            $table->string('descripcion');
            $table->string('comentario_tecnico');
            $table->string('num_boleta');
            $table->float('mano_obra');
            $table->float('abono');
            $table->float('total');
            $table->float('pendiente');
            $table->datetime('fecha_visita');


            $table->string('anu_usuario');
            $table->string('anu_solicitante');
            $table->string('anu_rut');
            $table->string('anu_obs');


            $table->integer('cliente_id')->unsigned();        
            $table->integer('estado_id')->unsigned();
            $table->integer('producto_cliente_id')->unsigned();        
            $table->integer('gasfitero_id')->unsigned();           
            $table->integer('nomina_tienda_id')->unsigned();
            $table->integer('solicitante_id')->unsigned();
            $table->integer('taller_distribuidor_id')->unsigned();
            $table->integer('taller_id')->unsigned();
            $table->integer('telefono_id')->unsigned();
            $table->integer('tipo_presupuesto_id')->unsigned();
            $table->integer('tipo_trabajo_id')->unsigned();
            $table->integer('tipo_atencion_id')->unsigned();
            $table->integer('servicio_realizado_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign("cliente_id")->references("id")->on("clientes");
            $table->foreign("tipo_atencion_id")->references("id")->on("tipo_atenciones");
            $table->foreign("estado_id")->references("id")->on("estados");
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("telefono_id")->references("id")->on("telefonos");
            $table->foreign("producto_cliente_id")->references("id")->on("producto_cliente");
            $table->foreign("gasfitero_id")->references("id")->on("gasfiteros");
            $table->foreign("solicitante_id")->references("id")->on("solicitantes");
            $table->foreign("tipo_presupuesto_id")->references("id")->on("tipo_presupuesto");
            $table->foreign("taller_distribuidor_id")->references("id")->on("taller_distribuidor");
            $table->foreign("tipo_trabajo_id")->references("id")->on("tipo_trabajo");
            $table->foreign("nomina_tienda_id")->references("id")->on("nomina_tienda");
            $table->foreign("taller_id")->references("id")->on("talleres");
            $table->foreign("servicio_realizado_id")->references("id")->on("servicio_realizado");


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
