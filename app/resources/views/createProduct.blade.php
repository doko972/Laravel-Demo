@extends('page')

@section('title', 'Créer un produit')

@section('content')
<h2>@yield('title')</h2>
<form action="{{ route('product.store') }}" method="post">
    @csrf
    <label for="name">Nom:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="price">Prix :</label>
    <input type="text" name="price" id="price" required>
    <br>
    <label for="description">Description :</label>
    <input type="text" name="description" id="description" required>
    <br>
    <button type="submit">Ajouter</button>
</form>
@endsection