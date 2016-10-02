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

Auth::routes();

Route::get('/home', 'DashboardController@index');

#### Masterfile Module
Route::get('/masterfile', 'MasterfileController@index');
Route::get('/all_mfs', 'MasterfileController@allMfs');

#### Inventory Module
Route::get('categories',array('uses'=>'InventoryController@getCategories','as'=>'category.index') );
Route::get('sub-categories',array('uses'=>'InventoryController@getSubCategories','as'=>'sub_category.store') );
Route::get('warehouses',array('uses'=>'InventoryController@getWarehouses','as'=>'warehouses.store'));
Route::get('all-items','InventoryController@getIndex');
Route::post('add-warehouse','InventoryController@addWarehouse');
Route::post('add-category','InventoryController@addCategory');
Route::post('add-subcategory','InventoryController@addSubCategory');
Route::get('category-details/{id}','InventoryController@getAilments');
Route::post('update-category/{id}',['uses'=>'InventoryController@updateCategory','as'=>'category.update']);
Route::delete('delete-category/{id}','InventoryController@destroyCategory');

#### Revenue Manager Module
Route::get('/revenue-channels', 'RevenueChannelController@revenueChannels');
Route::post('/add-rev', 'RevenueChannelController@store');
Route::post('/update-rev', 'RevenueChannelController@update');
Route::delete('/delete-rev', 'RevenueChannelController@destroy');
Route::get('/service-channels', 'ServiceChannelController@serviceChannels');
Route::post('/add-sc', 'ServiceChannelController@store');
Route::post('/update-sc', 'ServiceChannelController@update');
Route::post('/delete-sc', 'ServiceChannelController@destroy');
Route::get('/service-bills', 'RevenueChannelController@serviceBills');

### User Management Module
Route::get('/users', 'UserController@index');
Route::post('add_user_role','UserRoleController@addUserRole');
Route::post('audit_trail','UserRoleController@auditTrail');
