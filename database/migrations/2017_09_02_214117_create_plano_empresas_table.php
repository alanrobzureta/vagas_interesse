<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planos_empresas', function (Blueprint $table) {
            $table->increments('id_pano_empresa');
            $table->integer('fk_plano')->unsigned();
            $table->foreign('fk_plano')->references('id_plano')->on('planos');
            $table->integer('fk_empresa')->unsigned();
            $table->foreign('fk_empresa')->references('id_empresa')->on('empresas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('planos_empresas');
    }
}
