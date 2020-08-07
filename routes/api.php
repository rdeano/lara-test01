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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/createUser','AdminController@createUser');
Route::post('/createPhoneNumber','AdminController@createPhoneNumber');
Route::post('/linkPhoneToUser','AdminController@linkPhoneToUser');

Route::get('/getUser','AdminController@getUser');
Route::get('/getUserById/{sysid}','AdminController@getUserById');
Route::get('/getPhones','AdminController@getPhones');
Route::get('/getPhonesLinktouser/{sysid}','AdminController@getPhonesLinktouser');
