<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Actividades extends Migration
{

    
        public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
                        $table->increments('idactividades');
                        $table->time('hora1');
                        $table->string('act1',80);
                        $table->time('hora2');
                        $table->string('act2',80);
                        $table->time('hora3');
                        $table->string('act3',80);
                        $table->time('hora4');
                        $table->string('act4',80);
                        $table->time('hora5');
                        $table->string('act5',80);
                        $table->time('hora6');
                        $table->string('act6',80);

            
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('actividades');
    }
    


}