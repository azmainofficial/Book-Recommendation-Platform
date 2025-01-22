<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users
        return User::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'bio' => 'nullable|string',
            'profile_img' => 'nullable|string',
        ]);


        $admin_imageName = '';
        $imageURL = '';
        if ($request->profile_img) {
            $position = strpos($request->profile_img, ';');
            $sub = substr($request->profile_img, 0, $position);
            $ext = explode('/', $sub)[1];
            $admin_imageName = rand(1, 1000) . '_' . $request->name . '.' . $ext;
            $image = str_replace('data:image/' . $ext . ';base64,', '', $request->profile_img);
            $image = str_replace(' ', '+', $image);

            $imagePath = public_path('backend/user/user_image/' . $admin_imageName);
            if (!File::isDirectory(public_path('backend/user/user_image/'))) {
                File::makeDirectory(public_path('backend/user/user_image/'), 0755, true, true);
            }
            File::put($imagePath, base64_decode($image));
            $imageURL = url('backend/user/user_image/' . $admin_imageName);
        }

        // Hash the password
        $validated['password'] = Hash::make($validated['password']);

        // Create the user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'bio' => $validated['bio'] ?? null,
            'profile_img' => $imageURL,
        ]);
        return response()->json($user, 201);
    }

    public function show($id)
    {
        // Show specific user
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        // Validate and update a user
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'sometimes|required|string|min:8',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        }

        $user->update($validated);
        return response()->json($user);
    }

    public function destroy($id)
    {
        // Delete a user
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        $user = User::where('email', $validated['email'])->first();
        if (!$user || !Hash::check($validated['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
            'user' => $user,
            'message' => 'Login successful!',
        ]);
    }
}
