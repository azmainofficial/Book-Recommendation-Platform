<template>
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
                <swiper modules="[Navigation, Pagination]" :slides-per-view="3" :space-between="5" 
                :loop="true" @swiper="onSwiper" @slideChange="onSlideChange" :autoplay="{
                    delay: 2000,
                    disableOnInteraction: false
                }">
                    <swiper-slide class="swiper-slide  m-3"><img src="../../../../public/user/image/book1.jfif" alt="" width="180px" height="280px"/></swiper-slide>
                    <swiper-slide  class="swiper-slide m-3"><img src="../../../../public/user/image/book-2.jpg" alt="" width="180px" height="280px"/></swiper-slide>
                    <swiper-slide class="swiper-slide m-3"><img src="../../../../public/user/image/book-3.jpg" alt="" width="180px" height="280px"/></swiper-slide>
                    <swiper-slide  class="swiper-slide  m-3"><img src="../../../../public/user/image/book-4.jpg" alt="" width="180px" height="280px"/></swiper-slide>
                    <swiper-slide class="swiper-slide  m-3"><img src="../../../../public/user/image/book-6.jpg" alt="" width="180px" height="280px"/></swiper-slide>
                    <swiper-slide  class="swiper-slide  m-3"><img src="../../../../public/user/image/book-5.jpg" alt="" width="180px" height="280px"/></swiper-slide>
                </swiper>
                <img src="../../../../public/user/image/stand.png" class="stand" alt="" />
            </div>
        </div>
    </section>
    <div id="scroll-container">
        <div id="scroll-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus itaque,
            hic qui nihil ex incidunt ratione expedita repellat suscipit unde.
        </div>
    </div>


    <section class="featured" id="featured">
        <h1 class="heading"><span>You might also like</span></h1>

        <div class="swiper featured-slider">
            <swiper modules="[Navigation, Pagination]" :slides-per-view="7" :space-between="10" :navigation="true"
                :loop="true" :breakpoints="{
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 40,
                    },
                    1440: {
                        slidesPerView: 7,
                        spaceBetween: 15,
                    }
                }" 
                :autoplay="{
                    delay: 4000,
                    disableOnInteraction: false
                }"
                @swiper="onSwiper" @slideChange="onSlideChange">

                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-2.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-3.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-4.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-5.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-6.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-2.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book1.jfif" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-3.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-4.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-5.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-6.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
            </swiper>
        </div>

        <div class="d-flex justify-content-center m-4">
            <a href="#" class="btn mt-4">Show All</a>
        </div>
    </section>

    <section class="arrivals" id="arrivals">
        <h1 class="heading"><span>Popular Category</span></h1>

        <div class="arrivals-slider">
            <swiper modules="[Navigation, Pagination]" :slides-per-view="7" :space-between="5"
                :loop="true" :breakpoints="{
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 1,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 2,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 3,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 4,
                    },
                    1440: {
                        slidesPerView: 7,
                        spaceBetween: 5,
                    }
                }" :autoplay="{
                    delay: 4000,
                    disableOnInteraction: false
                }" @swiper="onSwiper" @slideChange="onSlideChange"
                >
                <swiper-slide href="#" class=" card">
                    <img class="card__background" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTFjnHhxxEHOsM4-1z7tAXMT5xfOoBvfuJUe6pmK_gai5NzymXyzDnU18GC580rlw0JOHcteaMw53uShr__cNEat95PQeNHPYmsYWiPhFeNufn_iyx6GVQAs4zCEPvaNF47ZlziLjkbOA/s1600/wild.jpg
            " width="1920" height="2193" />
                    <div class="card__content | flow">
                        <div class="card__content--container | flow">
                            <h2 class="card__title">Adventure</h2>
                            <p class="card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Rerum in
                            </p>
                        </div>
                        <button class="card__button">Read more</button>
                    </div>
                </swiper-slide>
                <swiper-slide href="#" class=" card">
                    <img class="card__background" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTFjnHhxxEHOsM4-1z7tAXMT5xfOoBvfuJUe6pmK_gai5NzymXyzDnU18GC580rlw0JOHcteaMw53uShr__cNEat95PQeNHPYmsYWiPhFeNufn_iyx6GVQAs4zCEPvaNF47ZlziLjkbOA/s1600/wild.jpg
            " width="1920" height="2193" />
                    <div class="card__content | flow">
                        <div class="card__content--container | flow">
                            <h2 class="card__title">Adventure</h2>
                            <p class="card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Rerum in
                            </p>
                        </div>
                        <button class="card__button">Read more</button>
                    </div>
                </swiper-slide>
                <swiper-slide href="#" class=" card">
                    <img class="card__background" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTFjnHhxxEHOsM4-1z7tAXMT5xfOoBvfuJUe6pmK_gai5NzymXyzDnU18GC580rlw0JOHcteaMw53uShr__cNEat95PQeNHPYmsYWiPhFeNufn_iyx6GVQAs4zCEPvaNF47ZlziLjkbOA/s1600/wild.jpg
            " width="1920" height="2193" />
                    <div class="card__content | flow">
                        <div class="card__content--container | flow">
                            <h2 class="card__title">Adventure</h2>
                            <p class="card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Rerum in
                            </p>
                        </div>
                        <button class="card__button">Read more</button>
                    </div>
                </swiper-slide>
                <swiper-slide href="#" class=" card">
                    <img class="card__background" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTFjnHhxxEHOsM4-1z7tAXMT5xfOoBvfuJUe6pmK_gai5NzymXyzDnU18GC580rlw0JOHcteaMw53uShr__cNEat95PQeNHPYmsYWiPhFeNufn_iyx6GVQAs4zCEPvaNF47ZlziLjkbOA/s1600/wild.jpg
            " width="1920" height="2193" />
                    <div class="card__content | flow">
                        <div class="card__content--container | flow">
                            <h2 class="card__title">Adventure</h2>
                            <p class="card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Rerum in
                            </p>
                        </div>
                        <button class="card__button">Read more</button>
                    </div>
                </swiper-slide>
                <swiper-slide href="#" class=" card">
                    <img class="card__background" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTFjnHhxxEHOsM4-1z7tAXMT5xfOoBvfuJUe6pmK_gai5NzymXyzDnU18GC580rlw0JOHcteaMw53uShr__cNEat95PQeNHPYmsYWiPhFeNufn_iyx6GVQAs4zCEPvaNF47ZlziLjkbOA/s1600/wild.jpg
            " width="1920" height="2193" />
                    <div class="card__content | flow">
                        <div class="card__content--container | flow">
                            <h2 class="card__title">Adventure</h2>
                            <p class="card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Rerum in
                            </p>
                        </div>
                        <button class="card__button">Read more</button>
                    </div>
                </swiper-slide>
                <swiper-slide href="#" class=" card">
                    <img class="card__background" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTFjnHhxxEHOsM4-1z7tAXMT5xfOoBvfuJUe6pmK_gai5NzymXyzDnU18GC580rlw0JOHcteaMw53uShr__cNEat95PQeNHPYmsYWiPhFeNufn_iyx6GVQAs4zCEPvaNF47ZlziLjkbOA/s1600/wild.jpg
            " width="1920" height="2193" />
                    <div class="card__content | flow">
                        <div class="card__content--container | flow">
                            <h2 class="card__title">Adventure</h2>
                            <p class="card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Rerum in
                            </p>
                        </div>
                        <button class="card__button">Read more</button>
                    </div>
                </swiper-slide>
            </swiper>
        </div>

        <div class="arrivals-slider mt-3">
            <swiper modules="[Navigation, Pagination]" :slides-per-view="7" :space-between="5"
                :loop="true" :breakpoints="{
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 1,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 2,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 3,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 4,
                    },
                    1440: {
                        slidesPerView: 7,
                        spaceBetween: 5,
                    }
                }" :autoplay="{
                    delay: 4000,
                    disableOnInteraction: false
                }" @swiper="onSwiper" @slideChange="onSlideChange"
                >
                <swiper-slide href="#" class=" card">
                    <img class="card__background" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTFjnHhxxEHOsM4-1z7tAXMT5xfOoBvfuJUe6pmK_gai5NzymXyzDnU18GC580rlw0JOHcteaMw53uShr__cNEat95PQeNHPYmsYWiPhFeNufn_iyx6GVQAs4zCEPvaNF47ZlziLjkbOA/s1600/wild.jpg
            " width="1920" height="2193" />
                    <div class="card__content | flow">
                        <div class="card__content--container | flow">
                            <h2 class="card__title">Adventure</h2>
                            <p class="card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Rerum in
                            </p>
                        </div>
                        <button class="card__button">Read more</button>
                    </div>
                </swiper-slide>
                <swiper-slide href="#" class=" card">
                    <img class="card__background" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTFjnHhxxEHOsM4-1z7tAXMT5xfOoBvfuJUe6pmK_gai5NzymXyzDnU18GC580rlw0JOHcteaMw53uShr__cNEat95PQeNHPYmsYWiPhFeNufn_iyx6GVQAs4zCEPvaNF47ZlziLjkbOA/s1600/wild.jpg
            " width="1920" height="2193" />
                    <div class="card__content | flow">
                        <div class="card__content--container | flow">
                            <h2 class="card__title">Adventure</h2>
                            <p class="card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Rerum in
                            </p>
                        </div>
                        <button class="card__button">Read more</button>
                    </div>
                </swiper-slide>
                <swiper-slide href="#" class=" card">
                    <img class="card__background" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTFjnHhxxEHOsM4-1z7tAXMT5xfOoBvfuJUe6pmK_gai5NzymXyzDnU18GC580rlw0JOHcteaMw53uShr__cNEat95PQeNHPYmsYWiPhFeNufn_iyx6GVQAs4zCEPvaNF47ZlziLjkbOA/s1600/wild.jpg
            " width="1920" height="2193" />
                    <div class="card__content | flow">
                        <div class="card__content--container | flow">
                            <h2 class="card__title">Adventure</h2>
                            <p class="card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Rerum in
                            </p>
                        </div>
                        <button class="card__button">Read more</button>
                    </div>
                </swiper-slide>
                <swiper-slide href="#" class=" card">
                    <img class="card__background" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTFjnHhxxEHOsM4-1z7tAXMT5xfOoBvfuJUe6pmK_gai5NzymXyzDnU18GC580rlw0JOHcteaMw53uShr__cNEat95PQeNHPYmsYWiPhFeNufn_iyx6GVQAs4zCEPvaNF47ZlziLjkbOA/s1600/wild.jpg
            " width="1920" height="2193" />
                    <div class="card__content | flow">
                        <div class="card__content--container | flow">
                            <h2 class="card__title">Adventure</h2>
                            <p class="card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Rerum in
                            </p>
                        </div>
                        <button class="card__button">Read more</button>
                    </div>
                </swiper-slide>
                <swiper-slide href="#" class=" card">
                    <img class="card__background" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTFjnHhxxEHOsM4-1z7tAXMT5xfOoBvfuJUe6pmK_gai5NzymXyzDnU18GC580rlw0JOHcteaMw53uShr__cNEat95PQeNHPYmsYWiPhFeNufn_iyx6GVQAs4zCEPvaNF47ZlziLjkbOA/s1600/wild.jpg
            " width="1920" height="2193" />
                    <div class="card__content | flow">
                        <div class="card__content--container | flow">
                            <h2 class="card__title">Adventure</h2>
                            <p class="card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Rerum in
                            </p>
                        </div>
                        <button class="card__button">Read more</button>
                    </div>
                </swiper-slide>
                <swiper-slide href="#" class=" card">
                    <img class="card__background" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTFjnHhxxEHOsM4-1z7tAXMT5xfOoBvfuJUe6pmK_gai5NzymXyzDnU18GC580rlw0JOHcteaMw53uShr__cNEat95PQeNHPYmsYWiPhFeNufn_iyx6GVQAs4zCEPvaNF47ZlziLjkbOA/s1600/wild.jpg
            " width="1920" height="2193" />
                    <div class="card__content | flow">
                        <div class="card__content--container | flow">
                            <h2 class="card__title">Adventure</h2>
                            <p class="card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Rerum in
                            </p>
                        </div>
                        <button class="card__button">Read more</button>
                    </div>
                </swiper-slide>
            </swiper>
        </div>

        <div class="d-flex justify-content-center m-4">
            <a href="#" class="btn mt-4">Show All</a>
        </div>
    </section>

    <section class="newsletter">
        <form action="">
            <h3>subscribe for latest updates</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box" />
            <input type="submit" value="subscribe" class="btn" />
        </form>
    </section>

    <section class="featured" id="featured">
        <h1 class="heading"><span>Trending Books</span></h1>

        <div class="swiper featured-slider">
            <swiper modules="[Navigation, Pagination]" :slides-per-view="7" :space-between="10" :navigation="true"
                :loop="true" :breakpoints="{
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 40,
                    },
                    1440: {
                        slidesPerView: 7,
                        spaceBetween: 15,
                    }
                }" 
                :autoplay="{
    delay: 4000,
    disableOnInteraction: false
  }"
                @swiper="onSwiper" @slideChange="onSlideChange">

                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-2.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-3.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-4.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-5.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-6.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-2.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book1.jfif" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-3.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-4.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-5.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-6.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
            </swiper>
        </div>

        <div class="d-flex justify-content-center m-4">
            <a href="#" class="btn mt-4">Show All</a>
        </div>
    </section>

    <div class="featured top-padding" id="featured">
        <h1 class="heading"><span>Editor's Choice</span></h1>

        <div class="swiper featured-slider">
            <swiper modules="[Navigation, Pagination]" :slides-per-view="7" :space-between="10" :navigation="true"
                :loop="true" :breakpoints="{
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 40,
                    },
                    1440: {
                        slidesPerView: 7,
                        spaceBetween: 15,
                    }
                }" 
                :autoplay="{
    delay: 4000,
    disableOnInteraction: false
  }"
                @swiper="onSwiper" @slideChange="onSlideChange">

                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-2.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-3.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-4.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-5.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-6.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-2.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book1.jfif" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-3.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-4.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-5.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-6.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
            </swiper>
        </div>

        <div class="d-flex justify-content-center m-4">
            <a href="#" class="btn mt-4">Show All</a>
        </div>
    </div>

    <div class="featured top-padding" id="featured">
        <h1 class="heading"><span>Editor's Choice</span></h1>

        <div class="swiper featured-slider">
            <swiper modules="[Navigation, Pagination]" :slides-per-view="7" :space-between="10" :navigation="true"
                :loop="true" :breakpoints="{
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 40,
                    },
                    1440: {
                        slidesPerView: 7,
                        spaceBetween: 15,
                    }
                }" 
                :autoplay="{
    delay: 4000,
    disableOnInteraction: false
  }"
                @swiper="onSwiper" @slideChange="onSlideChange">

                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-2.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-3.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-4.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-5.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-6.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-2.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book1.jfif" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-3.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-4.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-5.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-6.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
            </swiper>
        </div>

        <div class="d-flex justify-content-center m-4">
            <a href="#" class="btn mt-4">Show All</a>
        </div>
    </div>

    <section class="featured" id="featured">
        <h1 class="heading"><span>Most Popular Books</span></h1>

        <div class="swiper featured-slider">
            <swiper modules="[Navigation, Pagination]" :slides-per-view="7" :space-between="10" :navigation="true"
                :loop="true" :breakpoints="{
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 40,
                    },
                    1440: {
                        slidesPerView: 7,
                        spaceBetween: 15,
                    }
                }" :autoplay="{
                    delay: 4000,
                    disableOnInteraction: false
                }" @swiper="onSwiper" @slideChange="onSlideChange">

                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-2.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-3.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-4.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-5.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-6.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-2.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book1.jfif" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-3.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-4.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-5.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
                <swiper-slide>
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="../../../../public/user/image/book-6.jpg" />
                            </a>
                            <span class="product-discount-label">NEW</span>
                            <ul class="product-links">
                                <li>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                            <a href="" class="add-to-cart">Read</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Sresto Golpo</a></h3>
                            <div class="price">Bonoful</div>
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
                </swiper-slide>
            </swiper>
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
            <img src="../../../../public/user/image/deal-img.png" alt="" />
        </div>
    </section>

    <section class="reviews" id="reviews">
        <h1 class="heading"><span>Quotes</span></h1>

        <div class="swiper reviews-slider">
            <swiper modules="[Navigation, Pagination]" :slides-per-view="4" :space-between="10" :loop="true" :autoplay="{
                delay: 4000,
                disableOnInteraction: false
            }" :breakpoints="{
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1440: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                }
            }" @swiper="onSwiper" @slideChange="onSlideChange">
                <swiper-slide class="box">
                    <img src="https://i.pinimg.com/736x/89/59/17/895917b5f6c695ebbc7ec2b9da2a4038.jpg" alt="" />
                    <h3>Sharmily </h3>
                    <p>
                        The website is very good and responsive, all the books available
                        in this website are original and very cheap, you can buy them
                        comfortably. Payment can also be done easily.
                    </p>
                    <div class="stars">-- <span>Life and Art</span></div>
                </swiper-slide>
                <swiper-slide class="box">
                    <img src="https://i.pinimg.com/736x/89/59/17/895917b5f6c695ebbc7ec2b9da2a4038.jpg" alt="" />
                    <h3>Sharmily </h3>
                    <p>
                        The website is very good and responsive, all the books available
                        in this website are original and very cheap, you can buy them
                        comfortably. Payment can also be done easily.
                    </p>
                    <div class="stars">-- <span>Life and Art</span></div>
                </swiper-slide>
                <swiper-slide class="box">
                    <img src="https://i.pinimg.com/736x/89/59/17/895917b5f6c695ebbc7ec2b9da2a4038.jpg" alt="" />
                    <h3>Sharmily </h3>
                    <p>
                        The website is very good and responsive, all the books available
                        in this website are original and very cheap, you can buy them
                        comfortably. Payment can also be done easily.
                    </p>
                    <div class="stars">-- <span>Life and Art</span></div>
                </swiper-slide>
                <swiper-slide class="box">
                    <img src="https://i.pinimg.com/736x/89/59/17/895917b5f6c695ebbc7ec2b9da2a4038.jpg" alt="" />
                    <h3>Sharmily </h3>
                    <p>
                        The website is very good and responsive, all the books available
                        in this website are original and very cheap, you can buy them
                        comfortably. Payment can also be done easily.
                    </p>
                    <div class="stars">-- <span>Life and Art</span></div>
                </swiper-slide>

            </swiper>
        </div>
    </section>
</template>

<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
import SwiperCore, { Navigation, Pagination, Scrollbar, Autoplay } from 'swiper';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

// Register Swiper modules
SwiperCore.use([Navigation, Pagination, Scrollbar, Autoplay]);

export default {
    name: "MainContent",
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {

        const onSwiper = (swiper) => {
        };
        const onSlideChange = () => {
        };
        return {
            onSwiper,
            onSlideChange,
        };
    },
};
</script>


<style scoped></style>