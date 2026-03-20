<?php

namespace App\Http\Controllers;

use App\Models\Review;

class HomeController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['user', 'game'])->latest()->get();

        return view('welcome', compact('reviews'));
    }
}