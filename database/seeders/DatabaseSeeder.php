<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    // # Run: Seedt testdata
    public function run(): void
    {
        // Admin-gebruiker
        User::create([
            'name' => 'Admin',
            'email' => 'admin@verkoopwebsite.nl',
            'password' => Hash::make('Verkoop2025!'),
            'role' => 'beheerder',
        ]);

        // Categorieën
        $categories = [
            ['name' => 'Elektronica'],
            ['name' => 'Kleding'],
            ['name' => 'Accessoires'],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }

        // Producten
        $products = [
            [
                'name' => 'Smartphone',
                'description' => 'Een krachtige smartphone met de nieuwste functies.',
                'price' => 599.99,
                'category_id' => 1,
                'image' => 'images/smartphone.jpg',
            ],
            [
                'name' => 'T-Shirt',
                'description' => 'Comfortabel katoenen T-shirt in diverse kleuren.',
                'price' => 19.99,
                'category_id' => 2,
                'image' => 'images/tshirt.jpg',
            ],
            [
                'name' => 'Horloge',
                'description' => 'Stijlvol horloge met een modern design.',
                'price' => 99.99,
                'category_id' => 3,
                'image' => 'https://media.giphy.com/media/3o7TKsQ8zgPBMfJ4xW/giphy.gif',
            ],
        ];
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
# DatabaseSeeder.php: Seedt users, categories, products.