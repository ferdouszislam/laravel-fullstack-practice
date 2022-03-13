<!-- show sindle food item -->

@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div>
            {{ $foodItem['name'] }} - ({{ $foodItem['quantity'] }}) - {{ $foodItem['price'] }} BDT
        </div>
    </div>
</div>
@endsection