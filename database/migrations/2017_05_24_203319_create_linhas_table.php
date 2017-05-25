<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('linhas')) {
            Schema::create('linhas', function (Blueprint $table) {
                $table->increments('id_linha');
                $table->string('nome');
                $table->integer('fk_status');
                $table->foreign('fk_status')->references('id_status')->on('status');  
                $table->dateTime('data_inicio');
                $table->dateTime('data_fim');
                $table->integer('fk_processo');
                $table->foreign('fk_processo')->references('id_processo')->on('processos');  
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('linhas');
    }
}
