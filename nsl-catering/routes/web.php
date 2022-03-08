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
        ['type' => 'Mustard Salad', 'price' => 150, 'quantity' => '1 person']
    ];

    // returns resources/views/sample.blade.php
    return view('food_items', ['foodItems' => $foodItems]);
});
