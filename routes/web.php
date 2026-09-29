<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameReviewController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/reviews', [GameReviewController::class, 'index'])->name('reviews.index');
Route::post('/reviews', [GameReviewController::class, 'store'])->name('reviews.store');
// route::view('/', 'home'); //no additional funtions setup
