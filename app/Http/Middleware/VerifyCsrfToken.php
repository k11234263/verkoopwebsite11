<?php
namespace App\Http\Middleware;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    // # Except: URLs die CSRF-controle overslaan
    protected $except = [
        //
    ];
}
# VerifyCsrfToken.php: Middleware voor CSRF-bescherming.