<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // # Index: Toont de homepagina
    public function index()
    {
        return view('home');
    }
}
# HomeController.php: Geeft home.blade.php terug voor de route '/'.