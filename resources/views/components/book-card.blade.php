@props(['book'])

<div class="product-grid">
    <div class="product-image">
        <a href="{{ route('book.show', $book->id) }}" class="image">
            <img src="{{ $book->cover_image ?? asset('assets/images/book-1.png') }}" />
        </a>
        <span class="product-discount-label">NEW</span>
        <ul class="product-links">
            <li><a href="{{ route('book.show', $book->id) }}"><i class="fa fa-search"></i></a></li>
            <li><a href="#"><i class="fa fa-heart"></i></a></li>
        </ul>
        <a href="{{ route('book.show', $book->id) }}" class="add-to-cart">Read</a>
    </div>
    <div class="product-content">
        <h3 class="title"><a href="{{ route('book.show', $book->id) }}">{{ $book->title }}</a></h3>
        <div class="price">{{ $book->author->name }}</div>
        <div>
            <i class="fa fa-star" style="color: #ffd43b"></i>
            <i class="fa fa-star" style="color: #ffd43b"></i>
            <i class="fa fa-star" style="color: #ffd43b"></i>
            <i class="fa fa-star" style="color: #ffd43b"></i>
            <i class="fas fa-star-half-alt" style="color: #ffd43b"></i>
            <span>9.7</span>/10
        </div>
        <div>
            Total View: <span class="font-weight-bold">1,00,000</span>
        </div>
    </div>
</div>
