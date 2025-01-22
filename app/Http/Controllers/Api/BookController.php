<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {

        $books = Book::with(['author', 'categories', 'ratings'])->get();
        return response()->json($books, 200);
    }
    public function searchbook(Request $request)
    {
        $query = $request->input('search');
        if (empty($query)) {
            return response()->json(['message' => 'No query provided'], 400);
        }
        
        $books = Book::where(function ($q) use ($query) {
            $q->where('series', 'like', '%' . $query . '%')
              ->orWhere('title', 'like', '%' . $query . '%')
              ->orWhere('sub_title', 'like', '%' . $query . '%');
        })
        ->orWhereHas('author', function ($q) use ($query) {
            $q->where('name', 'like', '%' . $query . '%');
        })
        ->with('author')
        ->get();
        $value = Cookie::get('user_name'); 
        
        

        return response()->json($books,200);
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'series' => 'nullable|string',
            'title' => 'required|string',
            'sub_title' => 'nullable|string',
            'author_id' => 'required|exists:authors,id',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
            'img_url' => 'nullable',
            'pdf_url' => 'required',
            'language' => 'required|string',
            'bio' => 'nullable|string',
            'page' => 'required|integer',
            'publish_date' => 'required|date',
        ]);

        $doctor_imageName = '';
        $imageURL = '';
        if ($request->img_url) {
            $position = strpos($request->img_url, ';');
            $sub = substr($request->img_url, 0, $position);
            $ext = explode('/', $sub)[1];
            $doctor_imageName = rand(1, 1000) . '_' . $request->title . '.' . $ext;
            $image = str_replace('data:image/' . $ext . ';base64,', '', $request->img_url);
            $image = str_replace(' ', '+', $image);

            $imagePath = public_path('backend/images/doctor_image/' . $doctor_imageName);
            if (!File::isDirectory(public_path('backend/images/doctor_image'))) {
                File::makeDirectory(public_path('backend/images/doctor_image'), 0755, true, true);
            }
            File::put($imagePath, base64_decode($image));
            $imageURL = url('backend/images/doctor_image/' . $doctor_imageName);
        }

        $pdfFileName = '';
        $doctor_signatureImageURL = '';

        if ($request->pdf_url) {
            $position = strpos($request->pdf_url, ';');
            $sub = substr($request->pdf_url, 0, $position);
            $ext = explode('/', $sub)[1];

            if ($ext !== 'pdf') {
                return response()->json(['error' => 'Uploaded file is not a valid PDF.'], 400);
            }
            $pdfFileName = rand(1, 1000) . '_' . $request->title . '.' . $ext;
            $pdfData = str_replace('data:application/' . $ext . ';base64,', '', $request->pdf_url);
            $pdfData = str_replace(' ', '+', $pdfData);
            $pdfPath = public_path('backend/pdfs/doctor_signature/' . $pdfFileName);
            if (!File::isDirectory(public_path('backend/pdfs/doctor_signature'))) {
                File::makeDirectory(public_path('backend/pdfs/doctor_signature'), 0755, true, true);
            }
            File::put($pdfPath, base64_decode($pdfData));
            $doctor_signatureImageURL = url('backend/pdfs/doctor_signature/' . $pdfFileName);
        }



        $book = Book::create([
            'series' => $validated['series'],
            'title' => $validated['title'],
            'sub_title' => $validated['sub_title'],
            'author_id' => $validated['author_id'],
            'img_url' => $imageURL,
            'pdf_url' => $doctor_signatureImageURL,
            'language' => $validated['language'],
            'bio' => $validated['bio'],
            'pages' => $validated['page'],
            'publish_date' => $validated['publish_date'],
        ]);

        $book->categories()->attach($validated['categories']);

        return response()->json(['message' => 'Book created successfully', 'book' => $book], 201);
    }

    public function show($id)
    {
        // Show specific book with related author and category
        $book = Book::with(['author', 'categories', 'ratings'])->findOrFail($id);
        $categories_book = Book::with('ratings', 'author')->where('id', $book->id)->get();
        // return $categories_book;
        return response()->json([
            'book' => $book,
            'categories_book' => $categories_book,
            'status' => 200
        ]);
    }

    public function update(Request $request, $id)
    {
        // Find the book
        $book = Book::findOrFail($id);

        // Validate the request data
        $validated = $request->validate([
            'series' => 'nullable|string|max:255',
            'title' => 'sometimes|required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'author_id' => 'sometimes|required|exists:authors,id',
            'category_id' => 'sometimes|required|exists:categories,id',
            'img_url' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Max 2MB
            'pdf_url' => 'nullable|file|mimes:pdf|max:10240', // Max 10MB
            'language' => 'sometimes|required|string|max:255',
            'bio' => 'nullable|string',
            'pages' => 'sometimes|required|integer|min:1',
            'publish_date' => 'sometimes|required|date',
            'total_view' => 'nullable|integer|min:0',
        ]);



        // Handle PDF upload
        if ($request->hasFile('pdf_url')) {
            // Delete the old PDF if it exists
            if ($book->pdf_url) {
                Storage::delete(str_replace('/storage/', 'public/', $book->pdf_url));
            }

            $pdfPath = $request->file('pdf_url')->store('public/book-pdfs');
            $validated['pdf_url'] = Storage::url($pdfPath); // Accessible path
        }

        // Update the book
        $book->update($validated);

        return response()->json($book);
    }

    public function destroy($id)
    {
        // Find the book
        $book = Book::findOrFail($id);

        // Delete associated files
        if ($book->img_url) {
            Storage::delete(str_replace('/storage/', 'public/', $book->img_url));
        }
        if ($book->pdf_url) {
            Storage::delete(str_replace('/storage/', 'public/', $book->pdf_url));
        }

        // Delete the book
        $book->delete();

        return response()->json(['message' => 'Book deleted successfully']);
    }
}
