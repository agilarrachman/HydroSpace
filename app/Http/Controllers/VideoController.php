<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Video;
use App\Models\VideoCategory;
use App\Models\VideoProduct;
use App\Models\VideoView;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $videos = Video::with(['admin', 'videoCategory', 'videoProducts'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->input('search');
                $query->where('title', 'like', "%$search%")
                    ->orWhere('slug', 'like', "%$search%")
                    ->orWhereHas('videoCategory', function ($query) use ($search) {
                        $query->where('name', 'like', "%$search%");
                    });
            })
            ->orderBy('updated_at', 'desc') 
            ->paginate(10);

        return view('dashboard.videos.index', [
            "title" => "HydroSpace | Daftar Video",
            "active" => "Video",
            "videos" => $videos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $videoCategories = VideoCategory::all();
        $products = Product::all();

        return view('dashboard.videos.create', [
            "title" => "HydroSpace | Tambah Video",
            "active" => "Video",
            'videoCategories' => $videoCategories,
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'admin_id' => 'required',
            'category_id' => 'required|exists:video_categories,id',
            'video' => 'required|file|mimes:mp4,mov,avi,wmv|max:50480',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:videos,slug',
            'duration' => 'required|integer',
            'difficulty_level' => 'required|string',
            'delivery_style' => 'required|string',
            'description' => 'required|string',
            'objective_heading1' => 'required|string|max:255',
            'objective_description1' => 'required|string|max:255',
            'objective_heading2' => 'nullable|string|max:255',
            'objective_description2' => 'nullable|string|max:255',
            'objective_heading3' => 'nullable|string|max:255',
            'objective_description3' => 'nullable|string|max:255',
            'objective_heading4' => 'nullable|string|max:255',
            'objective_description4' => 'nullable|string|max:255'
        ]);

        // Simpan file video ke folder 'videos'
        if ($request->hasFile('video')) {
            $validatedData['video'] = $request->file('video')->store('video', 'public');
        }

        // Simpan file thumbnail ke folder 'thumbnails'
        if ($request->hasFile('thumbnail')) {
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('thumbnail', 'public');
        }
        
        // Buat data video baru
        $video = Video::create($validatedData);

        // Simpan data produk ke tabel video_products
        if ($request->has('products')) {
            // Decode JSON string menjadi array
            $products = json_decode($request->products, true);

            // Pastikan decoding berhasil dan data adalah array
            if (is_array($products)) {
                foreach ($products as $product) {
                    VideoProduct::create([
                        'video_id' => $video->id,
                        'product_id' => $product['id'],
                    ]);
                }
            }
        }

        return redirect('/dashboard/videos')->with('success', 'Data video berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        return view('dashboard.videos.show', [
            "title" => "HydroSpace | " . $video->title,
            "active" => "Video",
            'video' => $video->load(['admin', 'videoCategory', 'videoProducts.product']),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        $videoCategories = VideoCategory::all();
        $products = Product::all();

        return view('dashboard.videos.edit', [
            "title" => "HydroSpace | Update Video",
            "active" => "Video",
            'video' => $video->load(['admin', 'videoCategory', 'videoProducts.product']),
            'videoCategories' => $videoCategories,
            'products' => $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $validatedData = $request->validate([
            'admin_id' => 'required',
            'category_id' => 'required|exists:video_categories,id',
            'video' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:50480',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:videos,slug,' . $video->id,
            'duration' => 'required|integer',
            'difficulty_level' => 'required|string',
            'delivery_style' => 'required|string',
            'description' => 'required|string',
            'objective_heading1' => 'required|string|max:255',
            'objective_description1' => 'required|string|max:255',
            'objective_heading2' => 'nullable|string|max:255',
            'objective_description2' => 'nullable|string|max:255',
            'objective_heading3' => 'nullable|string|max:255',
            'objective_description3' => 'nullable|string|max:255',
            'objective_heading4' => 'nullable|string|max:255',
            'objective_description4' => 'nullable|string|max:255'
        ]);

        // Jika ada upload video baru
        if ($request->file('video')) {            
            // Hapus video lama jika ada
            if ($video->video) {
                Storage::disk('public')->delete($video->video);
            }
            $validatedData['video'] = $request->file('video')->store('video', 'public');
        }

        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail if it exists
            if ($video->thumbnail) {
                Storage::disk('public')->delete($video->thumbnail);
            }
            // Save the new thumbnail
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('thumbnail', 'public');
        }

        // Update video dengan data baru
        $video->update($validatedData);

        // Perbarui produk yang terkait dengan video
        if ($request->has('products')) {
            $products = json_decode($request->products, true);

            if (is_array($products)) {
                // Hapus produk lama terkait video
                VideoProduct::where('video_id', $video->id)->delete();

                // Tambahkan produk baru
                foreach ($products as $product) {
                    VideoProduct::create([
                        'video_id' => $video->id,
                        'product_id' => $product['id'],
                    ]);
                }
            }
        }
        return redirect('/dashboard/videos')->with('success', 'Data video berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();

        return redirect('/dashboard/videos')->with('Success', 'Data video berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        // Menggunakan SlugService untuk membuat slug unik
        $slug = SlugService::createSlug(VideoCategory::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }

    public function getSelectedProducts(Video $video)
    {
        // Ambil produk terkait dengan video
        $selectedProducts = $video->videoProducts->map(function ($videoProduct) {
            return [
                'id' => $videoProduct->product->id,
                'name' => $videoProduct->product->name,
            ];
        });

        return response()->json($selectedProducts);
    }

    public function getProducts()
    {
        $products = Product::all(['id', 'name']);
        return response()->json($products);
    }

    public function indexCustomer(Request $request)
    {
        $videos = Video::with('videoCategory')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->input('search');
                $query->where('title', 'like', "%$search%")
                    ->orWhere('slug', 'like', "%$search%")
                    ->orWhere('description', 'like', "%$search%");
            })
            ->when($request->filled('category'), function ($query) use ($request) {
                $categorySlug = $request->input('category');
                $query->whereHas('videoCategory', function ($categoryQuery) use ($categorySlug) {
                    $categoryQuery->where('slug', $categorySlug);
                });
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10); 

        $videoCategories = VideoCategory::all();

        return view('videos', [
            "title" => "HydroSpace | Edukasi",
            "active" => "Edukasi",
            "videos" => $videos,
            "videoCategories" => $videoCategories
        ]);
    }

    public function showCustomer(Video $video)
    {
        $viewCount = VideoView::where('video_id', $video->id)->count();

        return view('viewVideo', [
            "title" => "HydroSpace | " . $video->title,
            "active" => "Edukasi",
            'video' => $video->load(['admin', 'videoCategory', 'videoProducts.product']),
            'viewCount' => $viewCount,
        ]);
    }
}
