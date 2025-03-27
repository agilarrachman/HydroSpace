<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;

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
    public function store(StoreProductRequest $request)
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
            $validatedData['image'] = $request->file('picture1')->store('product_images');
        }

        if ($request->file('picture2')) {
            $validatedData['image2'] = $request->file('picture2')->store('product_images');
        }

        if ($request->file('picture3')) {
            $validatedData['image3'] = $request->file('picture3')->store('product_images');
        }

        if ($request->file('picture4')) {
            $validatedData['image4'] = $request->file('picture4')->store('product_images');
        }

        if ($request->file('picture5')) {
            $validatedData['image5'] = $request->file('picture5')->store('product_images');
        }

        $validatedData['user_id'] = Auth::user()->id;

        // Debugging the validated data
        dd($validatedData);

        // Product::create($validatedData);

        // return redirect('/dashboard/product')->with('success', 'Product has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('dashboard.products.show', [
            "title" => "HydroSpace | Bibit Sawi",
            "active" => "Produk"
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
}
