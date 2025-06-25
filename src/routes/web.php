<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ProductList;

// Change from Counter to ProductList
Route::get('/', ProductList::class);
