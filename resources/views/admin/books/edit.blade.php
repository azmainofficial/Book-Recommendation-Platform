@extends('layouts.admin')

@section('title', 'Edit Book')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Edit Book: {{ $book->title }}</h5>
        <form action="{{ route('admin.books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
            </div>
            <div class="mb-3">
                <label for="author_id" class="form-label">Author</label>
                <select class="form-select" id="author_id" name="author_id" required>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5">{{ $book->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover Image URL</label>
                <input type="text" class="form-control" id="cover_image" name="cover_image" value="{{ $book->cover_image }}">
            </div>
            <div class="mb-3">
                <label for="published_at" class="form-label">Published At</label>
                <input type="date" class="form-control" id="published_at" name="published_at" value="{{ $book->published_at ? $book->published_at->format('Y-m-d') : '' }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Book</button>
            <a href="{{ route('admin.books.index') }}" class="btn btn-outline-secondary ms-2">Cancel</a>
        </form>
    </div>
</div>
@endsection
