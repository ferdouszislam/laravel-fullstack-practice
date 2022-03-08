@extends('layouts.layout')

@section('content')
<div>
    Available Food Items
</div>

@foreach ($foodItems as $foodItem)
    <p>
        {{ $loop->index + 1 }}. {{ $foodItem['type'] }} - ({{ $foodItem['quantity'] }}) - {{ $foodItem['price'] }} BDT
    </p>
@endforeach

<!-- can add raw php using blade too -->
{{-- @php
    $name = 'hello from php';
    echo $name;
@endphp --}}
@endsection 