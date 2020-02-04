<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nb_usuario');
            $table->string('password');
            $table->string('tx_email');
            $table->string('remember_token');
            $table->timestamp('fe_creado');
            $table->timestamp('fe_actualizado');
            $table->string('nb_completo');
            $table->string('tx_telefono');

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
        Schema::dropIfExists('usuario');
    }
}
