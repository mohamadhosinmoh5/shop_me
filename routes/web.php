<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Product as ProductUrl;
use App\Livewire\dashboard as DashboardUrl;
use App\Livewire as liveUrl;
// ->middleware(['\App\Http\Middleware\RedirectByCountry'])
Route::prefix('/')->group(function () {
    Route::get('/', liveUrl\MasterFront::class);

    Route::get('/products', ProductUrl\ProductCrud::class);

    Route::get('/attributes', ProductUrl\AttributeCrud::class);
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', DashboardUrl\Dashboard::class);

});