<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
</head>
<body>
    <div>
        Available Food Items
    </div>

    <p> {{ $type }} - ({{ $quantity }}) - 

    <!-- conditionals from blade template -->
    @if($price > 300)
        overpriced
    @elseif($price < 100)
        very cheap
    @else
        {{ $price }} BDT
    @endif

    </p>

    <!-- can add raw php using blade too -->
    {{-- @php
        $name = 'hello from php';
        echo $name;
    @endphp --}}

</body>
</html>