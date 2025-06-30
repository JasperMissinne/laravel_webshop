<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CartItem;
use App\Models\Translation;

class Cart extends Component
{
    public $currentLanguage = 'en';

    protected $listeners = ['languageChanged' => 'handleLanguageChange'];

    public function mount()
    {
        // You might want to get the current language from session or other source
        $this->currentLanguage = session('language', 'en');
    }

    public function handleLanguageChange($language)
    {
        $this->currentLanguage = $language;
    }

    public function getTranslation($key)
    {
        return Translation::get($key, $this->currentLanguage);
    }

    public function continueShopping()
    {
        return redirect()->to('/');
    }

    public function getTotal()
    {
        return CartItem::with('product')
            ->where('session_id', session()->getId())
            ->get()
            ->sum(function($item) {
                return $item->product->price;
            });
    }

    public function render()
    {
        $items = CartItem::with('product')
            ->where('session_id', session()->getId())
            ->get();

        return view('livewire.cart', [
            'items' => $items,
            'total' => $this->getTotal()
        ]);
    }
}