<!-- show sindle food item -->

@extends('layouts.layout')

@section('content')

<div class="content title m-b-md">
    <div>
        {{ $foodItem['name'] }}
    </div>
</div>

<div class="wrapper pizza-details">
    <div class="content">
        <p class="type">
            {{ $foodItem['description'] }}
        </p>
        <p class="type">
            <b><u>Quantity</u>:</b> {{ $foodItem['quantity'] }} 
            <b><u>Price</u>:</b> {{ $foodItem['price'] }} BDT
        </p>
    </div>
</div>
<a href="{{ url('/food_items') }}" class="back"><- Back to all items</a>
@endsection