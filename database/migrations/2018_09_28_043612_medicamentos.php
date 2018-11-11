<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Medicamentos extends Migration
{

    
        public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
                        $table->increments('idmedicamento');
                        $table->string('nombre',40);
                        $table->string('indicacion',80);
                        $table->string('presen',40);
                        $table->string('terminotx',40);
                        $table->integer('idh')->unsigned();
                        $table->integer('idamedicamento')->unsigned();
                        $table->foreign('idh')->references('idh')->on('horarios');
                        $table->foreign('idamedicamento')->references('idamedicamento')->on('amedicamentos');
            
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('medicamentos');
    }
    


}
