<template>
    <section class="single-book">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 left">
                    <div class="book-cover">
                        <img :src="singleBook.img_url" alt="book1">
                    </div>
                    <div class="read-now mt-2">
                        <a href="#">
                            <button class="btn btn-read-now" @click="openPDF"> Read Now</button>
                        </a>
                    </div>
                    <div class="download-now mt-2">
                        <a :href="singleBook.pdf_url" download>
                            <button class="btn btn-download-now">Download PDF</button>
                        </a>
                    </div>
                    <div class="rate-title px-4 mt-3">
                        Rate this Book
                    </div>
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
                <div class="col-12 col-md-8 right">
                    <div class="single-book-info">
                        <div class="series-title">{{ singleBook.series }}</div>
                        <div class="Book-title">
                            {{ singleBook.title }}
                            <button class="wishlist-button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!-- Font Awesome Heart Icon -->
                                    <path
                                        d="M462.3 62.7C407 7.4 324.8-10.6 256 36.6 187.2-10.6 104.9 7.4 49.7 62.7c-55.2 55.2-62.3 143.4-21.1 205.4l193.5 226.1c12.5 14.7 35.4 14.7 47.9 0l193.5-226.1c41.2-62 34.1-150.2-21.2-205.4z" />
                                </svg>
                                Add to Wishlist
                            </button>
                        </div>
                        <div class="Book-sub-title">{{ singleBook.sub_title }}</div>
                        <div class="author-link"> By <a href="">{{ author.name }}</a></div>
                        <div class="book-basic-info">
                            <div class="d-flex gap-4 align-items-center">
                                <div class="book-ratings">
                                    Rating :
                                    <i class="fa fa-star" style="color: #ffd43b"></i>
                                    <i class="fa fa-star" style="color: #ffd43b"></i>
                                    <i class="fa fa-star" style="color: #ffd43b"></i>
                                    <i class="fa fa-star" style="color: #ffd43b"></i>
                                    <i class="fas fa-star-half-alt" style="color: #ffd43b"></i>
                                    <span> - {{ getTotalRating }}</span>
                                </div>
                                <div class="book-rate-count">Total Rated : <span>{{ totalRated }}</span> </div>
                                <div class="book-read-count"> Total Reader : <span> {{ singleBook.total_view }} </span>
                                </div>
                            </div>
                            <div class="genres">
                                <span>Genres</span>
                                <div class="content">
                                    <a v-for="category in singleBook.categories" :key="category.id" href="#"
                                        class="genre-type">{{ category.category_name }}</a>
                                </div>
                            </div>
                            <div class="short-description">
                                <span>About the book</span>
                                <p>{{ singleBook.bio }}</p>
                            </div>

                            <div class="d-flex gap-4">
                                <div class="book-page-count">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M96 0C43 0 0 43 0 96L0 416c0 53 43 96 96 96l288 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64c17.7 0 32-14.3 32-32l0-320c0-17.7-14.3-32-32-32L384 0 96 0zm0 384l256 0 0 64L96 448c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16zm16 48l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z">
                                        </path>
                                    </svg>
                                    <span> {{ singleBook.pages }} Pages</span>
                                </div>
                                <div class="book-publish-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z">
                                        </path>
                                    </svg>
                                    <span> {{ singleBook.publish_date }}</span>
                                </div>
                                <div class="book-language">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M352 256c0 22.2-1.2 43.6-3.3 64l-185.3 0c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64l185.3 0c2.2 20.4 3.3 41.8 3.3 64zm28.8-64l123.1 0c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64l-123.1 0c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32l-116.7 0c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0l-176.6 0c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0L18.6 160C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192l123.1 0c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64L8.1 320C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6l176.6 0c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352l116.7 0zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6l116.7 0z">
                                        </path>
                                    </svg>
                                    <span> {{ singleBook.language }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <hr>
            <div class="author">
                <div class="title">Authors</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="author-info">
                        <div class="author-image"> <img
                                src="https://i.pinimg.com/736x/89/59/17/895917b5f6c695ebbc7ec2b9da2a4038.jpg" alt="">
                        </div>
                        <div class="d-flex flex-column mx-4">
                            <div class="author-name">{{ author.name }}</div>
                            <div class="author-count">
                                <span>90</span> Books <span> . </span>
                                <span>490</span> Followers
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn author-follow-btn">Follow</a>
                </div>
            </div>
            <hr>
            <div class="recommend">
                <div class="recommend-title">Recommend</div>
                <div class="swiper single-featured-slider">
                    <swiper modules="[Navigation, Pagination]" :slides-per-view="7" :space-between="10"
                        :navigation="true" :loop="true" :autoplay="{
                            delay: 3000,
                            disableOnInteraction: false
                        }" @swiper="onSwiper" @slideChange="onSlideChange">
                        <swiper-slide v-for="relatedBook in relatedBooks" :key="relatedBook.id">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#" class="image">
                                        <img :src="relatedBook.img_url" />
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
                                    <router-link :to="{ name: 'SingleBook', params: { id: relatedBook.id } }"
                                        class="add-to-cart">Read</router-link>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">{{ relatedBook.title }}</a></h3>
                                    <div class="price">{{ relatedBook.author.name }}</div>
                                    <div>
                                        <i class="fa fa-star" style="color: #ffd43b"></i>
                                        <i class="fa fa-star" style="color: #ffd43b"></i>
                                        <i class="fa fa-star" style="color: #ffd43b"></i>
                                        <i class="fa fa-star" style="color: #ffd43b"></i>
                                        <i class="fas fa-star-half-alt" style="color: #ffd43b"></i>
                                        <span>{{ relatedBookRate(relatedBook) }}</span>/5
                                    </div>
                                    <div>
                                        Total View: <span class="font-weight-bold">{{ relatedBook.total_view }}</span>
                                    </div>
                                </div>
                            </div>
                        </swiper-slide>
                    </swiper>
                </div>
            </div>
            <hr>
            <div class="review">
                <div class="book-review-count">Total discussions : <span>2</span> response</div>
                <div class="container">
                    <div class="comment-section">
                        <!-- Comment Input Form -->
                        <div class="comment-form">
                            <img src="https://i.pinimg.com/736x/89/59/17/895917b5f6c695ebbc7ec2b9da2a4038.jpg"
                                alt="Profile">
                            <textarea rows="3" placeholder="Write a comment..."></textarea>
                            <button class="btn">Post</button>
                        </div>

                        <!-- Existing Comments -->
                        <div class="comment">
                            <div class="comment-header">
                                <img src="https://i.pinimg.com/736x/89/59/17/895917b5f6c695ebbc7ec2b9da2a4038.jpg"
                                    alt="Profile">
                                <div class="comment-details">
                                    <h4>Sharmily</h4>
                                    <p>December 21, 2024, 12:30 PM</p>
                                </div>
                            </div>
                            <div class="comment-body">
                                This is a sample comment. Reply below!
                            </div>
                            <div class="comment-actions">
                                <button onclick="toggleReplyForm('reply1')"><i class="fa-solid fa-share"></i>
                                    Reply</button>
                            </div>

                            <!-- Reply Form -->
                            <div id="reply1" class="reply-form">
                                <textarea rows="3" placeholder="Write a reply..."></textarea>
                                <button class="btn"> Submit</button>
                            </div>

                            <!-- Nested Comment -->
                            <div class="nested-comment">
                                <div class="comment-header">
                                    <img src="https://i.pinimg.com/736x/89/59/17/895917b5f6c695ebbc7ec2b9da2a4038.jpg"
                                        alt="Profile">
                                    <div class="comment-details">
                                        <h4>Rubayed</h4>
                                        <p>December 21, 2024, 1:00 PM</p>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    This is a nested reply to the above comment.
                                </div>
                                <div class="comment-actions">
                                    <button onclick="toggleReplyForm('reply2')"><i class="fa-solid fa-share"></i>
                                        Reply</button>
                                </div>
                                <div id="reply2" class="reply-form">
                                    <textarea rows="3" placeholder="Write a reply..."></textarea>
                                    <button class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
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
import axios from 'axios';
import Cookies from 'js-cookie';
import { computed, onMounted, ref, watch } from 'vue';
import { useRoute } from 'vue-router';

// Register Swiper modules
SwiperCore.use([Navigation, Pagination, Scrollbar, Autoplay]);

export default {
    name: "SingleBook",
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        const onSwiper = (swiper) => {
            console.log(swiper);
        };
        const onSlideChange = () => {
            console.log('Slide changed');
        };
        const route = useRoute();
        const singleBook = ref({});
        const author = ref({});
        const booksRating = ref([]);
        const relatedBooks = ref([]);
        const book_id = ref('');
        const fetchSinglebook = async () => {
            const response = await axios.get(`/api/books/${book_id.value}`);
            console.log(response)
            if (response.data && response.status === 200) {
                singleBook.value = response.data.book;
                author.value = singleBook.value.author;
                booksRating.value = singleBook.value.ratings;
                relatedBooks.value = response.data.categories_book;

            }
        }
        const getTotalRating = computed(() => {
            if (booksRating.value.length === 0) {
                return 0;
            }
            const totalRating = booksRating.value.reduce((sum, rating) => sum + rating.rate_level, 0);
            const averageRating = totalRating / booksRating.value.length;
            return averageRating;
        });

        const relatedBookRate = (book) => {
            if (book.ratings.length === 0) {
                return 0;
            }
            const totalRating = book.ratings.reduce((sum, rating) => sum + rating.rate_level, 0);
            const averageRating = totalRating / book.ratings.length;
            return averageRating;
        };
        const totalRated = computed(() => {
            if (booksRating.value.length === 0) {
                return 0;
            }
            const totalrate = booksRating.value.length;
            return totalrate;
        })
        const openPDF = () => {
            if (singleBook.value.pdf_url) {
                window.open(singleBook.value.pdf_url, "_blank");
            } else {
                console.error("PDF URL is not available");
            }

            const payload = {
                book_id: singleBook.value.id,
                user_id: Cookies.get('user_id') || null, 
                type: 'Read', // Example type
                keyword: 'reading', // Example keyword (modify as needed)
                language: 'en', // Example language (modify as needed)
            };
            axios.post('/api/user-trackings', payload)
                .then(response => {
                    console.log('Tracking data posted successfully:', response.data);
                })
                .catch(error => {
                    console.error('Error posting tracking data:', error);
                });
        };
        onMounted(() => {
            book_id.value = route.params.id;
            fetchSinglebook();
        })
        watch(
            () => route.params.id,
            (newId) => {
                book_id.value = newId;
                fetchSinglebook();
            }
        );
        return {
            book_id,
            singleBook,
            author,
            getTotalRating,
            totalRated,
            relatedBooks,
            relatedBookRate,
            openPDF,
            onSwiper,
            onSlideChange,
        }
    }
}
</script>

<style></style>