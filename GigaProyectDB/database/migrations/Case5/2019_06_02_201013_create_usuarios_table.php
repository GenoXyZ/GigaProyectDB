<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nombres',75);
            $table->string('apellidos',75);
            $table->integer('documento');
            $table->integer('fk_tipo_documento')->unsigned();
            $table->integer('edad');
            $table->integer('fk_genero')->unsigned();
            $table->integer('fk_vehiculo')->unsigned();
            $table->string('telefono',20);
            $table->string('correo',100);
            $table->string('direccion',250);
            $table->timestamps();
            $table->foreign('fk_tipo_documento')->references('id_tipo_documento')->on('tipo_documentos');
            $table->foreign('fk_genero')->references('id_genero')->on('generos');
            $table->foreign('fk_vehiculo')->references('id_vehiculo')->on('vehiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
