<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Translation;
use App\Models\CartItem;
use Livewire\Component;

class ProductList extends Component
{
    public $sessionId;
    public $products;
    public $currentLanguage = 'en';

    protected $listeners = ['languageChanged' => 'handleLanguageChange'];
    
    public function mount()
    {
        $this->sessionId = session()->getId();
        $this->loadProducts();
    }

    public function handleLanguageChange($language)
    {
        $this->currentLanguage = $language;
        $this->loadProducts();
    }
    
    public function getTranslation($key)
    {
        return Translation::get($key, $this->currentLanguage);
    }
    
    public function loadProducts()
    {
        $this->products = Product::with(['translations' => function($query) {
            $query->where('locale', $this->currentLanguage);
        }])->get();
    }

    public function addToCart($productId)
    {
        CartItem::create([
            'product_id' => $productId,
            'session_id' => $this->sessionId
        ]);
        
        session()->flash('message', $this->getTranslation('added_to_cart'));
        
        $this->dispatch('cartUpdated');
    }
    
    public function render()
    {
        return view('livewire.product-list');
    }
}