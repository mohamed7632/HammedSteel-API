<?php

use App\Http\Controllers\CustomerTransaction;
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
//----------categories---------------
Route::get('cat' , 'CategoryController@index');
Route::get('cat/{id}' , 'CategoryController@show');
Route::get('cat/store/{name}' , 'CategoryController@store');
Route::get('cat/update/{id}' , 'CategoryController@update');
Route::get('cat/delete/{id}' , 'CategoryController@delete');
//---------------items-------------------------
Route::get('/items/{cat_id}','ItemController@showItems');
Route::get('/get_item/{id}','ItemController@getItem');
Route::get('/items/store/{cat_id}/{name}/{number}/{price}','ItemController@storeItems');
Route::get('/items/add_number/{itemID}/{number}' , 'ItemController@addnumber');
Route::get('/items/substract_number/{itemID}/{number}' , 'ItemController@substractnumber');
Route::get('/items/update_price/{itemID}/{price}' , 'ItemController@updateprice');
Route::get('/items/delete/{id}' , 'ItemController@delete');

//--------------transaction------------------------
Route::get('/transaction/save/{name}/{paid}/{remaining}/{paidBy}/{type}','CustomerTransaction@addNewTransaction');
Route::get('/transaction/display/{type}','CustomerTransaction@displayTransaction');
Route::get('/transaction/name/{name}/{from}/{to}','CustomerTransaction@getTrans');
//---------------------orders-----------------------
Route::get('/order/{username}/{totalPrice}/{paid}/{paidBy}','OrderController@makeOrder');
Route::get('/orders','OrderController@getOrders');
Route::get('/order_update/{id}/{paid}','OrderController@updateOrder');
Route::get('/order_delete/{id}','OrderController@delete');
Route::get('/order_delete/{id}/{price}','OrderController@deleteItem');
Route::get('/order_paid','OrderController@getAllPaid');

//---------------------------order_item-------------------
Route::get('/save/{itemID}/{itemName}/{orderID}/{price}/{numberOfItems}','OrderItemController@storeItems');
Route::get('/order_item','OrderItemController@getAllItem');
Route::get('/item_order/{orderID}','OrderItemController@getByOrder');
Route::get('/delete_item_order/{id}','OrderItemController@deleteItem');
Route::get('/get_best','OrderItemController@getBest');

//-------------------------Account-------------------------

Route::get('/client/{name}/{money}/{type}','ClientController@add');
Route::get('/client/update/{name}/{money}/{type}','ClientController@update');
Route::get('/client/by_type/{type}','ClientController@getByType');
Route::get('/client_paid/{type}','ClientController@getAllPaid');


