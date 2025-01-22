<template>
    <section class="search-result">
        <div class="container">
            <div class="search-result-container">
                <h1 class="title pb-5 ps-5">Search Result :<span> New Books</span></h1>
            </div>
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="row mt-4">
                        <div v-for="book in books" :key="book.id" class="col-md-3 mb-4">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#" class="image">
                                        <img :src="book.img_url">
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
                                    <div>Total View: <span class="font-weight-bold">{{ book.total_view }}</span></div>
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

<script>
import axios from 'axios';
import { onMounted, ref } from 'vue';

export default {
    name: "Book",
    setup() {
        const books = ref([]);
        const fetchBooks = async () => {
            const response = await axios.get('/api/books');
            console.log(response);
            if (response.data && response.status === 200) {
                books.value = response.data;
            }
        }
        const getTotalRating = (book) => {
            if (book.ratings.length === 0) {
                return 0;
            }
            const totalRating = book.ratings.reduce((sum, rating) => sum + rating.rate_level, 0);
            const averageRating = totalRating / book.ratings.length;
            return averageRating;
        };

        onMounted(async () => {
            await fetchBooks();
        })
        return {
            books,
            getTotalRating
        }
    }
}
</script>

<style></style>