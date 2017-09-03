<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilPermissaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfis_permissoes', function (Blueprint $table) {
            $table->increments('id_perfil_permissao');            
            $table->integer('fk_perfil')->unsigned();
            $table->foreign('fk_perfil')->references('id_perfil')->on('perfis');
            $table->integer('fk_permissao')->unsigned();
            $table->foreign('fk_permissao')->references('id_permissao')->on('permissoes');
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
        Schema::drop('perfis_permissoes');
    }
}
