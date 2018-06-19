<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rif');
            $table->date('fecha');
            $table->double('total');
            $table->integer('fk_pruebas')->unsigned();
            $table->foreign('fk_pruebas')->references('id')->on('pruebas');
            $table->integer('fk_naturals')->unsigned()->nullable();
            $table->foreign('fk_naturals')->references('id')->on('naturals');
            $table->integer('fk_juridicos')->unsigned()->nullable();
            $table->foreign('fk_juridicos')->references('id')->on('juridicos');
            $table->integer('fk_tienda')->unsigned();
            $table->foreign('fk_tienda')->references('id')->on('tienda');
            $table->integer('fk_historialcompra')->unsigned();
            $table->foreign('fk_historialcompra')->references('id')->on('historialcompra');
            $table->integer('fk_credito')->unsigned();
            $table->foreign('fk_credito')->references('id')->on('credito');
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
        Schema::dropIfExists('facturacion');
    }
}
