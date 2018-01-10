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


Route::get('/lang/{lang}', ['as' => 'menu.setLang', 'uses' => 'HomeController@setLang']);
Route::get('/', ['as' => 'front.index' ,'uses' => 'HomeController@index']);
Route::get('/borrow', ['as' => 'front.borrow' ,'uses' => 'HomeController@borrowPage']);
