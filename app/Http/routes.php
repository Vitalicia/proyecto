<?php

//RUTA PARA INICIO
Route::get('/','vitalicia@home')->name('home');


//RUTA PAR LAS ALTAS
Route::get('/registroUsuario','vitalicia@rUsuario')->name('rusu');
Route::get('/usuario','vitalicia@usuario')->name('usu');
Route::get('/registromedicamento','vitalicia@rmedicamento')->name('rmed');

//RUTAS PARAS LAS BAJAS
Route::get('/bajaUsuario','vitalicia@bUsuario')->name('busu');

//RUTAS PARAS LAS MODIFICACIONES
Route::get('/modUsuario','vitalicia@mUsuario')->name('musu');


//RUTAS PARA REGISTRO DE PACIENTE Y CONSULTAS
Route::get('/rPaciente','vitalicia@rPaciente')->name('rpac');

Route::get('/cPaciente','vitalicia@cPaciente')->name('cpac');


//GUARDA DATOS DE USUARIO
Route::POST('/guardausuario', 'vitalicia@guardausuario')->name('gusu');

//GUARDA LOS DATOS DE SESION DE USUARIO
Route::POST('/gusuario', 'vitalicia@gusuario')->name('gusua');

