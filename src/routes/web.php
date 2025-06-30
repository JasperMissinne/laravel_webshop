<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ProductList;

Route::get('/', ProductList::class);

Route::get('/cart', \App\Livewire\Cart::class)->name('cart');