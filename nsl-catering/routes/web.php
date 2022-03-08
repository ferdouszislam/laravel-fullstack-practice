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

Route::get('/food_items', function () {
    
    $foodItems = [
        ['type' => 'Chicken Pizza', 'price' => 300, 'quantity' => '7 slices'],
        ['type' => 'Cheese Burger', 'price' => 250, 'quantity' => 'extra large'],
        ['type' => 'Plain Rice', 'price' => 100, 'quantity' => '1 plate'],
        ['type' => 'Chicken Curry', 'price' => 120, 'quantity' => '2 pieces'],
        ['type' => 'Beef Curry', 'price' => 150, 'quantity' => '2 pieces'],
        ['type' => 'Fried Vegetable', 'price' => 100, 'quantity' => '1 person'],
        ['type' => 'Mustard Salad', 'price' => 75, 'quantity' => '4 person']
    ];

    $limitFoodItems = request('limitFoodItems') == null ? count($foodItems) : request('limitFoodItems');

    // returns resources/views/sample.blade.php
    return view('food_items', [
        'foodItems' => $foodItems, 
        'limitFoodItems' => $limitFoodItems
    ]);
});
