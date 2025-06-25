<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    protected $guarded = [];
    
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}