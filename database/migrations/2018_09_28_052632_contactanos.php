<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contactanos extends Migration
{

    public function up()
    {
        Schema::create('contactanos', function (Blueprint $table) {
                        $table->increments('idco');
                        $table->string('nombre',40);
                        $table->string('ap',40);
                        $table->string('am',40);
                        $table->integer('telefono');
                        $table->string('correo',100);
                        $table->string('comentario',200);
                        
                        $table->rememberToken();
                        $table->timestamps();
                        });
        
    }

    public function down()
    {
    Schema::drop('contactanos');
    }
}
