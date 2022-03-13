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
                <strong>{{ $foodItem['name'] }}</strong> 
                (<a href="{{ url('food_items/' . $foodItem['id']) }}">details</a>)
            </div>
    
        @endforeach

    </div>
</div>
@endsection