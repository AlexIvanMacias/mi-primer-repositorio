<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->Increments('id_materia');
            $table->string('nombre_materia',20);
            //----------------------------------------------------------------------
            $table->integer('id_aprendiz')->unsigned()->nullable();
            $table->foreign('id_aprendiz')->references('id_user')->on('users');
            //----------------------------------------------------------------------
            //----------------------------------------------------------------------
            $table->integer('id_curso')->unsigned()->nullable();
            $table->foreign('id_curso')->references('id_curso')->on('curso');
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
        Schema::dropIfExists('materia');
    }
}
