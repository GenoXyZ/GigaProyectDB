<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->increments('id_institucion');
            $table->string('nombre_institucion',75);
            $table->integer('NIT');
            $table->integer('fk_tipo_institucion')->unsigned();
            $table->string('caracter',100);
            $table->string('enfasis',250);
            $table->string('correo_institucional',100);
            $table->string('telefono',20);
            $table->string('direccion',250);
            $table->timestamps();
            $table->foreign('fk_tipo_institucion')->references('id_tipo_institucion')->on('tipo_instituciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituciones');
    }
}
