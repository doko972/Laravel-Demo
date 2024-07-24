@extends('page')

@section('title', 'Liste des produits')

@section('content')
<h2>Liste des produits</h2>
<ul>
    @foreach ($products as $product)
        <li>{{ $product->name }}, vendu au prix de {{ $product->price }} €uros, {{ $product->description }}</li>
    @endforeach
</ul>
<a href="{{ route('product.create') }}">Ajouter un produit</a>
@endsection