<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Users
//-----CRUD--BASICO--------------------------------------------
Route::get('list/users','usersController@list');
Route::post('register/user/','usersController@create');
Route::put('update/user/{id}','usersController@update');
Route::delete('delete/user/{id}','usersController@delete');
//----LOGIN--USERS----------------------------------------------
Route::post('login/users/','usersController@login');
Route::get('users/{id}','usersController@getById');
Route::post('user/document/email/','usersController@getByEmailDocument');
Route::get('document/user/{doc}','usersController@getByDocument');


//-----CRUD--BASICO--------materias------------------------------------
Route::get('list/materia','materiaController@list');
Route::post('register/materia/','materiaController@create');
Route::put('update/materia/{id}','materiaController@update');
Route::delete('delete/materia/{id}','materiaController@delete');

//-----CRUD--BASICO------------curso--------------------------------
Route::get('list/curso','cursoController@list');
Route::post('register/curso/','cursoController@create');
Route::put('update/curso/{id}','cursoController@update');
Route::delete('delete/curso/{id}','cursoController@delete');

//-----CRUD--BASICO------------------calificacion--------------------------
Route::get('list/calificacion','calificacionController@list');
Route::post('register/calificacion/','calificacionController@create');
Route::put('update/calificacion/{id}','calificacionController@update');
Route::delete('delete/calificacion/{id}','calificacionController@delete');