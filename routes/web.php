<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderStoreController;
use App\Http\Controllers\ThanksController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::post('/orders', OrderStoreController::class)->name('orders.store');
Route::get('/thanks', ThanksController::class)->name('thanks');

// Placeholder route for file downloads — replaced by OrderFileController in Phase 3
Route::get('/orders/{order}/file', fn () => abort(404))->name('orders.file');
