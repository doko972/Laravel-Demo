@extends('page')

@section('title', 'Liste des produits')

@section('content')
<h2>Liste des produits</h2>
<ul>
    @foreach ($products as $product)
        <li>
            {{ $product->name }}, vendu au prix de {{ $product->price }} €uros, {{ $product->description }}
            <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
            <a href="{{ route('product.edit', $product->id) }}">Modifier</a>
        </li>
    @endforeach
</ul>
<a href="{{ route('product.create') }}">Ajouter un produit</a>
@endsection