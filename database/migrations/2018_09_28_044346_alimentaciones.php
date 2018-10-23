<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alimentaciones extends Migration
{

    
        public function up()
    {
        Schema::create('alimentaciones', function (Blueprint $table) {
                        $table->increments('idalimentacion');
                        $table->datetime('hora');
                        $table->string('menu',80);
                        $table->string('consumo',40);
                        $table->string('observaciones',100);
                        $table->integer('idalimentos')->unsigned();
                        $table->foreign('idalimentos')->references('idalimentos')->on('alimentos');
            
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('alimentaciones');
    }
    


}