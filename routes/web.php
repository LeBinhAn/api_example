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
    return view('products');
});
Route::group(['prefix' => 'api.exampleproject.gisoft/'], function () {
    Route::get('categories', 'App\Http\Controllers\Api\CategoryController@index');
    Route::get('products', 'App\Http\Controllers\Api\ProductController@index');
    Route::get('products/{id}', 'App\Http\Controllers\Api\ProductController@getProductById');
});

