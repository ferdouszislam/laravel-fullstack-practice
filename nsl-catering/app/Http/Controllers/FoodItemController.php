<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\DummyData;
use App\Models\FoodItem;

class FoodItemController extends Controller
{

    const DEFAULT_PAGINATION_VALUE = 20;

    public function index()
    {

        $limitFoodItems = FoodItemController::DEFAULT_PAGINATION_VALUE;
        if(request('limitFoodItems') != null) $limitFoodItems = request('limitFoodItems');

        // paginate() works with 'page' url parameter
        $foodItems = FoodItem::paginate($limitFoodItems);
        
        $limitFoodItems = count($foodItems);

        // returns resources/views/sample.blade.php
        return view('food_items.index', [
            'foodItems' => $foodItems,
            'limitFoodItems' => $limitFoodItems
        ]);
    }

    public function show($id)
    {
        $foodItem = FoodItem::findOrFail($id);

        // returns resources/views/sample.blade.php
        return view('food_items.show', [
            'foodItem' => $foodItem
        ]);
    }

    public function create()
    {
        return view('food_items.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:food_items|string',
            'description' => 'string',
            'quantity' => 'required|string',
            'price' => 'required|integer',
        ]);

        $foodItem = new FoodItem();
        $foodItem->name = $data['name'];
        $foodItem->description = $data['description'] == null ? "" : $data['description'];
        $foodItem->quantity = $data['quantity'];
        $foodItem->price = $data['price'];

        $foodItem->save();

        return redirect('/');
    }
}
