<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'MasterfileController@index');

Auth::routes();

Route::get('/home', 'DashboardController@index');

#### Masterfile Module
Route::get('/masterfile', 'MasterfileController@index');
Route::get('/all-mfs', 'MasterfileController@masterfiles');


#### Inventory Module
Route::get('categories',array('uses'=>'InventoryController@getCategories','as'=>'category.store') );
Route::get('sub-categories',array('uses'=>'InventoryController@getSubCategories','as'=>'sub_category.store') );
Route::get('warehouses',array('uses'=>'InventoryController@getWarehouses','as'=>'warehouses.store'));
Route::get('all-items','InventoryController@getIndex');
Route::post('add-warehouse','InventoryController@addWarehouse');
Route::post('add-category','InventoryController@addCategory');
Route::post('add-subcategory','InventoryController@addSubCategory');

#### Revenue Manager Module
Route::get('/revenue-channels', 'RevenueChannelController@revenueChannels');
Route::post('/add-rev', 'RevenueChannelController@store');
Route::get('/service-channels', 'ServiceChannelController@serviceChannels');
Route::post('/add-sc', 'ServiceChannelController@store');
Route::get('/service-bills', 'RevenueChannelController@serviceBills');

