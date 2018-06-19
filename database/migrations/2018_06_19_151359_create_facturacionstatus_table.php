<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturacionstatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturacionstatus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_facturacion')->unsigned();
            $table->foreign('fk_facturacion')->references('id')->on('facturacion');
            $table->integer('fk_status')->unsigned()->nullable();
            $table->foreign('fk_status')->references('id')->on('status');
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
        Schema::dropIfExists('facturacionstatus');
    }
}
