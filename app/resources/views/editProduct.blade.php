@extends('page')

@section('title', 'Modifier le produit')

@section('content')
<h2>Modifier le produit</h2>
<form action="{{ route('product.update', $product->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Nom:</label>
    <input type="text" name="name" id="name" value="{{ $product->name }}" required>
    <br>
    <label for="price">Prix :</label>
    <input type="text" name="price" id="price" value="{{ $product->price }}" required>
    <br>
    <label for="description">Description :</label>
    <input type="text" name="description" id="description" value="{{ $product->description }}" required>
    <br>
    <button type="submit">Mettre à jour</button>
</form>
@endsection