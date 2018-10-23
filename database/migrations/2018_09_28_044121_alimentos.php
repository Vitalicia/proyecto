<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alimentos extends Migration
{

    
        public function up()
    {
        Schema::create('alimentos', function (Blueprint $table) {
                        $table->increments('idalimentos');
                        $table->string('tipoalimento',25);
 
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('alimentos');
    }
}
