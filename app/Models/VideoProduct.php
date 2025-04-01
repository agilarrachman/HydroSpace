<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoProduct extends Model
{
    /** @use HasFactory<\Database\Factories\VideoProductFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function video()
    {
        return $this->belongsTo(Video::class, 'video_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
