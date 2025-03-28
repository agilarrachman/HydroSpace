<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class VideoCategory extends Model
{
    /** @use HasFactory<\Database\Factories\VideoCategoryFactory> */
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    // protected $with = ['videos'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function videos()
    {
        return $this->hasMany(Video::class, 'video_categories');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
