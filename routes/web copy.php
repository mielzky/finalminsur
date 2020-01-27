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

Route::get('/', 'MainController@index');
Route::get('/thanks', 'MainController@thanks');

Route::get('/testk', 'TestkController@index');
Route::post('/testk', 'TestkController@store');
Route::get('/testk/create', 'TestkController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

///////////////////////////////////////////
Route::get('/deptsur/create', 'DeptsurController@create');
Route::post('/deptsur', 'DeptsurController@store');
Route::get('/deptsur/{deptsur}', 'DeptsurController@show');

Route::get('/deptsur/{deptsur}/surveys/create', 'SurveyController@create');
Route::post('/deptsur/{deptsur}/surveys/', 'SurveyController@store');
Route::delete('/deptsur/{deptsur}/surveys/{survey}', 'SurveyController@destroy');


Route::get('/surv/{deptsur}-{slug}', 'SurvController@show');
Route::post('/surv/{deptsur}-{slug}', 'SurvController@store');
Route::get('/text', 'TextController@show');