<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->Increments('id_curso');
            $table->string('nombre_curso',20);
                //----------------------------------------------------------------------
                $table->integer('id_aprendiz')->unsigned()->nullable();
                $table->foreign('id_aprendiz')->references('id_user')->on('users');
                //----------------------------------------------------------------------
                //----------------------------------------------------------------------
                $table->integer('id_docente')->unsigned()->nullable();
                $table->foreign('id_docente')->references('id_user')->on('users');
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
        Schema::dropIfExists('curso');
    }
}
