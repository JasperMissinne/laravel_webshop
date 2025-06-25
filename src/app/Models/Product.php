<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $guarded = [];
    
    public function translations(): HasMany
    {
        return $this->hasMany(ProductTranslation::class);
    }
    
    public function translate(string $locale): ?ProductTranslation
    {
        return $this->translations->where('locale', $locale)->first();
    }
}