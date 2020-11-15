<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createConexionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conexions', function (Blueprint $table) {
            $table->id();
            $table->integer('id_persona');
            $table->integer('id_animal');
            $table->string('tipo');
            $table->timestamp('fecha_inicial');
            $table->timestamp('fecha_final');
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
        Schema::dropIfExists('conexions');
    }


}
