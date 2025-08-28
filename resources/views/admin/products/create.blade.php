@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800">Nieuw Product</h1>
        <form method="POST" action="{{ route('admin.products.store') }}" class="mt-4">
            @csrf
            <div class="mt-4">
                <label for="name" class="block text-gray-700">Naam</label>
                <input type="text" name="name" class="border p-2 w-full rounded" required>
            </div>
            <div class="mt-4">
                <label for="description" class="block text-gray-700">Beschrijving</label>
                <textarea name="description" class="border p-2 w-full rounded" rows="5"></textarea>
            </div>
            <div class="mt-4">
                <label for="price" class="block text-gray-700">Prijs</label>
                <input type="number" name="price" step="0.01" class="border p-2 w-full rounded" required>
            </div>
            <div class="mt-4">
                <label for="category_id" class="block text-gray-700">Categorie</label>
                <select name="category_id" class="border p-2 w-full rounded" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <label for="stock" class="block text-gray-700">Voorraad</label>
                <input type="number" name="stock" class="border p-2 w-full rounded" required>
            </div>
            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Toevoegen</button>
        </form>
    </div>
@endsection