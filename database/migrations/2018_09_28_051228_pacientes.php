<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pacientes extends Migration
{

    
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
                        $table->increments('idpaciente');
                        $table->datetime('fechapaciente');
                        $table->integer('idd')->unsigned();
                        $table->integer('idmedicamento')->unsigned();
                        $table->integer('idalimentacion')->unsigned();
                        $table->integer('ids')->unsigned();
                        $table->integer('idgeriatricos')->unsigned();
                        $table->integer('idactividades')->unsigned();
            
            
                        $table->foreign('idd')->references('idd')->on('datos');
                        $table->foreign('idmedicamento')->references('idmedicamento')->on('medicamentos');
                        $table->foreign('idalimentacion')->references('idalimentacion')->on('alimentaciones');
                        $table->foreign('ids')->references('ids')->on('signos');
                        $table->foreign('idgeriatricos')->references('idgeriatricos')->on('geriatricos');
                        $table->foreign('idactividades')->references('idactividades')->on('actividades');
            
            
            
                        $table->rememberToken();
                        $table->timestamps();
                        });
    }


    public function down()
    {
        Schema::drop('pacientes');
    }
}