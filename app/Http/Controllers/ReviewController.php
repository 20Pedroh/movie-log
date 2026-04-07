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
        if (auth()->id() !== $review->user_id) {
            abort(403);
        }

        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        if (auth()->id() !== $review->user_id) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'score' => 'required|integer|min:0|max:10',
        ]);

        $review->update($request->only(['title', 'content', 'score']));

        return redirect()->route('home')->with('success', 'Review atualizada!');
    }

    public function destroy(Review $review)
    {
        if (auth()->id() !== $review->user_id) {
            abort(403);
        }

        $review->delete();

        return redirect('/')->with('success', 'Review excluída com sucesso!');
    }
}