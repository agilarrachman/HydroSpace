<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\UpdateProductRequest;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

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
            "products" => Product::with('category')->latest()->filter(request(['search', 'category']))->paginate(20)->withQueryString(),
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
            "active" => "Produk",
            "product" => $product,
            "categories" => ProductCategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $product->id,
            'category_id' => 'required|exists:product_categories,id',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'picture.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|string|max:255|unique:products,slug';
        }

        $validatedData = $request->validate($rules);

        $oldImagesFromRequest = $request->input('oldImages', []);

        // Debugging oldImages
        // dd([
        //     'oldImagesFromRequest' => $oldImagesFromRequest,
        //     'productPictures' => [
        //         'picture1' => $product->picture1,
        //         'picture2' => $product->picture2,
        //         'picture3' => $product->picture3,
        //         'picture4' => $product->picture4,
        //         'picture5' => $product->picture5,
        //     ],
        // ]);

        for ($i = 1; $i <= 5; $i++) {
            $pictureField = 'picture' . $i;
            $currentPicturePath = $product->$pictureField;

            if ($request->hasFile($pictureField)) {
                if ($currentPicturePath) {
                    Storage::disk('public')->delete($currentPicturePath);
                }
                $validatedData[$pictureField] = $request->file($pictureField)->store('product_images', 'public');
            } else {
                if (!isset($oldImagesFromRequest[$i]) && $currentPicturePath) {
                    Storage::disk('public')->delete($currentPicturePath);
                    $validatedData[$pictureField] = null;
                } elseif (isset($oldImagesFromRequest[$i])) {
                    $validatedData[$pictureField] = $oldImagesFromRequest[$i];
                } elseif (!$currentPicturePath) {
                    $validatedData[$pictureField] = null;
                }
            }
        }

        unset($validatedData['picture.*']);
        unset($validatedData['oldImages']);

        $product->update($validatedData);

        return redirect('/dashboard/products')->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Hapus semua gambar yang terkait dengan produk
        foreach (['picture1', 'picture2', 'picture3', 'picture4', 'picture5'] as $pictureField) {
            if ($product->$pictureField) {
                Storage::disk('public')->delete($product->$pictureField);
            }
        }

        // Hapus produk dari database
        Product::destroy($product->id);

        return redirect('/dashboard/products')->with('success', 'Produk berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }

    // CUSTOMERS PRODUCTS
    public function customerIndex()
    {

        $category = ProductCategory::where('slug', request('category'))->first();

        return view('products', [
            "title" => $category ? $category->name : "Produk",
            "active" => "Produk",
            "products" => Product::with('category')->latest()->filter(request(['search', 'category']))->paginate(12)->withQueryString(),
            "categories" => ProductCategory::all(),
            "currentCategory" => $category
        ]);
    }

    public function customerShow(Product $product)
    {
        return view('viewProduct', [
            "title" => $product->name . " | HydroSpace",
            "active" => "Produk",
            "product" => $product,
            "categories" => ProductCategory::all(),
        ]);
    }

    public function getProducts()
    {
        $products = Product::select('name', 'id')->get();
        return response()->json($products);
    }
}
