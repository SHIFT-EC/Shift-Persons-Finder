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

/**
 * Add register
 */
Route::get('crear', [
    'as' => 'missing.create',
    'uses' => 'MissingController@create',
]);
Route::post('crear', [
    'as' => 'missing.store',
    'uses' => 'MissingController@store',
]);
Route::get('desaparecidos/{missing}/edit', [
    'as' => 'missing.edit',
    'uses' => 'MissingController@edit',
]);
Route::put('desaparecidos/{missing}', [
    'as' => 'missing.update',
    'uses' => 'MissingController@update',
]);
