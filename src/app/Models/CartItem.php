<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItem extends Model
{
    protected $fillable = [
        'product_id',
        'session_id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class)->with('translations');
    }

    // Helper method to get cart items for current session
    public static function getCartItems()
    {
        return self::where('session_id', session()->getId())
            ->with('product')
            ->get();
    }
}