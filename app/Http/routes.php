<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|

Route::get('/', function () {
    return view('welcome');
});

Route::resource('estudiante', 'solicitudController');
*/
Route::get('/', 'LogController@InicioSesion');

Route::resource('estudiante', 'estudianteController');
Route::resource('solicitud', 'solicitudController');
Route::resource('user', 'userController');

Route::get('nuevaSolicitud', 'solicitudController@contactoNuevo');
Route::get('solicitud', 'solicitudController@solicitud');
Route::get('reporte', 'solicitudController@reporte');

Route::get('registrado', 'solicitudController@registrado');
Route::get('actualizado', 'solicitudController@actualizado');

//JSON
Route::get('solicitudJson', 'solicitudController@solicitudList');
Route::get('solicitudAllJson', 'solicitudController@solicitudAllList');

//Login
Route::get('login', 'LogController@InicioSesion');
Route::get('logout', 'LogController@logout');
Route::resource('log', 'LogController');

Route::get('usero/{id}', function () {
	return 'Useriu ';
});

Route::group(['before'=>'auth'],function(){
	Route::get('otroGato', function () {
    	return "Xsi Michi";
	});

});