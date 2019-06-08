<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->increments('id_encuesta');
            $table->string('nombre_encuesta',75);
            $table->string('proposito',250);
            $table->string('descripcion',250);
            $table->integer('fk_institucion')->unsigned();
            $table->timestamps();
            $table->foreign('fk_institucion')->references('id_institucion')->on('instituciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuestas');
    }
}
