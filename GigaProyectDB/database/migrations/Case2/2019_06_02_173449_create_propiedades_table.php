<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->increments('id_propiedad');
            $table->string('nombre_propiedad',45);
            $table->integer('fk_tipo_propiedad')->unsigned();
            $table->integer('valor_propiedad');
            $table->timestamps();
            $table->foreign('fk_tipo_propiedad')->references('id_tipo_propiedad')->on('tipo_propiedades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propiedades');
    }
}
