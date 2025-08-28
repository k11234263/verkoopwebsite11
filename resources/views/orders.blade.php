@extends('layouts.app')
@section('content')
    <!-- Hero-sectie -->
    <section class="relative bg-gray-900 text-white">
        <img src="{{ asset('images/hero.jpg') }}" alt="Orders Hero" class="w-full h-[400px] object-cover opacity-70">
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Mijn Bestellingen</h1>
                <p class="text-lg md:text-xl">Overzicht van al je aankopen</p>
            </div>
        </div>
    </section>

    <!-- Bestellingen -->
    <section class="container mx-auto py-12">
        @if ($orders->isEmpty())
            <div class="bg-white rounded-lg shadow-md p-6">
                <p class="text-gray-600">Geen bestellingen gevonden.</p>
            </div>
        @else
            <div class="space-y-6">
                @foreach ($orders as $order)
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <p class="font-semibold">Bestelling ID: {{ $order->id }}</p>
                        <p>Status: <span class="text-accent">{{ $order->status }}</span></p>
                        <p>Geplaatst op: {{ $order->created_at->format('d-m-Y H:i') }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection