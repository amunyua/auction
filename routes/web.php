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
Route::get('edit_mf/{id}', 'MasterfileController@getMf');
Route::get('mf_profile/{id}', 'MasterfileController@getMfProfile');
Route::post('edit_mf/{id}', 'MasterfileController@updateMf');
Route::post('mf_profile/{id}', 'MasterfileController@addAddress');
Route::get('/address_data/{id}', 'MasterfileController@getAddressData');
Route::put('/update_address', 'MasterfileController@updateAddress');
Route::delete('/delete_address', 'MasterfileController@deleteAddress');

### Crm Module
Route::get('all_customers', 'CrmController@getAllCustomers');
Route::get('all_staff', 'CrmController@getAllStaffs');
Route::get('all_suppliers', 'CrmController@getAllSuppliers');

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
Route::post('add-auction-item', 'AuctionController@store');
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
Route::get('stock-transactions',array('uses'=>'NewInventoryController@stockTransactions','as'=>'stock-transactions.index'));
Route::post('create-transaction','NewInventoryController@createTransaction');
Route::post('upload-inventory-pics', 'NewInventoryController@uploadInventoryPics');
Route::get('item-details/{id}','NewInventoryController@getItemDetails');

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
Route::post('audit_trail','UserRoleController@auditTrail');
Route::get('/user-roles', 'UserRoleController@index');
Route::get('/all-roles', 'UserRoleController@loadRoles');
Route::post('/add-role', 'UserRoleController@store');
Route::get('/get-role/{id}', 'UserRoleController@getRole');
Route::post('/edit-role', 'UserRoleController@update');
Route::post('/delete-role', 'UserRoleController@destroy');
Route::post('/attach-to-role', 'UserRoleController@attachToRole');
Route::post('/detach-from-role', 'UserRoleController@detachFromRole');
Route::get('/get-role-routes/{role_id}', 'UserRoleController@getRoleRoutes');


#### System Manager Module
Route::get('/routes', 'RoutesController@index');
Route::get('/load-routes', 'RoutesController@loadRoutes');
Route::post('/add-route', 'RoutesController@store');
Route::get('/get-routes', 'RoutesController@getRoutes');
Route::get('/get-route/{id}', 'RoutesController@getRoute');
Route::post('/update-route', 'RoutesController@update');
Route::post('/delete-route', 'RoutesController@destroy');
Route::get('/menu', 'MenuController@index');
Route::post('/add-menu', 'MenuController@store');
Route::post('/arrange-menu', 'MenuController@arrangeMenu');
Route::get('/get-menu/{id}', 'MenuController@getMenu');
Route::post('/edit-menu', 'MenuController@update');
Route::post('/delete-menu', 'MenuController@destroy');