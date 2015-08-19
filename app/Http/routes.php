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
*/

//get('/', function () { return view('welcome');});


Route::get('/', ['uses' => 'LinkController@listlink', 'as' => 'listlink']);

Route::get('/add', ['uses' => 'LinkController@addlink', 'as' => 'addlink']);

Route::post('/valid', ['uses' => 'LinkController@validlink', 'as' => 'validlink']);

Route::get('/all.json', 'LinkController@allJson');