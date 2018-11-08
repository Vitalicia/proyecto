<?php

//RUTA PARA INICIO
Route::get('/','vitalicia@home')->name('home');
Route::get('/inicio','vitalicia@main')->name('main');
Route::get('/spacientes','vitalicia@spaciente')->name('paci');

//RUTA PAR LAS ALTAS
Route::get('/registroUsuario','vitalicia@rUsuario')->name('rusu');
Route::get('/usuario','vitalicia@usuario')->name('usu');
Route::get('/registromedicamento','vitalicia@rmedicamento')->name('rmed');//dar de alta un medicamento
Route::get('/registroalimentacion','vitalicia@ralimentacion')->name('rali');//dar de alta un alimento
Route::get('/registrogeriatrico','vitalicia@rgeriatrico')->name('rger');//dar de alta un geriatrico
Route::get('/registrocuidador','vitalicia@rcuidador')->name('rcui');//dar de alta un cuidador
Route::get('/registrosignos','vitalicia@rsignos')->name('rsig');//dar de alta los signos

//RUTAS PARAS LAS BAJAS
Route::get('/bajaUsuario','vitalicia@bUsuario')->name('busu');

//RUTAS PARAS LAS MODIFICACIONES
Route::get('/modUsuario','vitalicia@mUsuario')->name('musu');


//RUTAS PARA REGISTRO DE PACIENTE Y CONSULTAS
Route::get('/rPaciente','vitalicia@rPaciente')->name('rpac');

Route::get('/cPaciente','vitalicia@cPaciente')->name('cpac');

//GUARDA DATOS DEL MEDICAMENTO
Route::POST('/guardamedicamento', 'vitalicia@guardamedicamento')->name('gume');

//GUARDA DATOS DEL ALIMENTO
Route::POST('/guardalimento', 'vitalicia@guardalimento')->name('guali');

//GUARDA DATOS DEL GERIATRICO
Route::POST('/guardageriatrico', 'vitalicia@guardageriatrico')->name('guager');

//GUARDA DATOS DEL CUIDADOR
Route::POST('/guardacuidador', 'vitalicia@guardacuidador')->name('guacui');

//GUARDA DATOS DE LOS SIGNOS
Route::POST('/guardasignos', 'vitalicia@guardasignos')->name('guasi');


//GUARDA DATOS DE USUARIO
Route::POST('/guardausuario', 'vitalicia@guardausuario')->name('gusu');

//GUARDA LOS DATOS DE SESION DE USUARIO
Route::POST('/gusuario', 'vitalicia@gusuario')->name('gusua');
Route::POST('/gumedica', 'vitalicia@gumedica')->name('gumedi');

//consulta de datos
Route::get('/cdatos','vitalicia@getdatos')->name('getdatos');

//consulta pacientes
Route::get('/cpacientes','vitalicia@getpacientes')->name('getpacientes');

//consulta usuarios
Route::get('/cusuarios','vitalicia@getusuarios')->name('getusuarios');

//Catalogo de alta de Medicamentos
Route::get('/altaMedicamentos','vitalicia@cmedicamentos')->name('cmedicamentos');





