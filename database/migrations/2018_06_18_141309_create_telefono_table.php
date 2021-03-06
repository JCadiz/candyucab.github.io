<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefono', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero');
            $table->integer('fk_naturals')->unsigned();
            $table->foreign('fk_naturals')->references('id')->on('naturals');
            $table->integer('fk_juridicos')->unsigned();
            $table->foreign('fk_juridicos')->references('id')->on('juridicos');
            $table->integer('fk_contacto')->unsigned();
            $table->foreign('fk_contacto')->references('id')->on('contacto');
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
        Schema::dropIfExists('telefono');
    }
}
