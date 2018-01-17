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


Route::get('/lang/{lang}', ['as' => 'menu.setLang' , 'uses' => 'HomeController@setLang']);
Route::get('/',            ['as' => 'front.index'  , 'uses' => 'HomeController@index']);
Route::get('/borrow',      ['as' => 'front.borrow' , 'uses' => 'HomeController@borrowPage']);
Route::get('/about',       ['as' => 'front.about'  , 'uses' => 'HomeController@aboutPage']);
Route::get('/how-it-works',       ['as' => 'front.how-it-works'  , 'uses' => 'HomeController@howItWorksPage']);

Route::group(['prefix' => 'investor'],  function() {
    Route::get('account',   ['as' => 'investor.account',    'uses' => 'InvestorController@account']);
    Route::get('invest',    ['as' => 'investor.invest',     'uses' => 'InvestorController@invest']);
    Route::get('deposit',   ['as' => 'investor.deposit',    'uses' => 'InvestorController@deposit']);
    Route::get('portfolio', ['as' => 'investor.portfolio',  'uses' => 'InvestorController@portfolio']);
});
