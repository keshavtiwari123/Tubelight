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


Route::get('/', [
	'uses' => '\App\Http\Controllers\home_controller@getHome',
	'as' => 'home',
	'middleware' => ['guest'],
]);

Route::get('/services/static_website_development', [
	'uses' => '\App\Http\Controllers\home_controller@staticWebsite',
	'as' => 'staticWebsite',
	'middleware' => ['guest'],
]);


Route::get('/services/dynamic_website_development', [
	'uses' => '\App\Http\Controllers\home_controller@dynamicWebsite',
	'as' => 'dynamicWebsite',
	'middleware' => ['guest'],
]);

Route::get('/services/mobile_website_development', [
	'uses' => '\App\Http\Controllers\home_controller@mobileWebsite',
	'as' => 'mobileWebsite',
	'middleware' => ['guest'],
]);


Route::get('/services/web_app_development', [
	'uses' => '\App\Http\Controllers\home_controller@webAppWebsite',
	'as' => 'webAppWebsite',
	'middleware' => ['guest'],
]);

Route::get('/prices', [
	'uses' => '\App\Http\Controllers\home_controller@prices',
	'as' => 'prices',
	'middleware' => ['guest'],
]);


Route::get('/our_work', [
	'uses' => '\App\Http\Controllers\home_controller@ourWork',
	'as' => 'ourWork',
	'middleware' => ['guest'],
]);