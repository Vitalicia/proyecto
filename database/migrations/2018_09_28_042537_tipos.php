<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tipos extends Migration
{

    public function up()
    {
        Schema::create('tipos', function (Blueprint $table) {
                        $table->increments('idt');
                        $table->string('tipo',40);
                        $table->string('activo',10);
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('tipos');
    }
}
