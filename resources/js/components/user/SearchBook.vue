<template>
    <section class="search-result">
        <div class="container">
            <div class="search-result-container">
                <h1 class="title pb-5 ps-5">Search Result : <span> {{ searchQuery }}</span></h1>
            </div>
            <div class="row">
                <div class="col-12 col-md-9">
                        <div class="row mt-4" v-if="books.length === 0">No books found.</div>
                        <div class="row mt-4" v-else>
                            <div v-for="book in books" :key="book.id" class="col-md-3 mb-4">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#" class="image">
                                            <img src="../../../../public/user/image//book-2.jpg">
                                        </a>
                                        <span class="product-discount-label">NEW</span>
                                        <ul class="product-links">
                                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        </ul>
                                        <router-link :to="{ name: 'SingleBook', params: { id: book.id } }"
                                            class="add-to-cart">Read</router-link>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">{{ book.title }}</a></h3>
                                        <div class="price">{{ book.author.name }}</div>
                                        <div><i class="fa fa-star" style="color: #FFD43B"></i>
                                            <i class="fa fa-star" style="color: #FFD43B"></i>
                                            <i class="fa fa-star" style="color: #FFD43B"></i>
                                            <i class="fa fa-star" style="color: #FFD43B"></i>
                                            <i class="fas fa-star-half-alt" style="color: #FFD43B"></i> <span>{{
                                                getTotalRating(book) }}</span>/5
                                        </div>
                                        <div>Total View: <span class="font-weight-bold">{{ book.total_view }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="row p-4">
                        <div class="top-category">
                            <div class="title">
                                Best Category
                            </div>
                            <ul>
                                <li><a href="">science fiction</a></li>
                                <li><a href="">Mystery</a></li>
                                <li><a href="">Literary fiction</a></li>
                                <li><a href="">Fantasy</a></li>
                                <li><a href="">Historical fiction</a></li>
                            </ul>
                        </div>
                        <div class="most-popular">
                            <div class="title">
                                Most popular book
                            </div>
                            <ul>
                                <li><a href="">
                                        <img src="../../../../public/user/image//book-1.png">
                                        <div class="book-details">
                                            <h5 class="book-name">Book 1</h5>
                                            <div class="writer-name">Azu vai</div>
                                            <div>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fas fa-star-half-alt" style="color: #FFD43B"></i>
                                                <span>9.7</span>/10
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="">
                                        <img src="../../../../public/user/image//book-1.png">
                                        <div class="book-details">
                                            <h5 class="book-name">Book 1</h5>
                                            <div class="writer-name">Azu vai</div>
                                            <div>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fas fa-star-half-alt" style="color: #FFD43B"></i>
                                                <span>9.7</span>/10
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="">
                                        <img src="../../../../public/user/image//book-1.png">
                                        <div class="book-details">
                                            <h5 class="book-name">Book 1</h5>
                                            <div class="writer-name">Azu vai</div>
                                            <div>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fas fa-star-half-alt" style="color: #FFD43B"></i>
                                                <span>9.7</span>/10
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="">
                                        <img src="../../../../public/user/image//book-1.png">
                                        <div class="book-details">
                                            <h5 class="book-name">Book 1</h5>
                                            <div class="writer-name">Azu vai</div>
                                            <div>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fas fa-star-half-alt" style="color: #FFD43B"></i>
                                                <span>9.7</span>/10
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="">
                                        <img src="../../../../public/user/image//book-1.png">
                                        <div class="book-details">
                                            <h5 class="book-name">Book 1</h5>
                                            <div class="writer-name">Azu vai</div>
                                            <div>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fas fa-star-half-alt" style="color: #FFD43B"></i>
                                                <span>9.7</span>/10
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="">
                                        <img src="../../../../public/user/image//book-1.png">
                                        <div class="book-details">
                                            <h5 class="book-name">Book 1</h5>
                                            <div class="writer-name">Azu vai</div>
                                            <div>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fas fa-star-half-alt" style="color: #FFD43B"></i>
                                                <span>9.7</span>/10
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="">
                                        <img src="../../../../public/user/image/book-1.png">
                                        <div class="book-details">
                                            <h5 class="book-name">Book 1</h5>
                                            <div class="writer-name">Azu vai</div>
                                            <div>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fa fa-star" style="color: #FFD43B"></i>
                                                <i class="fas fa-star-half-alt" style="color: #FFD43B"></i>
                                                <span>9.7</span>/10
                                            </div>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>

<!-- <script>
import axios from 'axios';
import { watch } from 'vue';
import { onMounted, ref } from 'vue';
import { useRoute } from 'vue-router';
export default {
    name: "SearchBook",
    setup() {
        const route = useRoute();
        const books = ref([]);
        const searchQuery = ref("");

        const searchBook = async () => {
            try {
                const response = await axios.post('/api/searchbook', { search: searchQuery.value });
                if (response.data && response.status === 200) {
                    books.value = response.data;
                } else {
                    books.value = []; // Reset if no data is returned
                }
            } catch (error) {
                console.error('Error searching books:', error);
                books.value = []; // Reset on error
            }
        };

        const fetchBooks = async () => {
            try {
                const response = await axios.get('/api/books');
                if (response.data && response.status === 200) {
                    books.value = response.data;
                } else {
                    books.value = [];
                }
            } catch (error) {
                console.error('Error fetching books:', error);
                books.value = [];
            }
        };

        // const getTotalRating = (book) => {
        //     if (book.ratings.length === 0) {
        //         return 0;
        //     }
        //     const totalRating = book.ratings.reduce((sum, rating) => sum + rating.rate_level, 0);
        //     const averageRating = totalRating / book.ratings.length;
        //     return averageRating;
        // };

        const getTotalRating = (book) => {
            if (!book.ratings || book.ratings.length === 0) {
                return 0;
            }
            const totalRating = book.ratings.reduce((sum, rating) => sum + rating.rate_level, 0);
            const averageRating = totalRating / book.ratings.length;
            return averageRating;
        };

        watch(() => route.query.name, async (newQuery) => {
            searchQuery.value = newQuery;
            await searchBook();
        });


        onMounted(async () => {
            searchQuery.value = route.query.name || ''; // Default to an empty string if query is undefined
            if (searchQuery.value) {
                await searchBook(); // Call searchBook only if there's a query
            } else {
                await fetchBooks(); // Fetch all books if no query
            }
        });

        return {
            books,
            getTotalRating,
            searchQuery
        }
    }
}
</script> -->
<script>
import { ref, onMounted, watch } from 'vue';
import { useRoute } from 'vue-router';
import axios from 'axios';

export default {
    setup() {
        const route = useRoute();
        const books = ref([]);
        const searchQuery = ref('');

        const searchBook = async () => {
            try {
                const response = await axios.post('/api/searchbook', { search: searchQuery.value });
                console.log(response)
                if (response.data && response.status === 200) {
                    books.value = response.data;
                } else {
                    books.value = [];
                }
            } catch (error) {
                console.error('Error searching books:', error);
                books.value = [];
            }
        };

        const fetchBooks = async () => {
            try {
                const response = await axios.get('/api/books');
                if (response.data && response.status === 200) {
                    books.value = response.data;
                } else {
                    books.value = [];
                }
            } catch (error) {
                console.error('Error fetching books:', error);
                books.value = [];
            }
        };

        const getTotalRating = (book) => {
            if (!book.ratings || book.ratings.length === 0) {
                return 0;
            }
            const totalRating = book.ratings.reduce((sum, rating) => sum + rating.rate_level, 0);
            const averageRating = totalRating / book.ratings.length;
            return averageRating;
        };

        watch(() => route.query.name, async (newQuery) => {
            searchQuery.value = newQuery;
            await searchBook();
        });

        onMounted(async () => {
            searchQuery.value = route.query.name || '';
            if (searchQuery.value) {
                await searchBook();
            } else {
                await fetchBooks();
            }
        });

        return {
            books,
            getTotalRating,
            searchQuery,
        };
    },
};

</script>

<style></style>