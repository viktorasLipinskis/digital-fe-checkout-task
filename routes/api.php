<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogClickController;

Route::post('/log-click', LogClickController::class)->name('log-click');
