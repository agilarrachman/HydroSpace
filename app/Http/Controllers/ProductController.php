<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Order;
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
            'picture1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'picture2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'picture3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'picture4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'picture5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validatedData = $request->validate($rules);

        foreach (['picture1', 'picture2', 'picture3', 'picture4', 'picture5'] as $pictureField) {
            if ($request->hasFile($pictureField)) {
                // Hapus gambar lama jika ada
                if ($product->$pictureField) {
                    Storage::disk('public')->delete($product->$pictureField);
                }
                // Simpan gambar baru
                $validatedData[$pictureField] = $request->file($pictureField)->store('product_images', 'public');
            } elseif ($request->input($pictureField) === null && $pictureField !== 'picture1') {
                // Jika gambar dihapus (input kosong) untuk selain picture1, hapus dari database dan storage
                if ($product->$pictureField) {
                    Storage::disk('public')->delete($product->$pictureField);
                    $validatedData[$pictureField] = null;
                }
            }
        }

        // Jika picture1 tidak diunggah atau dihapus, gunakan gambar lama
        if (!$request->hasFile('picture1') && $request->input('picture1') !== null) {
            unset($validatedData['picture1']); // Jangan ubah field ini
        }

        // Update data produk
        $product->update($validatedData);

        return redirect('/dashboard/products')->with('success', 'Data produk berhasil diperbarui!');
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

        return redirect('/dashboard/products')->with('success', 'Data produk berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }

    // CUSTOMERS PRODUCTS
    public function customerIndex()
    {
        // Menentukan kategori produk berdasarkan slug yang diterima dari request
        $category = ProductCategory::where('slug', request('category'))->first();

        $user = Auth::user();
        
        // Mendapatkan order dengan status 'Keranjang' untuk customer yang sedang login
        $order = Order::where('customer_id', $user->id)  // Memastikan mengambil ID user yang sedang login
            ->where('status', 'Keranjang')
            ->first();

        // Jika ada order yang ditemukan, ambil item-item keranjang tersebut
        $orderItems = $order ? $order->orderItems()->orderBy('created_at', 'desc')->get() : collect([]);

        return view('products', [
            "title" => $category ? $category->name : "Produk",  // Jika kategori ditemukan, gunakan namanya, jika tidak "Produk"
            "active" => "Produk",  // Mengaktifkan menu Produk
            "products" => Product::with('category')  // Mengambil produk dengan kategori
                ->latest()
                ->filter(request(['search', 'category']))  // Filter berdasarkan pencarian atau kategori
                ->paginate(12)  // Paginate hasil pencarian produk
                ->withQueryString(),
            "categories" => ProductCategory::all(),  // Mengambil semua kategori produk
            "currentCategory" => $category,  // Mengirimkan kategori saat ini yang sedang dilihat
            "orderItems" => $orderItems,  // Mengirimkan orderItems ke view jika ada
            'totalPrice' => $orderItems->sum('total_price'),
            'totalItem' => $orderItems->sum('quantity'),
        ]);
    }

    public function customerShow(Product $product)
    {
        $user = Auth::user();

        // Mendapatkan order dengan status 'Keranjang' untuk customer yang sedang login
        $order = Order::where('customer_id', $user->id)  // Memastikan mengambil ID user yang sedang login
            ->where('status', 'Keranjang')
            ->first();

        // Jika ada order yang ditemukan, ambil item-item keranjang tersebut
        $orderItems = $order ? $order->orderItems()->orderBy('created_at', 'desc')->get() : collect([]);

        return view('viewProduct', [
            "title" => $product->name . " | HydroSpace",
            "active" => "Produk",
            "product" => $product,
            "categories" => ProductCategory::all(),
            "orderItems" => $orderItems,  // Mengirimkan orderItems ke view jika ada
            'totalPrice' => $orderItems->sum('total_price'),
            'totalItem' => $orderItems->sum('quantity'),
        ]);
    }

    public function getProducts()
    {
        $products = Product::select('name', 'id')->get();
        return response()->json($products);
    }
}
