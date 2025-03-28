<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\UpdateProductRequest;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Auth::user()->role);
        return view('dashboard.products.index', [
            "title" => "HydroSpace | Daftar Produk",
            "active" => "Produk",
            "products" => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.products.create', [
            "title" => "HydroSpace | Tambah Produk",
            "active" => "Produk",
            'product' => new Product(),
            "categories" => ProductCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:products',
            'price' => 'required|numeric|max:1000000',
            'description' => 'required',
            'stock' => 'required|numeric|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'category_id' => 'required|exists:product_categories,id'
        ]);

        if ($request->file('picture1')) {
            $validatedData['picture1'] = $request->file('picture1')->store('product_images', 'public');
        } else {
            throw new \Exception('The picture1 field is required.');
        }

        foreach (['picture2', 'picture3', 'picture4', 'picture5'] as $optionalPicture) {
            if ($request->file($optionalPicture)) {
                $validatedData[$optionalPicture] = $request->file($optionalPicture)->store('product_images', 'public');
            } else {
                unset($validatedData[$optionalPicture]);
            }
        }

        $validatedData['user_id'] = Auth::user()->id;

        // dd($validatedData);

        Product::create($validatedData);

        return redirect('/dashboard/products')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('dashboard.products.show', [
            "title" => $product->name . " | HydroSpace",
            "active" => "Produk",
            "product" => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit', [
            "title" => "HydroSpace | Update Produk",
            "active" => "Produk"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
