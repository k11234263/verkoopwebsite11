<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    // # Handle: Controleert of de gebruiker de juiste rol heeft
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role !== $role) {
            abort(403, 'Geen toegang.');
        }
        return $next($request);
    }
}
# Role.php: Middleware die controleert of de gebruiker een specifieke rol heeft (bijv. beheerder).