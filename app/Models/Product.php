<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    public function admins()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function productCategories()
    {
        return $this->belongsTo(ProductCategory::class, 'product_categories');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'product_id');
    }

    public function videoProducts()
    {
        return $this->hasMany(VideoProduct::class, 'product_id');
    }
}
