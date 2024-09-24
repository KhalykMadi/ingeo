<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('admin.review.index', compact('reviews'));
    }

    public function edit(Review $review)
    {
        return view('admin.review.edit', compact('review'));
    }

    public function update(Review $review, Request $request)
    {
        $data = $request->validate([
            'rating' => ['required', 'integer', 'between:1,5'],
            'comment' => ['nullable', 'string'],
            'is_publish' => ['nullable', 'string']
        ]);
        $data['is_publish'] = isset($data['is_publish']);

        $review->update($data);
        return redirect()->route('admin.review.edit', $review);
    }
}
