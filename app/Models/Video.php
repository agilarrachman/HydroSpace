<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /** @use HasFactory<\Database\Factories\VideoFactory> */
    use HasFactory;

    public function admins()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function videoCategories()
    {
        return $this->belongsTo(VideoCategory::class, 'video_categories');
    }

    public function videoProducts()
    {
        return $this->hasMany(VideoProduct::class, 'video_id');
    }
}
