<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos',function(Blueprint $table){
        $table -> increments('idalumno');
        $table -> string('nombre',50);
        $table -> string('apellidos',50);
        $table -> date('fnacimiento');
        $table -> string('telefono',15);
        $table -> string('email',100);
        $table -> rememberToken();
        $table -> timesTamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alumnos');
    }
}
