<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/promocode/SubmitPromoCode','AddaPromocodeController@SubmitPromoCode');
Route::post('/users/SubmitUsers','UsersController@SubmitUsers');
Route::post('/driver/SubmitDriver','DriverController@SubmitDriver');
Route::post('/car/SubmitCar','CarController@SubmitCar');
Route::post('/package/SubmitPackage','PackageController@SubmitPackage');

Route::post('/users/UpdateUser','UsersController@UpdateUser');
 

Route::get('/listUsers/DeleteUser/{id}','ListUsersController@DeleteUser');

Route::get('/listPackage/GetAllpackage','ListPackageController@GetAllPackage');
Route::get('/listpromocode/GetAllPromoCode','ListpromocodeController@GetAllPromoCode');
Route::get('/listCar/GetAllCar','ListCarController@GetAllCar');
Route::get('/listUsers/GetAllUsers','ListUsersController@GetAllUsers');
Route::get('/listDrivers/GetAllDriver','ListDriversController@GetAllDriver');
Route::get('/ride/GetAllRides','RideController@GetAllRides');
Route::get('/fare/GetAllFare','FareController@GetAllFare');

?>