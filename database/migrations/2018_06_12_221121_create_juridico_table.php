<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuridicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juridico', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rif');
            $table->string('paginaWeb');
            $table->integer('capital');
            $table->string('denominacion');
            $table->string('razonSocial');
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
        Schema::dropIfExists('juridico');
    }
}
