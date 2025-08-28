@extends('layouts.app')

@section('content')
    <!-- # Adminpaneel: Toont lijst van producten met CRUD-opties -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Productbeheer</h1>
        <a href="{{ route('admin.products.create') }}" class="bg-blue-600 text-white p-2 rounded mb-4 inline-block">Nieuw Product</a>
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2">Naam</th>
                    <th class="p-2">Prijs</th>
                    <th class="p-2">Categorie</th>
                    <th class="p-2">Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="p-2">{{ $product->name }}</td>
                        <td class="p-2">€{{ $product->price }}</td>
                        <td class="p-2">{{ $product->category->name }}</td>
                        <td class="p-2">
                            <a href="{{ route('admin.products.edit', $product) }}" class="text-blue-600">Bewerken</a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600" onclick="return confirm('Zeker weten?')">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if(session('success'))
            <p class="text-green-600 mt-4">{{ session('success') }}</p>
        @endif
    </div>
@endsection
# index.blade.php: Toont een tabel van producten in het adminpaneel met bewerk- en verwijderopties.