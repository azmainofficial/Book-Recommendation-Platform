<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BookRating;
use Illuminate\Http\Request;

class BookRatingController extends Controller
{
    public function index()
    {
        // Fetch all book ratings with related book and user
        return BookRating::with(['book', 'user'])->get();
    }

    public function store(Request $request)
    {
        // Validate and create a new book rating
        $validated = $request->validate([
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id',
            'rate_level' => 'required|integer|min:1|max:5', // Example: rating scale from 1 to 5
        ]);

        $bookRating = BookRating::create($validated);
        return response()->json($bookRating, 201);
    }

    public function show($id)
    {
        // Show a specific book rating with related book and user
        $bookRating = BookRating::with(['book', 'user'])->findOrFail($id);
        return response()->json($bookRating);
    }

    public function update(Request $request, $id)
    {
        // Validate and update a book rating
        $bookRating = BookRating::findOrFail($id);

        $validated = $request->validate([
            'book_id' => 'sometimes|required|exists:books,book_id',
            'user_id' => 'sometimes|required|exists:users,id',
            'rate_level' => 'sometimes|required|integer|min:1|max:5', // Example: rating scale from 1 to 5
        ]);

        $bookRating->update($validated);
        return response()->json($bookRating);
    }

    public function destroy($id)
    {
        // Delete a book rating
        $bookRating = BookRating::findOrFail($id);
        $bookRating->delete();

        return response()->json(['message' => 'Book rating deleted successfully']);
    }
}
