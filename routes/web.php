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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


route::get('/movies','MovieController@mostrarmovies' );
route::get('/detallepelicula1/{id}','MovieController@detallepelicula');

route::get('/genre','GenreController@mostrargenres');



route::get('/actores','ActorController@mostraractor');
route::get('/detalleactor/{id}','ActorController@detalleactor');


route::get('/agregarActor', function(){
  return view('agregarActor');
});

route::post('/agregarActor','ActorController@agregar');

route::get('/movies/{id}/editarMovies','MovieController@seleccionarEditar');


route::post('/movies/{id}/editarMovies','MovieController@editar');