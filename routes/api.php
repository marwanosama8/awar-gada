<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('products-grid', [ProductController::class, 'productsGrid']);
Route::get('feature-prod', [ProductController::class, 'featureProd']);
Route::post('add-to-cart', [CartController::class, 'addToCart']);