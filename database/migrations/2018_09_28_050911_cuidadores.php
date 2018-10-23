<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cuidadores extends Migration
{
    
    
        public function up()
    {
        Schema::create('cuidadores', function (Blueprint $table) {
                        $table->increments('idcuidador');
                        $table->time('horaentrada');
                        $table->time('horasalida');
                        $table->integer('idd')->unsigned();
                        $table->foreign('idd')->references('idd')->on('datos');
            
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('cuidadores');
    }
    


}