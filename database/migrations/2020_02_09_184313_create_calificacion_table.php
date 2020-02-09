<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion', function (Blueprint $table) {
            $table->Increments('id_calificacion');
            $table->double('nota1',5);
            $table->double('nota2',5);
            $table->double('nota3',5);
            $table->double('nota_final',5);

             //----------------------------------------------------------------------
             $table->integer('id_aprendiz')->unsigned()->nullable();
             $table->foreign('id_aprendiz')->references('id_user')->on('users');
             //----------------------------------------------------------------------
              //----------------------------------------------------------------------
              $table->integer('id_materia')->unsigned()->nullable();
              $table->foreign('id_materia')->references('id_materia')->on('materia');
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
        Schema::dropIfExists('calificacion');
    }
}
