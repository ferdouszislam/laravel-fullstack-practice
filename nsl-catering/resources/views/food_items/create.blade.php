<!-- show single food item -->

@extends('layouts.layout')

@section('content')
<div class="content title m-b-md">
    <div>
        Add new food item
    </div>
</div>

<div class="wrapper pizza-details content">
    
    {!! Form::open(array('route' => 'food_items.store','method'=>'POST')) !!}

        <label for="name">Name: </label>
        {!! Form::text('name', null, array('class' => 'form-control')) !!}

        <label for="description">Description: </label>
        {!! Form::text('description', null, array('class' => 'form-control')) !!}
        
        <label for="quantity">Quantity: </label>
        {!! Form::text('quantity', null, array('class' => 'form-control')) !!}
        
        <label for="price">Price: </label>
        {!! Form::number('price', null, array('class' => 'form-control')) !!}
        
        <button class="btn btn-primary" type="submit">create</button>

    {!! Form::close() !!}

</div>

<br>

@if ($errors->any())
    <div class="content">
        <h2 style="background-color: #d1385c; color: white;">Failed to create food item!</h2>
        @foreach ($errors->all() as $error)
            <p>- {{$error}}</p>
        @endforeach
    </div>
@endif


<br>

@endsection