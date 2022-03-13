<!-- show list of food items -->

@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Available Food Items 
            @if ($limitFoodItems==null)
                ( {{ count($foodItems) }} )
            @else
                ( {{ $limitFoodItems }} )
            @endif
        </div>

        @foreach ($foodItems as $foodItem)

            @if ($limitFoodItems != null and $loop->index >= $limitFoodItems)
                @break
            @endif

            
            <div>
                {{ $foodItem['name'] }} - ({{ $foodItem['quantity'] }}) - {{ $foodItem['price'] }} BDT
            </div>

        @endforeach

    </div>
</div>
@endsection