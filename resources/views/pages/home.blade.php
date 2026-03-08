@extends('layouts.master')

@section('content')
<section class="home" id="home">
    <div class="row">
      <div class="content">
        <h3>This Years's Top rated</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
          facere ab delectus quo labore iusto, ipsam rem veniam voluptatum
          itaque.
        </p>
        <a href="./Books.html" class="btn">Show All</a>
      </div>

      <div class="swiper books-slider">
        <div class="swiper-wrapper">
          <a href="#" class="swiper-slide"><img src="{{ asset('assets/images/book1.jfif') }}" alt="" /></a>
          <a href="#" class="swiper-slide"><img src="{{ asset('assets/images/book-2.jpg') }}" alt="" /></a>
          <a href="#" class="swiper-slide"><img src="{{ asset('assets/images/book-3.jpg') }}" alt="" /></a>
          <a href="#" class="swiper-slide"><img src="{{ asset('assets/images/book-4.jpg') }}" alt="" /></a>
          <a href="#" class="swiper-slide"><img src="{{ asset('assets/images/book-5.jpg') }}" alt="" /></a>
          <a href="#" class="swiper-slide"><img src="{{ asset('assets/images/book-6.jpg') }}" alt="" /></a>
        </div>
        <img src="{{ asset('assets/images/stand.png') }}" class="stand" alt="" />
      </div>
    </div>
  </section>

  <!-- home section ense  -->
  <div id="scroll-container">
    <div id="scroll-text">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus itaque,
      hic qui nihil ex incidunt ratione expedita repellat suscipit unde.
    </div>
  </div>

  @if(auth()->check() && count($recommendedBooks) > 0)
  <section class="featured" id="recommended">
    <h1 class="heading"><span>Recommended for You</span></h1>

    <div class="swiper featured-slider">
      <div class="swiper-wrapper">
        @foreach($recommendedBooks as $book)
          <div class="swiper-slide">
            <x-book-card :book="$book" />
          </div>
        @endforeach
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>
  @endif

  <section class="featured" id="featured">
    <h1 class="heading"><span>You might also like</span></h1>

    <div class="swiper featured-slider">
      <div class="swiper-wrapper">
        @foreach($featuredBooks as $book)
          <div class="swiper-slide">
            <x-book-card :book="$book" />
          </div>
        @endforeach
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="d-flex justify-content-center m-4">
      <a href="#" class="btn mt-4">Show All</a>
    </div>
  </section>

  <section class="arrivals" id="arrivals">
    <x-section-header title="Popular Category" />

    <div class="swiper arrivals-slider">
      <div class="swiper-wrapper">
        @foreach($categories as $category)
            <x-category-card :category="$category" />
        @endforeach
      </div>
    </div>

    <div class="swiper arrivals-slider mt-3">
      <div class="swiper-wrapper">
        @foreach($categories as $category)
            <x-category-card :category="$category" />
        @endforeach
      </div>
    </div>

    <div class="d-flex justify-content-center m-4">
      <a href="#" class="btn mt-4">Show All</a>
    </div>
  </section>

  <section class="newsletter">
    <form action="">
      <h3>subscribe for latest updates</h3>
      <input
        type="email"
        name=""
        placeholder="enter your email"
        id=""
        class="box"
      />
      <input type="submit" value="subscribe" class="btn" />
    </form>
  </section>

  <section class="featured" id="featured">
    <x-section-header title="Trending Books" />

    <div class="swiper featured-slider">
      <div class="swiper-wrapper">
        @foreach($featuredBooks as $book)
          <div class="swiper-slide">
            <x-book-card :book="$book" />
          </div>
        @endforeach
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="d-flex justify-content-center m-4">
      <a href="#" class="btn mt-4">Show All</a>
    </div>
  </section>

  <section class="featured top-padding" id="featured">
    <x-section-header title="Editor's Choice" />

    <div class="swiper featured-slider">
      <div class="swiper-wrapper">
        @foreach($featuredBooks as $book)
          <div class="swiper-slide">
            <x-book-card :book="$book" />
          </div>
        @endforeach
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="d-flex justify-content-center m-4">
      <a href="#" class="btn mt-4">Show All</a>
    </div>
  </section>

  <section class="featured" id="featured">
    <x-section-header title="Most Popular Books" />

    <div class="swiper featured-slider">
      <div class="swiper-wrapper">
        @foreach($featuredBooks as $book)
          <div class="swiper-slide">
            <x-book-card :book="$book" />
          </div>
        @endforeach
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="d-flex justify-content-center m-4">
      <a href="#" class="btn mt-4">Show All</a>
    </div>
  </section>

  <section class="deal">
    <div class="content">
      <h3>Find Your Favorite Book</h3>
      <h1>With the Best match</h1>
      <p>
        Good news for you, if you buy any book on Saturday and Sunday you will
        get 50% off and also you will get free delivery.
      </p>
      <a href="#" class="btn">Find Now</a>
    </div>

    <div class="image">
      <img src="{{ asset('assets/images/deal-img.png') }}" alt="" />
    </div>
  </section>

  <section class="reviews" id="reviews">
    <h1 class="heading"><span>Quotes</span></h1>

    <div class="swiper reviews-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide box">
          <img src="{{ asset('assets/images/book-1.png') }}" alt="" />
          <h3>Azmain Sheikh</h3>
          <p>
            The website is very good and responsive, all the books available
            in this website are original and very cheap, you can buy them
            comfortably. Payment can also be done easily.
          </p>
          <div class="stars">-- <span>Life and Art</span></div>
        </div>
        <div class="swiper-slide box">
          <img src="{{ asset('assets/images/book-2.png') }}" alt="" />
          <h3>Azmain Sheikh</h3>
          <p>
            The website is very good and responsive, all the books available
            in this website are original and very cheap, you can buy them
            comfortably. Payment can also be done easily.
          </p>
          <div class="stars">-- <span>Life and Art</span></div>
        </div>
        <div class="swiper-slide box">
          <img src="{{ asset('assets/images/book-3.png') }}" alt="" />
          <h3>Azmain Sheikh</h3>
          <p>
            The website is very good and responsive, all the books available
            in this website are original and very cheap, you can buy them
            comfortably. Payment can also be done easily.
          </p>
          <div class="stars">-- <span>Life and Art</span></div>
        </div>
        <div class="swiper-slide box">
          <img src="{{ asset('assets/images/book-4.png') }}" alt="" />
          <h3>Azmain Sheikh</h3>
          <p>
            The website is very good and responsive, all the books available
            in this website are original and very cheap, you can buy them
            comfortably. Payment can also be done easily.
          </p>
          <div class="stars">-- <span>Life and Art</span></div>
        </div>
      </div>
    </div>
  </section>

@endsection