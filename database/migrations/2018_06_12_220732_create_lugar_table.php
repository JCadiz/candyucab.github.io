<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugar', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nombre');
            $table->string('tipo');
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
        Schema::dropIfExists('lugar');
    }
}
