<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gvalores extends Migration
{

    
        public function up()
    {
        Schema::create('gvalores', function (Blueprint $table) {
                        $table->increments('idvg');
                        $table->string('tipogvalor',25);
 
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('gvalores');
    }
}
