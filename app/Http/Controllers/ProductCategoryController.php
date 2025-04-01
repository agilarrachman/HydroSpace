<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.createCategoryProduct', [
            "title" => "HydroSpace | Tambah Kategori Product",
            "active" => "Kategori"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:video_categories,slug'
        ]);

        ProductCategory::create($validatedData);

        return redirect('/dashboard/categories')->with('productSuccess', 'Data kategori produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $productCategory)
    {
        return view('dashboard.categories.updateCategoryProduct', [
            "title" => "HydroSpace | Update Kategori Produk",
            "active" => "Kategori",
            "productCategory" => $productCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        $rules = [
            'name' => 'required|string|max:255',
        ];

        if ($request->slug !== $productCategory->slug) {
            $rules['slug'] = 'required|string|max:255|unique:product_categories,slug';
        }

        // Validate input data
        $validatedData = $request->validate($rules);

        productCategory::where('id', $productCategory->id)->update($validatedData);
        return redirect('/dashboard/categories')->with('productSuccess', 'Data kategori produk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();

        return redirect('/dashboard/categories')->with('productSuccess', 'Data kategori produk berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        // Menggunakan SlugService untuk membuat slug unik
        $slug = SlugService::createSlug(ProductCategory::class, 'slug', $request->name);

        return response()->json(['slug' => $slug]);
    }
}
