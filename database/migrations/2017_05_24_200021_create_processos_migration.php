<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('processos')) {
            Schema::create('processos', function (Blueprint $table) {
                $table->increments('id_processo');
                $table->dateTime('data_inicial');
                $table->dateTime('data_final');
                $table->integer('fk_status');
                $table->foreign('fk_status')->references('id_status')->on('status');            
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
        Schema::drop('processos');
    }
}
