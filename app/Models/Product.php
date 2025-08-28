<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // # Fillable: Velden voor mass assignment
    protected $fillable = ['name', 'description', 'price', 'category_id'];

    // # Relatie: Een product hoort bij een categorie
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
# Product.php: Model voor producten, met naam, beschrijving, prijs, en categorie-relatie.