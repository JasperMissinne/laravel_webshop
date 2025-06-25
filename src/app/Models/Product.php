<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'price'
    ];
    
    public function translations(): HasMany
    {
        return $this->hasMany(ProductTranslation::class);
    }
    
    public function getTranslation($locale = 'en')
    {
        return $this->translations()->where('locale', $locale)->first();
    }
    
    public function getName($locale)
    {
        return $this->translations->where('locale', $locale)->first()->name ?? $this->name;
    }

    public function getDescription($locale)
    {
        return $this->translations->where('locale', $locale)->first()->description ?? $this->description;
    }
}