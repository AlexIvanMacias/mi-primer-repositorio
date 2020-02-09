<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('id_user');
            $table->string('nombre',30);
            $table->string('apellido',30);
            $table->string('cedula',30)->unique();
            $table->string('correo',30)->unique();
            $table->string('celular',30)->nullable();
            $table->string('contraseña',200);
            //----------------------------------------------------------------------
            $table->integer('id_rol')->unsigned()->nullable();
            $table->foreign('id_rol')->references('id_rol')->on('rol');
            //----------------------------------------------------------------------
            //----------------------------------------------------------------------
            $table->integer('id_status')->unsigned()->nullable();
            $table->foreign('id_status')->references('id_status')->on('status');
            //----------------------------------------------------------------------
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
        Schema::dropIfExists('users');
    }
}
