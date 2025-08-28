<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Verkoopwebsite') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    <!-- # Navigatie: Includeert navigation.blade.php -->
    @include('layouts.navigation')

    <!-- # Content: Plaatst de inhoud van andere pagina’s -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- # Footer: Eenvoudige footer voor professionaliteit -->
    <footer class="bg-gray-900 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Verkoopwebsite. Alle rechten voorbehouden.</p>
            <div class="mt-4 space-x-4">
                <a href="{{ route('about') }}" class="hover:underline">Over Ons</a>
                <a href="{{ route('contact') }}" class="hover:underline">Contact</a>
            </div>
        </div>
    </footer>
</body>
</html>
