<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    protected $recommendationService;

    public function __construct(\App\Services\RecommendationService $recommendationService)
    {
        $this->recommendationService = $recommendationService;
    }

    public function home()
    {
        $featuredBooks = \App\Models\Book::with(['author', 'category'])->limit(6)->get();
        $categories = \App\Models\Category::limit(6)->get();
        
        $recommendedBooks = [];
        if (auth()->check()) {
            $recommendedBooks = $this->recommendationService->getRecommendationsForUser(auth()->user());
        }

        return view('pages.home', compact('featuredBooks', 'categories', 'recommendedBooks'));
    }

    public function categories()
    {
        $allCategories = \App\Models\Category::orderBy('name')->get();
        return view('pages.explore-categories', compact('allCategories'));
    }

    public function books()
    {
        $books = \App\Models\Book::with(['author', 'category'])->paginate(12);
        $sidebarCategories = \App\Models\Category::limit(5)->get();
        $popularBooks = \App\Models\Book::with('author')->limit(5)->get();
        return view('pages.books', compact('books', 'sidebarCategories', 'popularBooks'));
    }

    public function category($slug)
    {
        $category = \App\Models\Category::where('slug', $slug)->firstOrFail();
        $books = \App\Models\Book::where('category_id', $category->id)->with(['author', 'category'])->paginate(12);
        $sidebarCategories = \App\Models\Category::limit(5)->get();
        $popularBooks = \App\Models\Book::with('author')->limit(5)->get();
        return view('pages.books', compact('books', 'sidebarCategories', 'popularBooks', 'category'));
    }

    public function show($id)
    {
        $book = \App\Models\Book::with(['author', 'category'])->findOrFail($id);
        $recommendedBooks = $this->recommendationService->getRelatedBooks($book);
        
        return view('pages.book-show', compact('book', 'recommendedBooks'));
    }
}
