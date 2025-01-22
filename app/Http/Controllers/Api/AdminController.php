<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch all admins
        return Admin::all();
    }

    public function store(Request $request)
    {

        // Validate and create an admin
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|confirmed|min:8',
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

            $imagePath = public_path('backend/admin/admin_image/' . $admin_imageName);
            if (!File::isDirectory(public_path('backend/admin/admin_image'))) {
                File::makeDirectory(public_path('backend/admin/admin_image'), 0755, true, true);
            }
            File::put($imagePath, base64_decode($image));
            $imageURL = url('backend/admin/admin_image/' . $admin_imageName);
        }

        $admin = Admin::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'bio' => $validated['bio'] ?? null,
            'profile_img' => $imageURL,
        ]);
        return response()->json($admin, 201);
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $admin = Admin::where('email', $validated['email'])->first();
        if (!$admin || !Hash::check($validated['password'], $admin->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        return response()->json([
            'message' => 'Login successful',
            'admin' => $admin,
        ]);
    }

    public function show($id)
    {
        // Show specific admin
        $admin = Admin::findOrFail($id);
        return response()->json($admin);
    }

    public function update(Request $request, $id)
    {
        // Validate and update an admin
        $admin = Admin::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:admins,email,' . $id,
            'password' => 'sometimes|required|string|min:8',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        }

        $admin->update($validated);
        return response()->json($admin);
    }

    public function destroy($id)
    {
        // Delete an admin
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return response()->json(['message' => 'Admin deleted successfully']);
    }
}
