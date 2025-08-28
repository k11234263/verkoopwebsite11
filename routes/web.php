<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use Illuminate\Support\Facades\Route;

// # Home-route: Toont de homepagina via HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');

// # Publieke routes: Toegankelijk voor iedereen
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/contact', fn() => view('contact'))->name('contact');

// # Authenticatie routes: Inloggen en registratie via Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// # Admin routes: Alleen voor gebruikers met rol 'beheerder'
Route::middleware(['auth', 'role:beheerder'])->prefix('admin')->group(function () {
    Route::get('/products', [AdminProductController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [AdminProductController::class, 'store'])->name('admin.products.store');
    Route::get('/products/{product}/edit', [AdminProductController::class, 'edit'])->name('admin.products.edit');
    Route::patch('/products/{product}', [AdminProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/{product}', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');
});

require __DIR__.'/auth.php';
# web.php: Definieert routes, met '/' naar HomeController@index voor de homepagina.