<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // # Fillable: Velden voor mass assignment
    protected $fillable = ['name'];

    // # Relatie: Een categorie heeft meerdere producten
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
# Category.php: Model voor productcategorieën, met relatie naar producten.