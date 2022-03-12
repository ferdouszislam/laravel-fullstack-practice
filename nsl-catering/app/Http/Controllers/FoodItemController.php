<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\DummyData;

class FoodItemController extends Controller
{

    public function index()
    {
        $foodItems = DummyData::$FOOD_ITEMS;

        $limitFoodItems = request('limitFoodItems') == null ? count($foodItems) : request('limitFoodItems');

        // returns resources/views/sample.blade.php
        return view('food_items', [
            'foodItems' => $foodItems,
            'limitFoodItems' => $limitFoodItems
        ]);
    }

    public function show($id)
    {
        $foodItems = DummyData::$FOOD_ITEMS;

        if ($id < 0 || $id >= count($foodItems)) {
            abort(404, 'food item not found');
        }
        // set $id = 0 if not found
        // $id = ($id < 0 || $id >= count($foodItems)) ? 0 : $id;

        // returns resources/views/sample.blade.php
        return view('food_item', [
            'foodItem' => $foodItems[$id]
        ]);
    }
}
