<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('cat' , 'CategoryController@index');
Route::get('cat/{id}' , 'CategoryController@show');
Route::post('cat' , 'CategoryController@store');
Route::put('cat/{id}' , 'CategoryController@update');
Route::delete('cat/{id}' , 'CategoryController@delete');
