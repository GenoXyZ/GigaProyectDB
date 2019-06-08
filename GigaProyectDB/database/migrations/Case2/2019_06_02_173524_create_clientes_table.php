<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->string('nombres',75);
            $table->string('apellidos',75);
            $table->integer('documento');
            $table->integer('fk_tipo_documento')->unsigned();
            $table->integer('fk_genero')->unsigned();
            $table->integer('fk_tarjeta')->unsigned();
            $table->integer('fk_propiedad')->unsigned();
            $table->integer('fk_banco')->unsigned();
            $table->string('correo',100);
            $table->string('direccion',250);
            $table->integer('ingresos_mensuales');
            $table->timestamps();
            $table->foreign('fk_tipo_documento')->references('id_tipo_documento')->on('tipo_documentos');
            $table->foreign('fk_genero')->references('id_genero')->on('generos');
            $table->foreign('fk_tarjeta')->references('id_tarjeta')->on('tarjetas');
            $table->foreign('fk_propiedad')->references('id_propiedad')->on('propiedades');
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
        Schema::dropIfExists('clientes');
    }
}
