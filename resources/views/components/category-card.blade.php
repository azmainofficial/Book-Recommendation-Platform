@props(['category'])
<a href="#" class="swiper-slide card">
    <img class="card__background" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTFjnHhxxEHOsM4-1z7tAXMT5xfOoBvfuJUe6pmK_gai5NzymXyzDnU18GC580rlw0JOHcteaMw53uShr__cNEat95PQeNHPYmsYWiPhFeNufn_iyx6GVQAs4zCEPvaNF47ZlziLjkbOA/s1600/wild.jpg" alt="{{ $category->name }}" width="1920" height="2193" />
    <div class="card__content | flow">
        <div class="card__content--container | flow">
            <h2 class="card__title">{{ $category->name }}</h2>
            <p class="card__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
            </p>
        </div>
        <button class="card__button">Read more</button>
    </div>
</a>
