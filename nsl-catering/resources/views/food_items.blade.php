@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Available Food Items
        </div>

        @foreach ($foodItems as $foodItem)
            <div>
                {{ $loop->index + 1 }}. {{ $foodItem['type'] }} - ({{ $foodItem['quantity'] }}) - {{ $foodItem['price'] }} BDT
            </div>
        @endforeach

    </div>
</div>
@endsection