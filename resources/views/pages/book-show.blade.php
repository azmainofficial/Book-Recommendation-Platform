@extends('layouts.master')

@section('title', $book->title)

@section('content')
<section class="single-book py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 left">
                <div class="book-cover">
                    <img src="{{ $book->cover_image ?? asset('assets/images/book-1.png') }}" alt="{{ $book->title }}" class="img-fluid rounded shadow">
                </div>
                <div class="read-now mt-3">
                    <button class="btn btn-primary w-100">Read Now</button>
                </div>
                <div class="download-now mt-2">
                    <button class="btn btn-outline-secondary w-100">Download PDF</button>
                </div>
                <div class="rate-title px-4 mt-4">
                    Rate this Book
                </div>
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" /><label for="star5">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" /><label for="star4">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" /><label for="star3">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" /><label for="star2">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" /><label for="star1">1 star</label>
                </div>
            </div>
            <div class="col-12 col-md-8 offset-md-1 right">
                <div class="single-book-info">
                    <div class="series-title text-muted mb-2"># {{ $book->category->name }}</div>
                    <div class="Book-title h2 fw-bold d-flex justify-content-between align-items-center">
                        {{ $book->title }}
                        @auth
                            <form action="{{ route('library.toggle', $book->id) }}" method="POST">
                                @csrf
                                @php
                                    $inLibrary = auth()->user()->userBooks()->where('book_id', $book->id)->first();
                                @endphp
                                <button type="submit" class="btn {{ $inLibrary ? 'btn-danger' : 'btn-outline-danger' }} btn-sm">
                                    <i class="fa {{ $inLibrary ? 'fa-minus' : 'fa-plus' }} me-1"></i> 
                                    {{ $inLibrary ? 'Remove from Library' : 'Add to Library' }}
                                </button>
                            </form>
                        @else
                            <button class="btn btn-outline-danger btn-sm login-btn">
                                <i class="fa fa-plus me-1"></i> Add to Library
                            </button>
                        @endauth
                    </div>
                    <div class="author-link mt-2"> By <a href="#" class="text-decoration-none">{{ $book->author->name }}</a></div>
                    
                    <div class="book-basic-info mt-4">
                        <div class="d-flex gap-4 align-items-center flex-wrap">
                            <div class="book-ratings">
                                Rating :
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                                <span class="fw-bold"> - 4.5</span>
                            </div>
                            <div class="book-rate-count">Total Rated : <span class="fw-bold"> 1,992 </span> </div>
                            <div class="book-read-count"> Total Readers : <span class="fw-bold"> 65,490 </span></div>
                        </div>

                        <div class="genres mt-4">
                            <span class="d-block fw-bold mb-2">Category</span>
                            <div class="content">
                                <a href="{{ route('category', $book->category->slug) }}" class="btn btn-sm btn-outline-primary border-radius-20">{{ $book->category->name }}</a>
                            </div>
                        </div>

                        <div class="short-description mt-4">
                            <span class="d-block fw-bold mb-2">About the book</span>
                            <p class="text-secondary lead">{{ $book->description }}</p>
                        </div>

                        <div class="d-flex gap-4 mt-4 flex-wrap">
                            <div class="book-page-count d-flex align-items-center">
                                <i class="fa fa-book-open me-2 text-primary"></i>
                                <span> 490 Pages</span>
                            </div>
                            <div class="book-publish-date d-flex align-items-center">
                                <i class="fa fa-calendar-alt me-2 text-primary"></i>
                                <span> {{ $book->published_at ? $book->published_at->format('M d Y') : 'May 1 2024' }}</span>
                            </div>
                            <div class="book-language d-flex align-items-center">
                                <i class="fa fa-globe me-2 text-primary"></i>
                                <span> English</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <hr>
        <div class="author py-4">
            <div class="h4 fw-bold mb-4">Author</div>
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div class="author-info d-flex align-items-center">
                    <div class="author-image">
                        <img src="{{ $book->author->image ?? 'https://i.pinimg.com/736x/89/59/17/895917b5f6c695ebbc7ec2b9da2a4038.jpg' }}" alt="{{ $book->author->name }}" class="rounded-circle shadow" width="80" height="80">
                    </div>
                    <div class="ms-4">
                        <div class="author-name h5 fw-bold mb-1">{{ $book->author->name }}</div>
                        <div class="author-count text-muted">
                            <span>90</span> Books <span class="mx-1"> . </span>
                            <span>490</span> Followers
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-pill px-4">Follow</a>
            </div>
            <div class="mt-3">
                <p class="text-secondary">{{ $book->author->bio }}</p>
            </div>
        </div>
        <hr>
        
        <div class="recommend py-4">
            <div class="h4 fw-bold mb-4">Recommended Books</div>
            <div class="swiper featured-slider">
                <div class="swiper-wrapper">
                    @foreach($recommendedBooks as $rBook)
                        <div class="swiper-slide">
                            <x-book-card :book="$rBook" />
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        
        <hr>
        
        <div class="review py-4">
            <div class="h4 fw-bold mb-4">Discussions</div>
            <div class="comment-section">
                <!-- Comment Input Form -->
                <div class="comment-form d-flex gap-3 mb-5">
                    <img src="https://i.pinimg.com/736x/89/59/17/895917b5f6c695ebbc7ec2b9da2a4038.jpg" alt="Profile" class="rounded-circle" width="50" height="50">
                    <div class="flex-grow-1">
                        <textarea class="form-control mb-2" rows="3" placeholder="Write a comment..."></textarea>
                        <button class="btn btn-primary px-4">Post</button>
                    </div>
                </div>
                
                <div class="text-center text-muted py-4">
                    <p>No discussions yet. Be the first to start the conversation!</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
