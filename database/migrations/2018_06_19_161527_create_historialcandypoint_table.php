<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialcandypointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialcandypoint', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('valorAntiguo');
            $table->integer('fk_candypoint')->unsigned();
            $table->foreign('fk_candypoint')->references('id')->on('candyPoint');
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
        Schema::dropIfExists('historialcandypoint');
    }
}
