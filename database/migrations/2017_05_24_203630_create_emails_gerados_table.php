<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsGeradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('emails_gerados')) {
            Schema::create('emails_gerados', function (Blueprint $table) {
                $table->increments('id_emails_gerados');
                $table->integer('fk_usuario_interesse');
                $table->foreign('fk_usuario_interesse')->references('id_usuario_interesse')->on('usuario_interesse');  
                $table->longText('nid');
                $table->integer('fk_linha');
                $table->foreign('fk_linha')->references('id_linha')->on('linhas');  
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
        Schema::drop('emails_gerados');
    }
}
