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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('mobil/add','App\Http\Controllers\MobilController@create');
Route::post('mobil/add','App\Http\Controllers\MobilController@store');
Route::get('mobil/stok','App\Http\Controllers\MobilController@getStok');
Route::get('mobil/penjualan','App\Http\Controllers\MobilController@getPenjualan');
// Route::get('mobil/edit/{id}','App\Http\Controllers\MobilController@edit');
Route::post('mobil/edit/{id}','App\Http\Controllers\MobilController@update');
Route::get('mobil','App\Http\Controllers\MobilController@index');
Route::get('mobil/{id}','App\Http\Controllers\MobilController@show');
Route::delete('mobil/{id}','App\Http\Controllers\MobilController@destroy');

// Route::get('motor/add','App\Http\Controllers\MotorController@create');
Route::post('motor/add','App\Http\Controllers\MotorController@store');
Route::get('motor/stok','App\Http\Controllers\MotorController@getStok');
Route::get('motor/penjualan','App\Http\Controllers\MotorController@getPenjualan');
// Route::get('motor/edit/{id}','App\Http\Controllers\MotorController@edit');
Route::post('motor/edit/{id}','App\Http\Controllers\MotorController@update');
Route::get('motor','App\Http\Controllers\MotorController@index');
Route::get('motor/{id}','App\Http\Controllers\MotorController@show');
Route::delete('motor/{id}','App\Http\Controllers\MotorController@destroy');