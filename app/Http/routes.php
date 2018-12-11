<?php

//RUTA PARA INICIO
Route::get('/','vitalicia@inicio')->name('inicio');
Route::get('/inicio','vitalicia@home')->name('home');
Route::get('/spacientes','vitalicia@spaciente')->name('paci');
Route::get('/confirmacion','vitalicia@confirmacion')->name('confirmacion'); // Confirma el guardado de los datos

//RUTA PAR LAS ALTAS
Route::get('/registropacientes','vitalicia@registropacientes')->name('regpacientes');
Route::get('/registroUsuario','vitalicia@rUsuario')->name('rusu');
Route::get('/usuario','vitalicia@usuario')->name('usu');
Route::get('/registromedicamento','vitalicia@rmedicamento')->name('rmed');//dar de alta un medicamento
Route::get('/registroalimentacion','vitalicia@ralimentacion')->name('rali');//dar de alta un alimento
Route::get('/registrogeriatrico','vitalicia@rgeriatrico')->name('rger');//dar de alta un geriatrico
Route::get('/registrocuidador','vitalicia@rcuidador')->name('rcui');//dar de alta un cuidador
Route::get('/registrosignos','vitalicia@rsignos')->name('rsig');//dar de alta los signos

//RUTAS PARAS LAS BAJAS
Route::get('/bajaUsuario','vitalicia@bUsuario')->name('busu');

//RUTAS PARAS LAS BAJAS de medicamentos
Route::get('/eliminamedi/{idmedicamento}','vitalicia@eliminamedi')->name('eliminamedi'); //eliminar los ususrios
Route::get('/restauramedi/{idmedicamento}','vitalicia@restauramedi')->name('restauramedi');//restuaracion de los ususros
Route::get('/efisicamedi/{idmedicamento}','vitalicia@efisicamedi')->name('efisicamedi');//eliminacion fisica de usuarios


//RUTAS PARAS LAS MODIFICACIONES
Route::get('/modUsuario','vitalicia@mUsuario')->name('musu');

Route::get('/modificadat/{idd}','vitalicia@modificadat')->name('modificadat'); //modificar el registro de datos 
Route::POST('/guardamodificadat','vitalicia@guardamodificadat')->name('guardamodificadat'); // guardar la modificacion de datos
Route::get('/eliminam/{idd}','vitalicia@eliminam')->name('eliminam'); //eliminar los datos
Route::get('/restauram/{idd}','vitalicia@restauram')->name('restauram');//restuaracion de los datos
Route::get('/efisicam/{idd}','vitalicia@efisicam')->name('efisicam');//eliminacion fisica d elos datos

Route::get('/modificausua/{idu}','vitalicia@modificausua')->name('modificausua'); //modificar el registro de datos 
Route::POST('/guardamodificausua','vitalicia@guardamodificausua')->name('guardamodificausua'); // guardar la modificacion de datos
Route::get('/eliminausu/{idu}','vitalicia@eliminausu')->name('eliminausu'); //eliminar los ususrios
Route::get('/restaurusu/{idu}','vitalicia@restaurusu')->name('restaurusu');//restuaracion de los ususros
Route::get('/efisicausu/{idu}','vitalicia@efisicausu')->name('efisicausu');//eliminacion fisica de usuarios

Route::get('/modificapac/{idpaciente}','vitalicia@modificapac')->name('modificapac');
Route::POST('/guardamodificapac','vitalicia@guardamodificapac')->name('guardamodificapac'); // guardar la modificacion de pacientes


//RUTAS PARA REGISTRO DE PACIENTE Y CONSULTAS
Route::get('/rPaciente','vitalicia@rPaciente')->name('rpac');

Route::get('/cPaciente','vitalicia@cPaciente')->name('cpac');

//GUARDA DATOS DEL MEDICAMENTO
Route::POST('/guardamedicamento', 'vitalicia@guardamedicamento')->name('gume');

//GUARDA DATOS DE ALTA DE MEDICAMENTO
Route::POST('/gmedicamento', 'vitalicia@gmedicamento')->name('gamedi');

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

Route::POST('/guardanpaciente', 'vitalicia@guardanpaciente')->name('gnpaci');

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

//consulta de npacientes
Route::get('/cnpacientes','vitalicia@cnpacientes')->name('cnpacientes');

//Rutas de Sesion
Route::get('/login','usuariosc@login')->name('login');
Route::POST('/iniciasesion','usuariosc@iniciasesion')->name('iniciasesion');
Route::get('/principal','usuariosc@principal')->name('principal');
Route::get('/cerrarsesion','usuariosc@cerrarsesion')->name('cerrarsesion');




