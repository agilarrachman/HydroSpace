<?php

namespace App\Http\Controllers;

use App\Models\VideoView;
use Illuminate\Http\Request;

class VideoViewController extends Controller
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

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'video_id' => 'required|exists:videos,id',
            'customer_id' => 'nullable|exists:users,id',
        ]);

        $videoId = $request->input('video_id');
        $customerId = $request->input('customer_id');

        // Periksa apakah pelanggan sudah pernah melihat video ini sebelumnya
        $existingView = VideoView::where('customer_id', $customerId)
            ->where('video_id', $videoId)
            ->first();

        // Jika belum pernah dilihat, baru tambahkan record view
        if (!$existingView) {
            VideoView::create([
                'customer_id' => $customerId,
                'video_id' => $videoId,
            ]);

            return response()->json(['message' => 'View recorded successfully'], 200);
        } else {
            return response()->json(['message' => 'View already recorded for this video'], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(VideoView $videoView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VideoView $videoView)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VideoView $videoView)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoView $videoView)
    {
        //
    }
}
