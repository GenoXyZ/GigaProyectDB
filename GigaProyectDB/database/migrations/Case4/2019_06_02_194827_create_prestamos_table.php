<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id_prestamo');
            $table->string('descripcion',250);
            $table->datetime('hora_inicial');
            $table->datetime('hora_final');
            $table->integer('fk_equipo_soporte')->unsigned();
            $table->integer('fk_equipo')->unsigned();
            $table->integer('fk_usuario')->unsigned();
            $table->timestamps();
            $table->foreign('fk_equipo_soporte')->references('id_equipo_soporte')->on('equipo_soporte');
            $table->foreign('fk_equipo')->references('id_equipo')->on('equipos');
            $table->foreign('fk_usuario')->references('id_usuario')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
