<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePruebaofertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruebaoferta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('porcentaje');
            $table->integer('fk_pruebas')->unsigned();
            $table->foreign('fk_pruebas')->references('id')->on('pruebas');
            $table->integer('fk_oferta')->unsigned();
            $table->foreign('fk_oferta')->references('id')->on('oferta');
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
        Schema::dropIfExists('pruebaoferta');
    }
}
