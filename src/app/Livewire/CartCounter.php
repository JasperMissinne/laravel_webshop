<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartCounter extends Component
{
    protected $listeners = ['cartUpdated' => 'render'];

    public function render()
    {
        $count = CartItem::where('session_id', session()->getId())->count();
        return view('livewire.cart-counter', ['count' => $count]);
    }
}