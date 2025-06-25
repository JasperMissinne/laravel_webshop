<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Translation;
use Livewire\Component;

class ProductList extends Component
{
    public $products;
    public $currentLanguage = 'en';
    
    public function mount()
    {
        $this->loadProducts();
    }
    
    public function switchLanguage($language)
    {
        $this->currentLanguage = $language;
        $this->loadProducts();
    }
    
    private function loadProducts()
    {
        $this->products = Product::with(['translations' => function($query) {
            $query->where('locale', $this->currentLanguage);
        }])->get();
    }
    
    public function getTranslation($key)
    {
        return Translation::get($key, $this->currentLanguage);
    }
    
    public function render()
    {
        return view('livewire.product-list');
    }
}