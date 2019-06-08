<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pas_servicios', function (Blueprint $table) {
            $table->increments('id_pas_servicio');
            $table->integer('fk_parqueadero')->unsigned();
            $table->time('hora_entrada');
            $table->time('hora_salida');
            $table->timestamps();
            $table->foreign('fk_parqueadero')->references('id_parqueadero')->on('parqueaderos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pas_servicios');
    }
}
