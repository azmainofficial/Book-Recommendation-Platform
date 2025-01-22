<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Read;
use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function index()
    {
        // Fetch all 'read' entries with related book and user
        return Read::with(['book', 'user'])->get();
    }

    public function store(Request $request)
    {
        // Validate and create a new 'read' entry
        $validated = $request->validate([
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $read = Read::create($validated);
        return response()->json($read, 201);
    }

    public function show($id)
    {
        // Show a specific 'read' entry
        $read = Read::with(['book', 'user'])->findOrFail($id);
        return response()->json($read);
    }

    public function update(Request $request, $id)
    {
        // Validate and update a 'read' entry
        $read = Read::findOrFail($id);

        $validated = $request->validate([
            'book_id' => 'sometimes|required|exists:books,id',
            'user_id' => 'sometimes|required|exists:users,id',
        ]);

        $read->update($validated);
        return response()->json($read);
    }

    public function destroy($id)
    {
        // Delete a 'read' entry
        $read = Read::findOrFail($id);
        $read->delete();

        return response()->json(['message' => 'Read entry deleted successfully']);
    }
}
