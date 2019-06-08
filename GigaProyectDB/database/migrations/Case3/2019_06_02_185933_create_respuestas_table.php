<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id_respuesta');
            $table->string('respuesta',250);
            $table->integer('fk_pregunta')->unsigned();
            $table->integer('fk_egresado')->unsigned();
            $table->timestamps();
            $table->foreign('fk_pregunta')->references('id_pregunta')->on('preguntas');
            $table->foreign('fk_egresado')->references('id_egresado')->on('egresados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
