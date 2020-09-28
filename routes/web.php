<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home', function() { return view('home'); }) -> name('home');

Route::get('/paganti', 'PaganteController@index') -> name('paganti-index');

Route::get('/ospiti', 'OspiteController@index') -> name('ospiti-index');

Route::get('/ospite/{id}', 'OspiteController@show') -> name('ospite-show');

Route::get('/create/ospiti', 'OspiteController@create') -> name('ospite-create');

Route::post('/create/ospiti', 'OspiteController@store') -> name('ospite-store');


// configurazioni

Route::get('/configurazioni', 'ConfigurazioneController@index') -> name('conf-index');

Route::get('/configurazione/{id}', 'ConfigurazioneController@show') -> name('conf-show');

Route::get('/create/configurazione', 'ConfigurazioneController@create') -> name('conf-create');
Route::post('/crate/configurazione', 'ConfigurazioneController@store') -> name('conf-store');

// stanze

Route::get('/stanze', 'StanzaController@index') -> name('stanze-index');

Route::get('/stanza/{id}', 'StanzaController@show') -> name('stanze-show');

Route::get('/create/stanza', 'StanzaController@create') -> name('stanze-create');

Route::post('/crate/stanza', 'StanzaController@store') -> name('stanze-store');

// pagamenti

Route::get('/', 'PagamentoController@index') -> name('pagamenti.index');

Route::get('/pagamento/delete/{id}', 'PagamentoController@destroy') -> name('pagamento.destroy');
