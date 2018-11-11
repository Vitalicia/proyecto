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
                        $table->integer('idt')->unsigned();
                        $table->foreign('idt')->references('idt')->on('tipos');
            
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('cuidadores');
    }
    


}