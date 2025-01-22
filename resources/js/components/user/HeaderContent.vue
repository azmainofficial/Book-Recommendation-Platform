<template>
    <header class="header">
        <div class="header-1">
            <router-link to="/" class="logo">
                <img src="../../../../public/user/image/LOGO.png" alt="" /> BOI
                <span class="blinking-text">PECHA</span>
            </router-link>

            <form action="" class="search-form">
                <input type="search" name="" v-model="searchValue" placeholder="search here..." id="search-box" />
                <label for="search-box" @click.prevent="submitSearch" class="fas fa-search"></label>
            </form>
            <div class="icons">
                <div id="search-btn" class="fas fa-search search-btn-1"></div>
                <a href="#" class="fas fa-heart"></a>
                <div v-if="!isLoggedIn" id="login-btn" class="">
                    <button class="login-btn">login</button>
                </div>
                <div class="profile-box">
                    <button v-show="isLoggedIn" class="dropdown-toggle" id="profile-toggle">
                        <div class="profile-info">
                            <div class="image">
                                <img v-if="isLoggedIn" :src="users.profile_img || defaultProfileImg"
                                    alt="Profile Picture" class="profile-img" />
                            </div>
                            <div class="text-start">
                                <h6 class="fw-500">{{ users.userName }}</h6>
                                <!-- <p class="text-start">Admin</p> -->
                            </div>
                        </div>
                    </button>
                    <ul v-show="isLoggedIn" class="dropdown-menu" id="dropdown-menu">
                        <li>
                            <div class="author-info">
                                <div class="image">
                                    <img v-if="isLoggedIn" :src="users.profile_img || defaultProfileImg"
                                        alt="Author Image" class="author-img" />
                                </div>
                                <div class="content">
                                    <h4>{{ users.userName }}</h4>
                                    <a href="#" class="email">{{ users.email }}</a>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="lni lni-user"></i> View Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="lni lni-alarm"></i> Notifications</a>
                        </li>
                        <li>
                            <a href="#"><i class="lni lni-inbox"></i> Messages</a>
                        </li>
                        <li>
                            <a href="#"><i class="lni lni-cog"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a @click="signout"><i class="lni lni-exit"></i> Sign Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header-2">
            <nav class="desktop-navigation-menu">
                <div class="container">
                    <ul class="desktop-menu-category-list">
                        <li class="menu-category">
                            <router-link to="/" class="menu-title">Home</router-link>
                        </li>

                        <li class="menu-category">
                            <router-link to="/book" class="menu-title">Book</router-link>
                        </li>

                        <li class="menu-category">
                            <router-link to="/category" class="menu-title">Category</router-link>
                        </li>

                        <li class="menu-category">
                            <router-link to="/popular" class="menu-title">Popular</router-link>
                        </li>

                        <li class="menu-category">
                            <a href="#" class="menu-title">Authors</a>
                        </li>
                        <li class="menu-category">
                            <router-link to="/book/single" class="menu-title">Recommendations</router-link>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blog"></a>
    </nav>
    <div v-if="!isLoggedIn" class="login-form-container">
        <div id="close-login-btn" class="fas fa-times"></div>
        <div class="container-x">
            <div class="form-box login">
                <form @submit.prevent="submitLogin">
                    <h1>Login</h1>
                    <div class="input-box">
                        <input type="text" placeholder="email" required v-model="login.email" />
                        <i class="bx bxs-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" required v-model="login.password" />
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <div class="forgot-link">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button class="rx-btn">Login</button>
                    <p>or login with social platforms</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-google"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <form @submit.prevent="submitRegistration">
                    <h1>Registration</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Username" required v-model="regForm.name" />
                        <i class="bx bxs-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="Email" required v-model="regForm.email" />
                        <i class="bx bxs-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" required v-model="regForm.password" />
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <button class="rx-btn">Register</button>
                    <p>or register with social platforms</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-google"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </form>
            </div>

            <div class="toggle-box">
                <div class="toggle-panel toggle-left">
                    <img v-if="!isLoggedIn" :src="users.profile_img" class="p-3" alt="" width="80px" />
                    <h1>Hello, Welcome!</h1>
                    <p>Don't have an account?</p>
                    <button class="register-btn">Register</button>
                </div>

                <div class="toggle-panel toggle-right">
                    <img src="../../../../public/user/image/LOGO_W.png" class="p-3" alt="" width="80px" />
                    <h1>Welcome Back!</h1>
                    <p>Already have an account?</p>
                    <button class="login-btn-x">Login</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import { onMounted, ref, watch } from 'vue';
import Cookies from 'js-cookie';
import { useRouter } from 'vue-router';
export default {
    name: "HeaderContent",
    setup() {
        const router = useRouter();
        const isLoggedIn = ref(false);
        const searchValue = ref('');
        const users = ref({
            userName: '',
            email: '',
            profile_img: ''
        });
        const regForm = ref({
            name: '',
            email: '',
            password: '',
        });
        const login = ref({
            email: '',
            password: ''
        });
        const submitSearch = async () => {
            router.push({ name: 'SearchBook', query: { name: searchValue.value } });


            try {
                // Send a POST request to the user-trackings API
                const userId = Cookies.get('user_id') || null; // Get the user ID from cookies
                const payload = {
                    book_id: null,               // No book ID for search
                    user_id: userId ? parseInt(userId) : null, // Parse user ID or set to null
                    type: 'search',              // Type is "search"
                    keyword: searchValue.value,  // Use the current search keyword
                    language: 'en',              // Example language, can be updated as needed
                };

                await axios.post('/api/user-trackings', payload);
                console.log('Search tracking data posted successfully:', payload);

                // Redirect the user to the SearchBook page
                router.push({ name: 'SearchBook', query: { name: searchValue.value } });
            } catch (error) {
                console.error('Error posting search tracking data:', error);
            }
        }
        watch(searchValue, (newValue) => {
            if (newValue.length === 0) {
                router.push({ name: 'Home' });
            }
        });
        const submitRegistration = async () => {
            const response = await axios.post('/api/users', regForm.value);
            if (response.data && response.status === 201) {
                users.value = response.data.user;
                Cookies.set('user_id', response.data.user.id, { expires: 7 });
                Cookies.set('user_name', response.data.user.name, { expires: 7 });
                Cookies.set('user_email', response.data.user.email, { expires: 7 });
                Cookies.set('profile_img', response.data.user.profile_img, { expires: 7 });
                isLoggedIn.value = true;
                console.log(response.data)
            }
        }
        const submitLogin = async () => {
            const response = await axios.post('/api/login', login.value);
            if (response.data.user) {
                console.log(response.data)
                users.value.userName = response.data.user.name;
                users.value.email = response.data.user.email;
                users.value.profile_img = response.data.user.profile_img;
                Cookies.set('user_id', response.data.user.id, { expires: 7 });
                Cookies.set('user_name', response.data.user.name, { expires: 7 });
                Cookies.set('user_email', response.data.user.email, { expires: 7 });
                Cookies.set('profile_img', response.data.user.profile_img, { expires: 7 });
                isLoggedIn.value = true;
            }
        }
        const closeLogin = () => {
            isLoggedIn.value = false;
        };
        const signout = () => {
            Cookies.remove('user_name');
            Cookies.remove('user_email');
            Cookies.remove('user_id');
            Cookies.remove('profile_img');
            isLoggedIn.value = false;
        }
        onMounted(() => {
            const userName = Cookies.get('user_name') || '';
            const userEmail = Cookies.get('user_email') || '';
            const profile_img = Cookies.get('profile_img') || '';
            if (userName && userEmail) {
                users.value.userName = userName;
                users.value.email = userEmail;
                users.value.profile_img = profile_img;
                isLoggedIn.value = true;
            }
            else {
                isLoggedIn.value = false;
            }
        })
        return {
            defaultProfileImg: 'https://cdn-icons-png.flaticon.com/512/8792/8792047.png',
            regForm,
            submitRegistration,
            login,
            submitLogin,
            isLoggedIn,
            closeLogin,
            users,
            signout,
            submitSearch,
            searchValue,
        }
    }
}
</script>

<style></style>