<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialcompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialcompra', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechacompra');
            $table->string('producto');
            $table->integer('fk_naturals')->unsigned();
            $table->foreign('fk_naturals')->references('id')->on('naturals');
            $table->integer('fk_juridicos')->unsigned();
            $table->foreign('fk_juridicos')->references('id')->on('juridicos');
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
        Schema::dropIfExists('historialcompra');
    }
}
