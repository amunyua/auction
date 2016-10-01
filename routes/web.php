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

#### Revenue Manager Module
Route::get('/revenue-channels', 'RevenueChannelController@revenueChannels');
Route::get('/service-channels', 'RevenueChannelController@serviceChannels');
Route::get('/service-bills', 'RevenueChannelController@serviceBills');
