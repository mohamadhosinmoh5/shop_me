<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Product as ProductUrl;

Route::get('/products', ProductUrl\ProductCrud::class);

Route::get('/attributes', ProductUrl\AttributeCrud::class);