<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // # Index: Toont lijst van producten in adminpaneel
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.products.index', compact('products'));
    }

    // # Create: Toont formulier voor nieuw product
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    // # Store: Slaat nieuw product op
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);
        Product::create($request->all());
        return redirect()->route('admin.products.index')->with('success', 'Product toegevoegd.');
    }

    // # Edit: Toont formulier voor productbewerking
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    // # Update: Slaat productwijzigingen op
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);
        $product->update($request->all());
        return redirect()->route('admin.products.index')->with('success', 'Product bijgewerkt.');
    }

    // # Destroy: Verwijdert een product
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product verwijderd.');
    }
}
# ProductController.php (Admin): Behandelt CRUD-operaties voor producten in het adminpaneel.