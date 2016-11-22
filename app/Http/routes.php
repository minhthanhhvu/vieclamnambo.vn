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
Route::singularResourceParameters();
/*
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);
*/
Route::resource('/','HomeController');

Route::pattern('categorySlug', '[a-z\-]+');
Route::pattern('subjectSlug', '[a-z\-]+');
Route::pattern('pageSlug', '[a-z\-]+');
Route::get('/{categorySlug}/{subjectSlug}/{pageSlug}', 'PageController@show');