<!-- resources/views/layouts/navigation.blade.php -->
<nav class="bg-blue-600 p-4 text-white">
    <div class="container mx-auto flex justify-between">
        <!-- # Merknaam: Link naar homepagina -->
        <a href="{{ route('home') }}" class="text-lg font-bold">Verkoopwebsite</a>
        <div class="space-x-4">
            <!-- # Navigatie: Links naar publieke pagina’s -->
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">Over Ons</a>
            <a href="{{ route('products') }}">Producten</a>
            <a href="{{ route('contact') }}">Contact</a>
            @auth
                <!-- # Ingelogde gebruiker: Link naar profiel en admin (indien beheerder) -->
                <a href="{{ route('profile.edit') }}">Profiel</a>
                @if(auth()->user()->role === 'beheerder')
                    <a href="{{ route('admin.products.index') }}">Admin</a>
                @endif
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit">Uitloggen</button>
                </form>
            @else
                <!-- # Niet ingelogd: Links naar login/registratie -->
                <a href="{{ route('login') }}">Inloggen</a>
                <a href="{{ route('register') }}">Registreren</a>
            @endauth
        </div>
    </div>
</nav>
