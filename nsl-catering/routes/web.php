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

Route::get('/food_items', 'FoodItemController@index');
Route::post('/food_items', 'FoodItemController@store') -> name('food_items.store');

// this route must be put before '/food_items/{id}' route
Route::get('/food_items/create', 'FoodItemController@create');

Route::get('/food_items/{id}', 'FoodItemController@show');
