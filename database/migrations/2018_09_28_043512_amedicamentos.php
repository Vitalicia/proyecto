<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Amedicamentos extends Migration
{

    
        public function up()
    {
        Schema::create('amedicamentos', function (Blueprint $table) {
                        $table->increments('idamedicamento');
                        $table->string('nmedica',40);
                        $table->string('mindicacion',80);
                        $table->string('mpresen',40);
            
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('amedicamentos');
    }
    


}
