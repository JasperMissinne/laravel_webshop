<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = [
        'key',
        'language_code',
        'value'
    ];
    
    // Helper method to get translation by key and language
    public static function get($key, $languageCode = 'en')
    {
        $translation = self::where('key', $key)
            ->where('language_code', $languageCode)
            ->first();
            
        return $translation ? $translation->value : $key;
    }
}