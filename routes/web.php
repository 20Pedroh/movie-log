<?php

use Illuminate\Support\Facades\Route;

use App\Models\Review;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('reviews', ReviewController::class);