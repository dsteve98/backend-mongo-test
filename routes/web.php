<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('mobil/add','App\Http\Controllers\MobilController@create');
// Route::post('mobil/add','App\Http\Controllers\MobilController@store');
// Route::get('mobil/stok','App\Http\Controllers\MobilController@getStok');
// Route::get('mobil/penjualan','App\Http\Controllers\MobilController@getPenjualan');
Route::get('mobil/edit/{id}','App\Http\Controllers\MobilController@edit');
// Route::post('mobil/edit/{id}','App\Http\Controllers\MobilController@update');
// Route::get('mobil','App\Http\Controllers\MobilController@index');
// Route::get('mobil/{id}','App\Http\Controllers\MobilController@show');
// Route::delete('mobil/{id}','App\Http\Controllers\MobilController@destroy');

Route::get('/token', function () {
    return csrf_token(); 
});


Route::get('motor/add','App\Http\Controllers\MotorController@create');
// Route::post('motor/add','App\Http\Controllers\MotorController@store');
// Route::get('motor/stok','App\Http\Controllers\MotorController@getStok');
// Route::get('motor/penjualan','App\Http\Controllers\MotorController@getPenjualan');
Route::get('motor/edit/{id}','App\Http\Controllers\MotorController@edit');
// Route::post('motor/edit/{id}','App\Http\Controllers\MotorController@update');
// Route::get('motor','App\Http\Controllers\MotorController@index');
// Route::delete('motor/{id}','App\Http\Controllers\MotorController@destroy');