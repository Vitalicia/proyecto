<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Geriatricos extends Migration
{

    
    
        public function up()
    {
        Schema::create('geriatricos', function (Blueprint $table) {
                        $table->increments('idgeriatricos');
                        $table->string('valorg',80);
                        $table->integer('valorg1');
                        $table->integer('valorg2');
                        $table->integer('idvg')->unsigned();
                        $table->foreign('idvg')->references('idvg')->on('gvalores');
            
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('geriatricos');
    }
    


}