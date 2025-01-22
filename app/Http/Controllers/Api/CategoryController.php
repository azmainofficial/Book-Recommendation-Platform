<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::all(), 200);
    }

    public function store(Request $request)
    {

        $request->validate([
            'categoryName' => 'required|string|max:255',
            'relatableId' => 'required|integer',
            'image' => 'required|string',
        ]);

        $category = new Category();
        $imageName = '';
        if ($request->image) {
            $position = strpos($request->image, ';');
            $sub = substr($request->image, 0, $position);
            $ext = explode('/', $sub)[1];
            $imageName = rand(1, 1000) . '_' . $request->name . '.' . $ext;
            $image = str_replace('data:image/' . $ext . ';base64,', '', $request->image);
            $image = str_replace(' ', '+', $image);

            $imagePath = public_path('backend/images/users/' . $imageName);
            if (!File::isDirectory(public_path('backend/images/users'))) {
                File::makeDirectory(public_path('backend/images/users'), 0755, true, true);
            }
            File::put($imagePath, base64_decode($image));
            $category->image = $imageName;
        }

        $category->category_name = $request['categoryName'];
        $category->relatable_id = $request['relatableId'];
        $category->save();

        // Save the category data
        // $category = Category::create([
        //     'category_name' => $request['categoryName'],
        //     'relatable_id' => $request['relatableId'],
        //     'image' => $imagePath ?? null,
        // ]);

        return response()->json(['message' => 'Category created successfully', 'category' => $category], 201);
    }


    public function show($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }
        return response()->json($category, 200);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $request->validate([
            'category_name' => 'required|string|max:255',
            'relatable_id' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
        ]);

        $imagePath = $category->image; // Preserve the current image path
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('categories', 'public');
        }

        $category->update([
            'category_name' => $request->category_name,
            'relatable_id' => $request->relatable_id,
            'image' => $imagePath,
        ]);

        return response()->json($category, 200);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        // Delete the image file if exists
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();
        return response()->json(['message' => 'Category deleted successfully'], 200);
    }
}
