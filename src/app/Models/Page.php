<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    protected $guarded = [];
    
    public function translations(): HasMany
    {
        return $this->hasMany(PageTranslation::class);
    }
    
    public function translate(string $locale): ?PageTranslation
    {
        return $this->translations->where('locale', $locale)->first();
    }
}