<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->float('precio')->nullable();
            $table->string('codigo');
            $table->string('imagen')->nullable();
            $table->string('lugar_compra')->nullable();
            $table->datetime('fecha_compra')->nullable();


            $table->integer('tipo_gas_id')->unsigned();
            $table->integer('tiro_id')->unsigned();
            $table->integer('litraje_id')->unsigned();
            $table->integer('marca_id')->unsigned();
            $table->integer('tipo_producto_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->integer('tipo_planta_id')->unsigned();
            $table->integer('tipo_especificacion_id')->unsigned();
            //$table->integer('modelo_id')->unsigned();
           
            $table->foreign("categoria_id")->references("id")->on("categorias");
           // $table->foreign("modelo_id")->references("id")->on("modelos");
            $table->foreign("tipo_gas_id")->references("id")->on("tipo_gas");
            $table->foreign("tiro_id")->references("id")->on("tiros");
            $table->foreign("litraje_id")->references("id")->on("litrajes");
            $table->foreign("marca_id")->references("id")->on("marcas");
            $table->foreign("tipo_planta_id")->references("id")->on("tipo_planta");
            $table->foreign("tipo_producto_id")->references("id")->on("tipo_productos");
            $table->foreign("tipo_especificacion_id")->references("id")->on("tipo_especificacion");


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
        Schema::dropIfExists('productos');
    }
}
