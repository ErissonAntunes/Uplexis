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
//Principal
Route::get('/', function(){ return redirect('home'); });

//Autenticação
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

//Logado
Route::get('/home', 'HomeController@index')->name('home');

//Capturar dados
Route::get('get-curl', 'HomeController@getCURL');

//Exibir dados
Route::view('/artigos', 'artigos.index');