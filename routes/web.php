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

/*
* Dump Config
*/
Route::get('/env', function(){
	dump(config('app.name'));
	dump(config('app.env'));
	dump(config('app.debug'));
	dump(config('app.url'));
});

/*
* Home Page
*/
Route::get('/', 'ShelterController@index');

/*
* Shelter
*/
Route::get('/find-shelter', 'ShelterController@findShelter');

/*
* Result
*/
Route::get('/result', 'ShelterController@result');
