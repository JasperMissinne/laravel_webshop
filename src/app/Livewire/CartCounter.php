<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CartItem;
use Livewire\Attributes\On; 

class CartCounter extends Component
{
    #[On('cartUpdated')] 
    public function render()
    {
        $count = CartItem::where('session_id', session()->getId())->count();
        return view('livewire.cart-counter', ['count' => $count]);
    }
    
    public function redirectToCart()
    {
        return $this->redirect(route('cart'), navigate: true);
    }
}