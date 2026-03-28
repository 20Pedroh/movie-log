<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['game', 'user'])->latest()->get();
        return view('welcome', compact('reviews'));
    }

    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'score' => 'required|integer|min:0|max:10',
        ]);

        $review->update([
            'title' => $request->title,
            'description' => $request->description,
            'score' => $request->score,
        ]);

        return redirect('/')->with('success', 'Review atualizada!');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect('/')->with('success', 'Review excluída com sucesso!');
    }
}