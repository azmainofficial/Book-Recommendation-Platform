<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserTracking;
use Illuminate\Http\Request;

class UserTrackingController extends Controller
{
    public function index()
    {
        // Fetch all user tracking records with related book and user
        return UserTracking::with(['book', 'user'])->get();
    }

    public function store(Request $request)
    {
        // Validate and create a new user tracking record
        $validated = $request->validate([
            'book_id' => 'nullable|exists:books,id',
            'user_id' => 'nullable|exists:users,id',
            'type' => 'required|string|max:255',
            'keyword' => 'nullable|string|max:255',
            'language' => 'required|string|max:255',
        ]);

        $userTracking = UserTracking::create($validated);
        return response()->json($userTracking, 201);
    }

    public function show($id)
    {
        // Show a specific user tracking record
        $userTracking = UserTracking::with(['book', 'user'])->findOrFail($id);
        return response()->json($userTracking);
    }

    public function update(Request $request, $id)
    {
        // Validate and update a user tracking record
        $userTracking = UserTracking::findOrFail($id);

        $validated = $request->validate([
            'book_id' => 'nullable|exists:books,id',
            'user_id' => 'sometimes|required|exists:users,id',
            'type' => 'sometimes|required|string|max:255',
            'keyword' => 'nullable|string|max:255',
            'language' => 'sometimes|required|string|max:255',
        ]);

        $userTracking->update($validated);
        return response()->json($userTracking);
    }

    public function destroy($id)
    {
        // Delete a user tracking record
        $userTracking = UserTracking::findOrFail($id);
        $userTracking->delete();

        return response()->json(['message' => 'User tracking record deleted successfully']);
    }
}
