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
Route::get('cat/store/{name}' , 'CategoryController@store');
Route::get('cat/update/{id}' , 'CategoryController@update');
Route::get('cat/delete/{id}' , 'CategoryController@delete');

Route::get('/items/{cat_id}','ItemController@showItems');
Route::get('/get_item/{id}','ItemController@getItem');
Route::get('/items/store','ItemController@storeItems');
Route::get('/items/{itemID}/{number}' , 'ItemController@updatenumber');
Route::get('/items/delete/{id}' , 'ItemController@delete');

Route::get('/order/{username}/{totalPrice}/{paid}/{paidBy}','OrderController@makeOrder');
Route::get('/orders','OrderController@getOrders');
Route::get('/order_update/{id}/{paid}','OrderController@updateOrder');
Route::get('/order_delete/{id}','OrderController@delete');
Route::get('/order_delete/{id}/{price}','OrderController@deleteItem');



Route::get('/save/{itemID}/{itemName}/{orderID}/{price}/{numberOfItems}','OrderItemController@storeItems');
Route::get('/order_item','OrderItemController@getAllItem');
Route::get('/item_order/{orderID}','OrderItemController@getByOrder');
Route::get('/delete_item_order/{id}','OrderItemController@deleteItem');