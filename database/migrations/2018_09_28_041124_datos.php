<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datos extends Migration
{

    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
                        $table->increments('idd');
                        $table->string('nombre',40);
                        $table->string('ap',40);
                        $table->string('am',40);
                        $table->integer('edad');
                        $table->integer('telefono');
                        $table->string('calle',50);
                        $table->integer('numero');
                        $table->string('calle1',100);
                        $table->string('calle2',100);
                        $table->string('colonia',100);
                        $table->string('municipio',100);
                        $table->string('ciudad',100);
                        $table->integer('cp');
                        $table->string('referencia',100);
                        $table->string('archivo',200);
                        $table->rememberToken();
                        $table->timestamps();
                        });
        
    }

    public function down()
    {
    Schema::drop('datos');
    }
}
