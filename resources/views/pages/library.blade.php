@extends('layouts.master')

@section('title', 'My Library')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="heading"><span>My Library</span></h1>
        
        <div class="row">
            @forelse($userBooks as $userBook)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $userBook->book->cover_image ?? asset('assets/images/book-1.png') }}" class="card-img-top" alt="{{ $userBook->book->title }}">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">{{ $userBook->book->title }}</h5>
                            <p class="card-text text-muted small">by {{ $userBook->book->author->name }}</p>
                            
                            <form action="{{ route('library.update', $userBook->id) }}" method="POST" class="mt-3">
                                @csrf
                                @method('PATCH')
                                <select name="status" class="form-select form-select-sm mb-2" onchange="this.form.submit()">
                                    <option value="to_read" {{ $userBook->status == 'to_read' ? 'selected' : '' }}>To Read</option>
                                    <option value="reading" {{ $userBook->status == 'reading' ? 'selected' : '' }}>Reading</option>
                                    <option value="finished" {{ $userBook->status == 'finished' ? 'selected' : '' }}>Finished</option>
                                </select>
                            </form>
                            
                            <form action="{{ route('library.toggle', $userBook->book->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-link text-danger text-decoration-none">Remove</button>
                            </form>
                        </div>
                        <div class="card-footer bg-white border-top-0 d-grid">
                            <a href="{{ route('book.show', $userBook->book->id) }}" class="btn btn-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="lead text-muted">Your library is empty. Start exploring books!</p>
                    <a href="{{ route('books') }}" class="btn btn-primary">Browse Books</a>
                </div>
            @endforelse
        </div>
        
        <div class="mt-4 d-flex justify-content-center">
            {{ $userBooks->links() }}
        </div>
    </div>
</section>
@endsection
