@extends('layouts.master')

@section('title', 'All Books')

@section('content')
<section class="search-result">
    <div class="container">
        <div class="search-result-container">
            <h1 class="title p-5">Explore :<span> Our Collection</span></h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="row mt-4">
                    @foreach($books as $book)
                        <div class="col-12 col-sm-6 col-lg-4 mb-4">
                            <x-book-card :book="$book" />
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    {{ $books->links() }}
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="row p-4">
                    <div class="top-category">
                        <div class="title">
                            Top Categories
                        </div>
                        <ul>
                            @foreach($sidebarCategories as $category)
                                <li><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="most-popular">
                        <div class="title">
                            Most Popular Books
                        </div>
                        <ul>
                            @foreach($popularBooks as $pBook)
                                <li>
                                    <a href="{{ route('book.show', $pBook->id) }}">
                                        <img src="{{ $pBook->cover_image ?? asset('assets/images/book-1.png') }}">
                                        <div class="book-details">
                                            <h5 class="book-name">{{ $pBook->title }}</h5>
                                            <div class="writer-name">{{ $pBook->author->name }}</div>
                                            <div>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fas fa-star-half-alt" style="color: #FFD43B"></i>
                                                <span>9.7</span>/10
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
