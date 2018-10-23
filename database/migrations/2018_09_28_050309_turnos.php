<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Turnos extends Migration
{

    
        
        public function up()
    {
        Schema::create('turnos', function (Blueprint $table) {
                        $table->increments('idturno');
                        $table->string('tipoturno',25);
 
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('turnos');
    }
}
