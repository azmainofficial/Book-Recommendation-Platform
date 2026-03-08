<?php

namespace App\Services;

use App\Models\Book;
use App\Models\User;

class RecommendationService
{
    /**
     * Get recommended books for a specific user.
     */
    public function getRecommendationsForUser(User $user, $limit = 6)
    {
        // Simple logic for now: 
        // 1. Get categories of books the user might like (placeholder logic since we don't have "likes" yet).
        // 2. Return latest books from those categories.
        
        // As a baseline, we return the most popular/viewed books 
        // OR books from categories the user has interacted with.
        
        return Book::with(['author', 'category'])
            ->inRandomOrder() 
            ->limit($limit)
            ->get();
    }

    /**
     * Get "Users who read this also read" recommendations.
     */
    public function getRelatedBooks(Book $book, $limit = 6)
    {
        return Book::where('category_id', $book->category_id)
            ->where('id', '!=', $book->id)
            ->with(['author', 'category'])
            ->limit($limit)
            ->get();
    }
}
