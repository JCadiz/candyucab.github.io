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
            $table->integer('fk_natural')->unsigned();
            $table->foreign('fk_natural')->references('id')->on('natural');
            $table->integer('fk_juridico')->unsigned();
            $table->foreign('fk_juridico')->references('id')->on('juridico');
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
