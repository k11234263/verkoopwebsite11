@extends('layouts.app')

@section('content')
    <!-- # Hero-sectie: Introductie -->
    <section class="relative bg-gray-900 text-white">
        <img src="https://images.unsplash.com/photo-1557821552-17105176677c?q=80&w=1932&auto=format&fit=crop" 
             alt="Producten Hero" 
             class="w-full h-[400px] object-cover opacity-70">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Onze Producten</h1>
                <p class="text-lg md:text-xl">Ontdek ons brede assortiment en vind jouw favoriet!</p>
            </div>
        </div>
    </section>

    <!-- # Productenlijst: Filters en grid -->
    <section class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Alle Producten</h2>

        <!-- # Filters: Categorie en sortering -->
        <form method="GET" class="mb-8 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
            <select name="category" class="border p-3 rounded-lg w-full md:w-1/3 focus:outline-none focus:ring-2 focus:ring-blue-600">
                <option value="">Alle categorieën</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <select name="sort" class="border p-3 rounded-lg w-full md:w-1/3 focus:outline-none focus:ring-2 focus:ring-blue-600">
                <option value="">Sorteer op prijs</option>
                <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Laag naar hoog</option>
                <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Hoog naar laag</option>
            </select>
            <button type="submit" class="bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition w-full md:w-auto">
                Filter
            </button>
        </form>

        <!-- # Productgrid: Toont producten -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse($products as $product)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="{{ $product->image ?? 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1499&auto=format&fit=crop' }}" 
                         alt="{{ $product->name }}" 
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">{{ $product->name }}</h3>
                        <p class="text-gray-600 mb-2">{{ Str::limit($product->description, 50) }}</p>
                        <p class="text-green-600 font-bold mb-2">€{{ number_format($product->price, 2) }}</p>
                        <p class="text-sm text-gray-500">Categorie: {{ $product->category->name }}</p>
                        <a href="{{ route('products') }}" 
                           class="mt-2 inline-block text-blue-600 hover:underline">Bekijk Product</a>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-600 col-span-full">Geen producten gevonden.</p>
            @endforelse
        </div>

        <!-- # Paginering -->
        <div class="mt-8">
            {{ $products->links() }}
        </div>
    </section>
@endsection
