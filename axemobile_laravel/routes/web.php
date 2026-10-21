<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/about-us', [PagesController::class, 'about_us'])->name('about-us');
Route::get('/contact-us', [PagesController::class, 'contact_us'])->name('contact-us');

Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/services/{slug}', [PagesController::class, 'service_detail'])->name('service-detail');

Route::get('/products', [PagesController::class, 'products'])->name('products');
Route::get('/products/{slug}', [PagesController::class, 'product_detail'])->name('product-detail');

Route::get('/error-404', [PagesController::class, 'error_404'])->name('error-404');

Route::fallback(function () {
  return view('pages.error-404');
})->name('fallback');
