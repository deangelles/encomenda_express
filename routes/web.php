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
    return view('principal');
});

Route::get('/encomenda/pesquisar', 'EncomendaController@pesquisar')->middleware ('auth');
Route::post('/encomenda/pesquisar', 'EncomendaController@pesquisar')->middleware ('auth');

Route::get('/encomenda/inserir', 'EncomendaController@mostrar_inserir')->middleware ('auth');
Route::post('/encomenda/inserir', 'EncomendaController@inserir')->middleware ('auth');

Route::get('/encomenda/alterar/{id}', 'EncomendaController@mostrar_alterar')->middleware ('auth');
Route::post('/encomenda/alterar', 'EncomendaController@alterar')->middleware ('auth');

Route::get('/encomenda/excluir/{id}', 'EncomendaController@excluir')->middleware ('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
