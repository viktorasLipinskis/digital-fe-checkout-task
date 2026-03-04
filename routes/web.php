<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatchAllController;
use App\Http\Controllers\CheckoutController;

Route::get('/', CheckoutController::class);
Route::post('/order/{productSlug}', CatchAllController::class)->name('order');

Route::fallback(CatchAllController::class);
