<?php

use Illuminate\Support\Facades\Route;

use App\Models\Review;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);