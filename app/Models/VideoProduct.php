<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoProduct extends Model
{
    /** @use HasFactory<\Database\Factories\VideoProductFactory> */
    use HasFactory;

    public function videos()
    {
        return $this->belongsTo(Video::class, 'video_id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
