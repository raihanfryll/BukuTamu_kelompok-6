<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;

Route::get('/', [TamuController::class, 'index'])->name('tamu.index');
Route::post('/tamu', [TamuController::class, 'store'])->name('tamu.store');
