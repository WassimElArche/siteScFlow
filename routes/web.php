<?php

use App\Http\Controllers\ShopifyController;

Route::get('/shopify/products', [ShopifyController::class, 'getProducts']);
