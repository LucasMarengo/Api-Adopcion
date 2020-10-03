<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Migrations\Migration;


class CreatePersonasTable extends Migration
{
    
        /**
         * Run the migrations.
         *
         * @return void
         */
    
    public function up()
    {

        Schema::create('personas', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->bigInteger('dni',8);
            $table->integer('telefono');
            $table->string('email'); 
            $table->string('direccion',20);
            $table->timestamp();
        });
        
    }
    public function down()
    {
        Schema::drop('Personas');
    }

}