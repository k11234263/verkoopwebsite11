@extends('layouts.app')

@section('content')
    <!-- # Hero-sectie: Introductie met afbeelding -->
    <section class="relative bg-gray-900 text-white">
        <img src="https://images.unsplash.com/photo-1516321310762-4794370e6a66?q=80&w=1470&auto=format&fit=crop" 
             alt="Over Ons Hero" 
             class="w-full h-[400px] object-cover opacity-70">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Over Verkoopwebsite</h1>
                <p class="text-lg md:text-xl">Kwaliteit, passie en klanttevredenheid sinds dag één!</p>
            </div>
        </div>
    </section>

    <!-- # Missie: Beschrijf het bedrijf -->
    <section class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-3xl font-bold mb-4">Onze Missie</h2>
                <p class="text-gray-600 mb-4">
                    Bij Verkoopwebsite draait alles om het bieden van de beste producten tegen scherpe prijzen. 
                    Wij zijn gepassioneerd over kwaliteit en streven naar een ongeëvenaarde klanttevredenheid. 
                    Ontdek ons brede assortiment en ervaar een naadloze winkelervaring!
                </p>
                <a href="{{ route('contact') }}" 
                   class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                    Neem Contact Op
                </a>
            </div>
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1470&auto=format&fit=crop" 
                 alt="Onze Missie" 
                 class="w-full h-64 object-cover rounded-lg shadow-md">
        </div>
    </section>

    <!-- # Team: Toon het team (placeholders) -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Ons Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Teamlid 1 -->
                <div class="bg-white rounded-lg shadow-md p-4 text-center">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1470&auto=format&fit=crop" 
                         alt="Teamlid 1" 
                         class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Anna de Vries</h3>
                    <p class="text-gray-600">Oprichter & CEO</p>
                </div>
                <!-- Teamlid 2 -->
                <div class="bg-white rounded-lg shadow-md p-4 text-center">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1470&auto=format&fit=crop" 
                         alt="Teamlid 2" 
                         class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Mark Jansen</h3>
                    <p class="text-gray-600">Hoofd Producten</p>
                </div>
                <!-- Teamlid 3 -->
                <div class="bg-white rounded-lg shadow-md p-4 text-center">
                    <img src="https://media.giphy.com/media/3o7TKsQ8zgPBMfJ4xW/giphy.gif" 
                         alt="Teamlid 3 GIF" 
                         class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Lisa Bakker</h3>
                    <p class="text-gray-600">Klantenservice</p>
                </div>
            </div>
        </div>
    </section>
@endsection
