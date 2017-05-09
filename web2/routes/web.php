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

Route::get('/hson',[
    'as' => 'hson',
    'uses' => 'HsonController@index'
]);

Route::get('/home/add_test',[
    'as' => 'home.add_test',
    'uses' => 'HomeController@add_test'
]);

Route::get('/menu',[
    'as' => 'menu',
    'uses' => 'MenuController@index'
]);

Route::get('/home',[
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('/about',[
    'as' => '',
    'uses' => 'GroupcController@index'
]);








