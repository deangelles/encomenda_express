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

Route::get('/encomenda/pesquisar', 'EncomendaController@pesquisar');
Route::post('/encomenda/pesquisar', 'EncomendaController@pesquisar');

Route::get('/encomenda/inserir', 'EncomendaController@mostrar_inserir');
Route::post('/encomenda/inserir', 'EncomendaController@inserir');

Route::get('/encomenda/alterar/{id}', 'EncomendaController@mostrar_alterar');
Route::post('/encomenda/alterar', 'EncomendaController@alterar');

Route::get('/encomenda/excluir/{id}', 'EncomendaController@excluir');