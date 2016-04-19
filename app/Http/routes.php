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

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('/search', [
    'as' => 'autocomplete',
    'uses'=>'HomeController@search'
]);

/**
 * Add register
 */
Route::get('crear', [
    'as' => 'create-missing',
    'uses' => 'MissingController@create',
]);
Route::post('crear', [
    'as' => 'create-missing.store',
    'uses' => 'MissingController@store',
]);
