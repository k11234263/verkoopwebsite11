<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Beheerder',
            'email' => 'admin@verkoopwebsite.nl',
            'password' => bcrypt('Verkoop2025!'),
            'role' => 'beheerder',
        ]);
    }
}