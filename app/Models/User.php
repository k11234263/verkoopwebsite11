<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // # Fillable: Velden die via mass assignment ingevuld kunnen worden
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    // # Hidden: Velden die niet in JSON-output verschijnen
    protected $hidden = [
        'password', 'remember_token',
    ];

    // # Casts: Converteert email_verified_at naar datetime
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
# User.php: Model voor gebruikers, ondersteunt login/registratie en rolbeheer (klant/beheerder).