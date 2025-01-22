<template>
    <!-- static -->
    <HeaderContent />
    <!-- dynamic -->
    <div v-if="!hideMainContent">
        <MainContent />
    </div>
    <router-view name="content"></router-view>
    <!-- static -->
    <footer class="footer">
        <div class="container p-4">
            <div class="top-footer">
                <div class="logo mt-5"><img src="../../../../public/user/image/LOGO_W.png" alt="" /></div>
                <div class="nav-links">
                    <ul>
                        <li><a href="#"> Home</a></li>
                        <li><a href="#"> Book</a></li>
                        <li><a href="#"> Kids</a></li>
                        <li><a href="#"> Popular</a></li>
                        <li><a href="#"> Authors</a></li>
                        <li><a href="#"> Recommendations</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="discription">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
                    enim magnam consectetur voluptates adipisci non aliquid quas eius
                    iste accusantium.
                </div>
            </div>
            <hr />
            <div class="bottom-footer">
                <p class="copyright">
                    &copy; 2022 <a href="#" class="blinking-text-2">Boi Pecha</a>. All
                    Rights Reserved
                </p>
            </div>
        </div>
    </footer>

</template>

<script>
import { computed, onBeforeMount, onMounted } from 'vue';
import { useRoute } from 'vue-router';
import MainContent from './MainContent.vue';
import HeaderContent from './HeaderContent.vue';
import { loadStylesheets, initializeInteractions } from '../../Helplers/utils';
export default {
    name: "Home",
    components: {
        MainContent,
        HeaderContent,
    },
    setup() {
        const route = useRoute();
        const hideMainContent = computed(() => route.meta.hideMainContent);
        onBeforeMount(()=>{
            loadStylesheets()
        })
        onMounted(()=>{
            initializeInteractions()
        })
        return {
            hideMainContent
        };
    },
};
</script>

<style scoped>
/* Add your styles here */
</style>