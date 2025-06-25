<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public $products;
    
    public function mount()
    {
        // Load products with their English translations
        $this->products = Product::with(['translations' => function($query) {
            $query->where('locale', 'en');
        }])->get();
    }
    
    public function render()
    {
        return view('livewire.product-list')
            ->layout('components.layouts.app');
    }
}