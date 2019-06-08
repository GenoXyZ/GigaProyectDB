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
            $table->integer('fk_rol_usuario')->unsigned();
            $table->string('telefono',20);
            $table->string('correo',100);
            $table->string('direccion',250);
            $table->timestamps();
            $table->foreign('fk_tipo_documento')->references('id_tipo_documento')->on('tipo_documentos');
            $table->foreign('fk_genero')->references('id_genero')->on('generos');
            $table->foreign('fk_rol_usuario')->references('id_rol_usuario')->on('rol_usuarios');
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
