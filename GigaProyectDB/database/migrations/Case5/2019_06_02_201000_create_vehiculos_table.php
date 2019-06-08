<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id_vehiculo');
            $table->string('placa',10);
            $table->string('marca',100);
            $table->string('descripcion',250);
            $table->boolean('estado');
            $table->integer('fk_pas_servicio')->unsigned();
            $table->integer('fk_tipo_vehiculo')->unsigned();
            $table->integer('fk_parqueadero')->unsigned();
            $table->timestamps();
            $table->foreign('fk_pas_servicio')->references('id_pas_servicio')->on('pas_servicios');
            $table->foreign('fk_tipo_vehiculo')->references('id_tipo_vehiculo')->on('tipo_vehiculos');
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
        Schema::dropIfExists('vehiculos');
    }
}
