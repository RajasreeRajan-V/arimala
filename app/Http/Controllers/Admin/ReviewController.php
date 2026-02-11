<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use Illuminate\Http\Request;

class ReviewController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $reviews = Review::latest()->get();
    return view('admin.admin_review', compact('reviews'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required',
        'rating' => 'required|integer|min:1|max:5',
    ]);
     Review::create([
        'name' => $request->name,
        'description' => $request->description,
        'rating' => $request->rating,
    ]);
    return redirect()->route('admin.reviews.index')
                     ->with('success', 'Review added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'rating' => 'required|integer|min:1|max:5',
    ]);
    $review = Review::findOrFail($id);
    $review->update([
        'name' => $request->name,
        'description' => $request->description,
        'rating' => $request->rating,
    ]);
    return redirect()->back()->with('success', 'Review updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->back()->with('success', 'Review deleted successfully!');
    }
}
