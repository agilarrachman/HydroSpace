<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.videos', [
            "title" => "HydroSpace | Daftar Video",
            "active" => "Video",
            'videos' => Video::with(['admin', 'videoCategories', 'videoProducts'])->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.createVideo', [
            "title" => "HydroSpace | Tambah Video",
            "active" => "Video"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        return view('dashboard.videoDetail', [
            "title" => "HydroSpace | Panduan Instalasi Sistem NFT Hidroponik",
            "active" => "Video"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view('dashboard.updateVideo', [
            "title" => "HydroSpace | Update Video",
            "active" => "Video"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
