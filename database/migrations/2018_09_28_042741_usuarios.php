<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{

    
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
                        $table->increments('idu');
                        $table->string('usuario',40);
                        $table->string('contrasena',20);
                        $table->string('correo',40);
                        $table->integer('idt')->unsigned();
                        $table->foreign('idt')->references('idt')->on('tipos');
            
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('usuarios');
    }
}
