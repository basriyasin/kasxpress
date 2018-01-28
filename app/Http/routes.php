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

Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/logout',        ['as' => 'front.login', 'uses' => 'Auth\AuthController@logout']);
    
        Route::group(['prefix' => 'investor'],  function() {
            Route::get('/',          ['as' => 'investor.account',    'uses' => 'InvestorController@account']);
            Route::get('account',   ['as' => 'investor.account',    'uses' => 'InvestorController@account']);
            Route::get('invest',    ['as' => 'investor.invest',     'uses' => 'InvestorController@invest']);
            Route::get('deposit',   ['as' => 'investor.deposit',    'uses' => 'InvestorController@deposit']);
            Route::get('portfolio', ['as' => 'investor.portfolio',  'uses' => 'InvestorController@portfolio']);
        });

});


Route::group(['middleware' => 'guest'], function(){
    Route::get('/login',        ['as' => 'front.login', 'uses' => 'HomeController@showLogin']);
    Route::post('login',        ['uses' => 'Auth\AuthController@postLogin']);
    Route::get('/register',     ['as' => 'front.register', 'uses' => 'HomeController@showRegister']);
    Route::post('/register',    ['as' => 'front.register', 'uses' => 'Auth\AuthController@postRegister']);
    
    Route::group(['prefix' => 'account'],  function() {
        Route::get('/register/{email}',    ['as' => 'account.pleaseConfirm',   'uses' => 'Auth\AuthController@pleaseConfirm']);
        Route::get('/confirm/{email}',     ['as' => 'account.confirmEmail',    'uses' => 'Auth\AuthController@confirmEmail']);
    });
    
});

