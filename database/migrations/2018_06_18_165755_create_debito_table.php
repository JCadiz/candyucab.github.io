<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebitoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debito', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numeroD');
            $table->string('nombreD');
            $table->integer('cvD');
            $table->integer('clave');
            $table->date('vencimientoD');
            $table->integer('fk_natural')->unsigned()->nullable();
            $table->foreign('fk_natural')->references('id')->on('natural');
            $table->integer('fk_juridico')->unsigned()->nullable();
            $table->foreign('fk_juridico')->references('id')->on('juridico');
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
        Schema::dropIfExists('debito');
    }
}
