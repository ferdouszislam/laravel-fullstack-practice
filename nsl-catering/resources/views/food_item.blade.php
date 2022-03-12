@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div>
            {{ $foodItem['type'] }} - ({{ $foodItem['quantity'] }}) - {{ $foodItem['price'] }} BDT
        </div>
    </div>
</div>
@endsection