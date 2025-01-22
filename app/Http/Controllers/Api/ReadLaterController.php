<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ReadLater;
use Illuminate\Http\Request;

class ReadLaterController extends Controller
{
    public function index()
    {
        // Fetch all 'read later' entries with related book and user
        return ReadLater::with(['book', 'user'])->get();
    }

    public function store(Request $request)
    {
        // Validate and create a new 'read later' entry
        $validated = $request->validate([
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $readLater = ReadLater::create($validated);
        return response()->json($readLater, 201);
    }

    public function show($id)
    {
        // Show a specific 'read later' entry
        $readLater = ReadLater::with(['book', 'user'])->findOrFail($id);
        return response()->json($readLater);
    }

    public function update(Request $request, $id)
    {
        // Validate and update a 'read later' entry
        $readLater = ReadLater::findOrFail($id);

        $validated = $request->validate([
            'book_id' => 'sometimes|required|exists:books,id',
            'user_id' => 'sometimes|required|exists:users,id',
        ]);

        $readLater->update($validated);
        return response()->json($readLater);
    }

    public function destroy($id)
    {
        // Delete a 'read later' entry
        $readLater = ReadLater::findOrFail($id);
        $readLater->delete();

        return response()->json(['message' => 'Read Later entry deleted successfully']);
    }
}
