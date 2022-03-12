<?php

use Illuminate\Support\Facades\Route;

use App\Helpers\DummyData;

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

Route::get('/food_items', function () {

    $foodItems = DummyData::$FOOD_ITEMS;

    $limitFoodItems = request('limitFoodItems') == null ? count($foodItems) : request('limitFoodItems');

    // returns resources/views/sample.blade.php
    return view('food_items', [
        'foodItems' => $foodItems, 
        'limitFoodItems' => $limitFoodItems
    ]);
});


Route::get('/food_item/{id}', function ($id) {

    $foodItems = DummyData::$FOOD_ITEMS;

    if($id < 0 || $id >= count($foodItems)) {
        abort(404, 'food item not found');
    }
    // set $id = 0 if not found
    // $id = ($id < 0 || $id >= count($foodItems)) ? 0 : $id;

    // returns resources/views/sample.blade.php
    return view('food_item', [
        'foodItem' => $foodItems[$id]
    ]);
});
