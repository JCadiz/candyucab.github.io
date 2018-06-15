<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarnetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carnet', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serial');
            $table->integer('fk_natural')->unsigned();
            $table->foreign('fk_natural')->references('id')->on('natural');
            $table->integer('fk_juridico')->unsigned();
            $table->foreign('fk_juridico')->references('id')->on('juridico');
            $table->integer('fk_tienda')->unsigned();
            $table->foreign('fk_tienda')->references('id')->on('tienda');
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
        Schema::dropIfExists('carnet');
    }
}
