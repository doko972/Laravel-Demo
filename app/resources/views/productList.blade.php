@extends('page')

@section('content')

<h2>Product List</h2>

    <ul>
        @foreach ($products as $product)
        <li>{{ $product->name}}, vendu au prix de {{$product->price }}</li>
        @endforeach
    </ul>

</body>

</html>