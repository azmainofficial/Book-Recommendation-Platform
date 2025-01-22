<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    public function index()
    {
        // Fetch all authors
        return Author::all();
    }

    public function store(Request $request)
    {
        
        // Validate and create an author
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:authors',
            'password' => 'required|string|min:8',
            'bio' => 'nullable|string',
            'profile_img' => 'nullable|string',
        ]);

        $author_imageName = '';
        $imageURL = '';
        if ($request->profile_img) {
            $position = strpos($request->profile_img, ';');
            $sub = substr($request->profile_img, 0, $position);
            $ext = explode('/', $sub)[1];
            $author_imageName = rand(1, 1000) . '_' . $request->name . '.' . $ext;
            $image = str_replace('data:image/' . $ext . ';base64,', '', $request->profile_img);
            $image = str_replace(' ', '+', $image);

            $imagePath = public_path('backend/admin/admin_image/' . $author_imageName);
            if (!File::isDirectory(public_path('backend/admin/admin_image'))) {
                File::makeDirectory(public_path('backend/admin/admin_image'), 0755, true, true);
            }
            File::put($imagePath, base64_decode($image));
            $imageURL = url('backend/admin/admin_image/' . $author_imageName);
        }

        $validated['password'] = Hash::make($validated['password']);

        // Create the author
        $author = Author::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'bio' => $validated['bio'] ?? null,
            'profile_img' => $imageURL,
        ]);
    
        // Return the created author as a response
        return response()->json($author, 201);
    }

    public function show($id)
    {
        // Show specific author
        $author = Author::findOrFail($id);
        return response()->json($author);
    }

    public function update(Request $request, $id)
    {
        // Validate and update an author
        $author = Author::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:authors,email,' . $id,
            'password' => 'sometimes|required|string|min:8',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        }

        $author->update($validated);
        return response()->json($author);
    }

    public function destroy($id)
    {
        // Delete an author
        $author = Author::findOrFail($id);
        $author->delete();
        return response()->json(['message' => 'Author deleted successfully']);
    }
}
