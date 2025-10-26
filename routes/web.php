<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopifyController;

Route::get('/', function () {
    return redirect('/accueil');
});

Route::resource('accueil', ShopifyController::class);
