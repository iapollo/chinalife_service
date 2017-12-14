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

Route::get('/', 'PagesController@home');
Route::post('province', 'MechanismController@getCitybyProvince');
Route::post('workplaces', 'WorkplaceController@find');
Route::post('workplaces/{workplace}', 'WorkplaceController@show');
Route::post('workplaces/{workplace}/evaluations', 'EvaluationController@store');

Route::get('evaluations/{evaluation}/edit', 'EvaluationController@edit');
Route::patch('evaluations/{evaluation}', 'EvaluationController@update');