<?php

namespace App\Http\Controllers;

use App\Models\VideoCategory;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class VideoCategoryController extends Controller
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
        return view('dashboard.createCategoryVideo', [
            "title" => "HydroSpace | Tambah Kategori Video",
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

        VideoCategory::create($validatedData);

        return redirect('/dashboard/categories')->with('videoSuccess', 'Data kategori berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(VideoCategory $videoCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VideoCategory $videoCategory)
    {
        return view('dashboard.updateCategoryVideo', [
            "title" => "HydroSpace | Update Kategori Video",
            "active" => "Kategori",
            "videoCategory" => $videoCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VideoCategory $videoCategory)
    {
        $rules = [
            'name' => 'required|string|max:255',
        ];

        if ($request->slug !== $videoCategory->slug) {
            $rules['slug'] = 'required|string|max:255|unique:video_categories,slug';
        }

        // Validate input data
        $validatedData = $request->validate($rules);

        VideoCategory::where('id', $videoCategory->id)->update($validatedData);
        return redirect('/dashboard/categories')->with('videoSuccess', 'Data kategori berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoCategory $videoCategory)
    {
        $videoCategory->delete();

        return redirect('/dashboard/categories')->with('videoSuccess', 'Data kategori berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        // Menggunakan SlugService untuk membuat slug unik
        $slug = SlugService::createSlug(VideoCategory::class, 'slug', $request->name);

        return response()->json(['slug' => $slug]);
    }
}
