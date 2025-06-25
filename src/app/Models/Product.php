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
    
    // Helper method to get translation for current locale
    public function getTranslation($locale = 'en')
    {
        return $this->translations()->where('locale', $locale)->first();
    }
    
    // Helper method to get name in specific locale
    public function getName($locale = 'en')
    {
        $translation = $this->getTranslation($locale);
        return $translation ? $translation->name : 'No name';
    }
    
    // Helper method to get description in specific locale
    public function getDescription($locale = 'en')
    {
        $translation = $this->getTranslation($locale);
        return $translation ? $translation->description : 'No description';
    }
}