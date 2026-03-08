@extends('layouts.admin')

@section('title', 'Manage Books')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="card-title fw-semibold">Book Collection</h5>
                    <a href="{{ route('admin.books.create') }}" class="btn btn-primary">Add New Book</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Id</h6></th>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Cover</h6></th>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Title</h6></th>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Author</h6></th>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Category</h6></th>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Action</h6></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $book)
                            <tr>
                                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $book->id }}</h6></td>
                                <td class="border-bottom-0">
                                    <img src="{{ $book->cover_image ?? asset('assets/images/book-1.png') }}" alt="" class="rounded" style="width: 40px; height: 60px; object-fit: cover;">
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $book->title }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">{{ $book->author->name }}</p>
                                </td>
                                <td class="border-bottom-0">
                                    <span class="badge bg-primary rounded-3 fw-semibold">{{ $book->category->name }}</span>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
