<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Signos extends Migration
{

    
    
        public function up()
    {
        Schema::create('signos', function (Blueprint $table) {
                        $table->increments('ids');
                        $table->double('ta');
                        $table->double('fc');
                        $table->double('fr');
                        $table->double('temp');
                        $table->double('spo2');
                        $table->double('glucosa');
                        $table->double('protesis');
                        $table->integer('idturno')->unsigned();
                        $table->foreign('idturno')->references('idturno')->on('turnos');
            
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('signos');
    }
    


}