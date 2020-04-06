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

Auth::routes();

Route::group(['middleware'=>'guest'],function(){

	Route::get('/',['as'=>'dashboard','uses'=>'DashboardController@index']);
	Route::get('/users',['as'=>'users','uses'=>'UsersController@index']);
	Route::get('/driver',['as'=>'driver','uses'=>'DriverController@index']);
	Route::get('/promocode',['as'=>'promocode','uses'=>'AddaPromocodeController@index']);
	Route::get('/listpromocode',['as'=>'listpromocode','uses'=>'ListpromocodeController@index']);
	Route::get('/car',['as'=>'car','uses'=>'CarController@index']);
	Route::get('/package',['as'=>'package','uses'=>'PackageController@index']);
	Route::get('/listUsers',['as'=>'listUsers','uses'=>'ListUsersController@index']);
	Route::get('/listDrivers',['as'=>'listDrivers','uses'=>'ListDriversController@index']);
	Route::get('/listPackage',['as'=>'listPackage','uses'=>'ListPackageController@index']);
	Route::get('/ride',['as'=>'ride','uses'=>'RideController@index']);
 	Route::get('/fare',['as'=>'fare','uses'=>'FareController@index']);
	Route::get('/listCar',['as'=>'listCar','uses'=>'ListCarController@index']);  

});
