<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandyPointTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candyPoint', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catidad');
            $table->integer('valorActual');
            $table->integer('fk_naturals')->unsigned()->nullable();
            $table->foreign('fk_naturals')->references('id')->on('naturals');
            $table->integer('fk_juridicos')->unsigned()->nullable();
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
        Schema::dropIfExists('candyPoint');
    }
}
