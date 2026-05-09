<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\OrderFileController;
use App\Http\Controllers\OrderListController;
use App\Http\Controllers\OrderStoreController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\ThanksController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::post('/orders', OrderStoreController::class)->name('orders.store');
Route::get('/thanks', ThanksController::class)->name('thanks');

Route::get('/oferta', [LegalController::class, 'offer'])->name('offer');
Route::get('/policy', [LegalController::class, 'policy'])->name('policy');

Route::middleware('basic.auth')->group(function () {
    Route::get('/orders', OrderListController::class)->name('orders.list');
    Route::get('/orders/{order}/file', OrderFileController::class)->name('orders.file');
});

Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');
