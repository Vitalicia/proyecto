<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Horarios extends Migration
{
    
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
                        $table->increments('idh');
                        $table->string('tipohorario',25);
 
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('horarios');
    }
}
