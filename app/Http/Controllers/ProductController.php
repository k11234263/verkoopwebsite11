<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // # Index: Toont producten met filters
    public function index(Request $request)
    {
        $categories = Category::all();
        $query = Product::query();

        // Categorie-filter
        if ($category = $request->query('category')) {
            $query->where('category_id', $category);
        }

        // Sorteer-filter
        if ($sort = $request->query('sort')) {
            $query->orderBy('price', $sort);
        }

        $products = $query->with('category')->paginate(12);

        return view('products', compact('products', 'categories'));
    }
}
# ProductController.php: Laadt producten met filters.