<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNaturalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('natural', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rif');
            $table->integer('cedula');
            $table->string('Pnombre');
            $table->string('Snombre');
            $table->string('Papellido');
            $table->string('Sapellido');
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
        Schema::dropIfExists('natural');
    }
}
