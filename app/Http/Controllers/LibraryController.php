<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $userBooks = auth()->user()->userBooks()->with('book.author')->paginate(12);
        return view('pages.library', compact('userBooks'));
    }

    public function toggle(Request $request, $bookId)
    {
        $user = auth()->user();
        $userBook = $user->userBooks()->where('book_id', $bookId)->first();

        if ($userBook) {
            $userBook->delete();
            return back()->with('success', 'Book removed from your library.');
        } else {
            $user->userBooks()->create([
                'book_id' => $bookId,
                'status' => 'to_read'
            ]);
            return back()->with('success', 'Book added to your library.');
        }
    }

    public function update(Request $request, $id)
    {
        $userBook = auth()->user()->userBooks()->findOrFail($id);
        $request->validate(['status' => 'required|in:to_read,reading,finished']);
        
        $userBook->update(['status' => $request->status]);
        return back()->with('success', 'Status updated.');
    }
}
