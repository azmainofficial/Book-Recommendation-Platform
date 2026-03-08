<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function booksIndex()
    {
        $books = \App\Models\Book::with(['author', 'category'])->paginate(10);
        return view('admin.books.index', compact('books'));
    }

    public function booksCreate()
    {
        $authors = \App\Models\Author::all();
        $categories = \App\Models\Category::all();
        return view('admin.books.create', compact('authors', 'categories'));
    }

    public function booksStore(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|string', 
            'published_at' => 'nullable|date',
        ]);

        \App\Models\Book::create($data);

        return redirect()->route('admin.books.index')->with('success', 'Book created successfully.');
    }

    public function booksEdit($id)
    {
        $book = \App\Models\Book::findOrFail($id);
        $authors = \App\Models\Author::all();
        $categories = \App\Models\Category::all();
        return view('admin.books.edit', compact('book', 'authors', 'categories'));
    }

    public function booksUpdate(Request $request, $id)
    {
        $book = \App\Models\Book::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|string',
            'published_at' => 'nullable|date',
        ]);

        $book->update($data);

        return redirect()->route('admin.books.index')->with('success', 'Book updated successfully.');
    }

    public function booksDestroy($id)
    {
        $book = \App\Models\Book::findOrFail($id);
        $book->delete();
        return redirect()->route('admin.books.index')->with('success', 'Book deleted successfully.');
    }

    public function usersIndex()
    {
        $users = \App\Models\User::paginate(10);
        return view('admin.users.index', compact('users'));
    }}
