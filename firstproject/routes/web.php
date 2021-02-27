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

Route::get('/', 'App\Http\Controllers\ProductsController@index');

// Return a controller with routing
// Laravel 8 (New) 
// Route::get('/products' , [ProductsController::class , "index"]);

// Laravel 8 (Also New)
Route::get('/products' , 'App\Http\Controllers\ProductsController@index');

// Routing Params
// Paatern is integer
// Route::get('/products/{id}', 'App\Http\Controllers\ProductsController@show')->where('id' , '[0-9]+');
// // ->where('id' , '[0-9]+');

// //Pattern is string
// Route::get('products/{name}','App\Http\Controllers\ProductsController@show')->where('name','[a-zA-Z]+');

// Multiple pattern 
Route::get('products/{name}/{id}','App\Http\Controllers\ProductsController@show')->where([
	'name' => '[a-z]+',
	'id' => '[0-9]+'
]);


