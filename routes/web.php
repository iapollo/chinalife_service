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

// Route::get('/', function () {
//     return view('welcome');
// });

//home
Route::get('/', 'PagesController@home');
//locate
Route::post('province', 'MechanismController@getCitybyProvince');
Route::post('workplaces', 'WorkplaceController@find');
//add
Route::post('workplaces/{workplace}/evaluations', 'EvaluationController@store');
//edit 
Route::get('evaluations/{evaluation}/edit', 'EvaluationController@edit');
Route::patch('evaluations/{evaluation}', 'EvaluationController@update');
Route::get('workplaces/{workplace}', 'WorkplaceController@show');