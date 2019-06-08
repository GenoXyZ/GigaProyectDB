<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetas', function (Blueprint $table) {
            $table->increments('id_tarjeta');
            $table->string('nombre_tarjeta',100);
            $table->integer('fk_tipo_tarjeta')->unsigned();
            $table->integer('fk_banco')->unsigned();
            $table->integer('cuota_manejo');
            $table->integer('ingresos_minimos');            
            $table->integer('cupo_minimo');            
            $table->integer('cupo_maximo');            
            $table->decimal('tasa_efectiva_mensual');            
            $table->decimal('tasa_efectiva_anual');            
            $table->timestamps();
            $table->foreign('fk_tipo_tarjeta')->references('id_tipo_tarjeta')->on('tipo_tarjetas');
            $table->foreign('fk_banco')->references('id_banco')->on('bancos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarjetas');
    }
}
