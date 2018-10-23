<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Citas extends Migration
{

    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
                        $table->increments('idc');
                        $table->string('nombre',40);
                        $table->string('ap',40);
                        $table->string('am',40);
                        $table->integer('edad');
                        $table->integer('telefono');
                        $table->string('correo',100);
                        $table->datetime('fecha');
                        $table->string('comentario',200);
                        
                        $table->rememberToken();
                        $table->timestamps();
                        });
        
    }

    public function down()
    {
    Schema::drop('citas');
    }
}
