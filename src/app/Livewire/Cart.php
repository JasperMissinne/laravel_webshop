<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CartItem;

class Cart extends Component
{
    public function render()
    {
        return view('livewire.cart', [
            'items' => CartItem::with('product')
                ->where('session_id', session()->getId())
                ->get()
        ]);
    }
}