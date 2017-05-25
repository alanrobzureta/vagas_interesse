<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioInteressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('usuario_interesse')) {
            Schema::create('usuario_interesse', function (Blueprint $table) {
                $table->increments('id_usuario_interesse');
                $table->string('email');
                $table->string('interesse');
                $table->char('estado','2');
                $table->boolean('blacklist');
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
        Schema::drop('usuario_interesse');
    }
}
