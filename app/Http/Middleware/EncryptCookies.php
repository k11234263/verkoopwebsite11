<?php
namespace App\Http\Middleware;
use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    // # Protected: Lijst van cookies die niet versleuteld worden
    protected $except = [
        //
    ];
}
# EncryptCookies.php: Definieert de middleware voor het versleutelen van cookies.