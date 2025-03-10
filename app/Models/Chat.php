<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    /** @use HasFactory<\Database\Factories\ChatFactory> */
    use HasFactory;

    public function customers()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function admins()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
