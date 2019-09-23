<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('http://pellerincreation.com/projet1/', 'MatiereController@index');
Route::get('/installer', 'AppController@installer');

Route::get('/matieres', 'MatiereController@index');
Route::get('/matieres/{matiere}', 'MatiereController@show');
Route::get('/matieres/create/{user}', 'MatiereController@create');
Route::post('/matieres/create/{user}', 'MatiereController@store');
Route::get('/matieres/{matiere}/edit', 'MatiereController@edit');
Route::post('/matieres/{matiere}/edit', 'MatiereController@update');
Route::get('/matieres/{matiere}/destroy', 'MatiereController@destroy');

Route::get('/cours', 'CourController@index');
Route::get('/cours/{cour}', 'CourController@show');
Route::get('/cours/create/{matiere}', 'CourController@create');
Route::post('/cours/create/{matiere}', 'CourController@store');
Route::get('/cours/{cour}/edit', 'CourController@edit');
Route::post('/cours/{cour}/edit', 'CourController@update');
Route::get('/cours/{cour}/destroy', 'CourController@destroy');

Route::get('/users', 'UserController@index');
Route::get('/users/{user}', 'UserController@show')->where('user', '[0-9]+');
Route::get('/users/create', 'UserController@create');
Route::post('/users/create', 'UserController@store');
Route::get('/users/{user}/edit', 'UserController@edit');
Route::post('/users/{user}/edit', 'UserController@update');
Route::get('/users/{user}/destroy', 'UserController@destroy');




// PROJET RÉALISÉ PAR ÉLLIOT PELLERIN MATRICULE 1664052
// NOTE AU CORRECTEUR J'AI TENTER DE COMMENCER A FAIRE L'AUTHENTIFIACTION MAIS J'AI RENONCER PAS ASSEZ DE TEMPS.
// IL EST POSSIBLE DONC QU'IL RESTE DU CODE INUTILE MAIS C'ÉTAIT DANS LE BUT DE FAIRE PLUS.
