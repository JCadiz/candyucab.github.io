<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('fk_juridico')->unsigned();
            $table->foreign('fk_juridico')->references('id')->on('juridico');
            $table->integer('fk_lugar')->unsigned();
            $table->foreign('fk_lugar')->references('id')->on('lugar');
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
        Schema::dropIfExists('contacto');
    }
}
