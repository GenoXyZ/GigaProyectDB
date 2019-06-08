<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanas', function (Blueprint $table) {
            $table->increments('id_campana');
            $table->string('nombre_campana',100);
            $table->integer('fk_tipo_campana')->unsigned();
            $table->integer('fk_banco')->unsigned();
            $table->string('proposito',100);
            $table->string('descripcion',250);
            $table->timestamps();
            $table->foreign('fk_banco')->references('id_banco')->on('bancos');
            $table->foreign('fk_tipo_campana')->references('id_tipo_campana')->on('tipo_campanas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campanas');
    }
}
