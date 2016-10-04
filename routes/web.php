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
Route::get('/', 'DashboardController@index');

#### Masterfile Module
Route::get('/masterfile', 'MasterfileController@index');
Route::post('add_mf', 'MasterfileController@addMf');
Route::get('all_mfs', 'MasterfileController@allMfs');
Route::post('edit_mf/{id}',['uses'=>'MasterfileController@updateMf','as'=>'masterfile.update']);

#### Inventory Module
//routes for managing category details
Route::get('categories',array('uses'=>'InventoryController@getCategories','as'=>'category.index') );
Route::post('add-category','InventoryController@addCategory');
Route::get('category-details/{id}','InventoryController@getAilments');
Route::post('update-category/{id}',['uses'=>'InventoryController@updateCategory','as'=>'category.update']);
Route::delete('delete-category/{id}','InventoryController@destroyCategory');

#### Auction Module
Route::get('auction-items', 'AuctionController@index');
Route::get('auction-item-data/{id}', 'AuctionController@getAuctionItemData');
Route::get('live-auction-items', 'AuctionController@liveAuctions');
Route::get('ended-auction-items', 'AuctionController@endedAuctions');
Route::post('edit-auction-item', 'AuctionController@update');
Route::delete('delete-auction-item', 'AuctionController@destroy');
Route::get('bid-packages', 'BidPackageController@index');
Route::post('add-bid-package', 'BidPackageController@store');
Route::post('update-bid-package', 'BidPackageController@update');
Route::delete('delete-bid-package', 'BidPackageController@destroy');
Route::get('bid-package-data/{id}', 'BidPackageController@getBidPackage');

//routes for managing sub category details
Route::get('sub-categories',array('uses'=>'InventoryController@getSubCategories','as'=>'sub_category.index') );
Route::post('add-subcategory','InventoryController@addSubCategory');
Route::get('get-subcategory-ailments/{id}','InventoryController@getSubCatAilments');
Route::post('update-subcategory/{id}', 'InventoryController@updateSubcategory');
Route::delete('delete-subcategory/{id}','InventoryController@destroySubcategory');

Route::get('warehouses',array('uses'=>'InventoryController@getWarehouses','as'=>'warehouses.store'));
Route::get('all-items','InventoryController@getIndex');
Route::get('warehouse-data/{warehouse_id}','InventoryController@getWarehouse');
Route::post('add-warehouse','InventoryController@addWarehouse');
Route::post('update-warehouse/{id}','InventoryController@updateWarehouse');
Route::delete('delete-warehouse/{id}','InventoryController@destroyWarehouse');

Route::get('add-item','NewInventoryController@addItem');
Route::get('add-item',array( 'uses'=>'NewInventoryController@addItem','as'=>'add-items.index'));
Route::post('store-item','NewInventoryController@StoreItem');
Route::get('all-items',array('uses'=>'NewInventoryController@index','as'=>'all-items.index'));
Route::get('stock-transactions','NewInventoryController@stockTransactions');

#### Revenue Manager Module
Route::get('/revenue-channels', 'RevenueChannelController@revenueChannels');
Route::post('/add-rev', 'RevenueChannelController@store');
Route::get('/rev-data/{id}', 'RevenueChannelController@getRevData');
Route::post('/update-rev', 'RevenueChannelController@update');
Route::delete('/delete-rev', 'RevenueChannelController@destroy');
Route::get('/service-channels', 'ServiceChannelController@serviceChannels');
Route::post('/add-sc', 'ServiceChannelController@store');
Route::get('/service-data/{id}', 'ServiceChannelController@getServData');
Route::post('/update-sc', 'ServiceChannelController@update');
Route::delete('/delete-sc', 'ServiceChannelController@destroy');
Route::get('/service-bills', 'RevenueChannelController@serviceBills');

### User Management Module
Route::get('/users', 'UserController@index');
Route::post('/update-user', 'UserController@update');
Route::delete('/delete-user', 'UserController@destroy');

//Route::post('add_user_role','UserRoleController@addUserRole');
//Route::post('audit_trail','UserRoleController@auditTrail');

Route::post('add_user_role','UserRoleController@addUserRole');
Route::post('audit_trail','UserRoleController@auditTrail');
Route::get('/user-roles', 'UserRoleController@index');
