import { createRouter, createWebHistory } from 'vue-router';

import Home from '../components/user/Home.vue';
import Book from '../components/user/Book.vue';
import Category from '../components/user/Category.vue';
import SingleBook from '../components/user/Single-Book.vue';
import Popular from '../components/user/Popular.vue';
import SearchBook from '../components/user/SearchBook.vue';

import BackDashboard from '../components/admin/BackDashboard.vue';
import DashCategory from '../components/admin/DashCategory.vue';
import DashBook from '../components/admin/DashBook.vue';
import DashUser from '../components/admin/DashUser.vue';
import DashAdmin from '../components/admin/DashAdmin.vue';
import DashAuthor from '../components/admin/DashAuthor.vue';


import Login from '../components/auth/Login.vue';
import Register from '../components/auth/Register.vue';
const routes = [

    {name:"Login",component:Login,path:'/admin-login'},
    {name:"Register",component:Register,path:'/admin-register'},
    {
        path: '/',
        name: 'Home',
        component: Home,
        children: [
            {
                path: '/book',
                name: 'Book',
                components: {
                    default: Home,
                    content: Book
                },
                meta: { hideMainContent: true },
            },
            {
                path: '/category',
                name: 'Category',
                components: {
                    default: Home,
                    content: Category
                },
                meta: { hideMainContent: true },
            },
            {
                path: '/book/:id',
                name: 'SingleBook',
                components: {
                    default: Home,
                    content: SingleBook
                },
                meta: { hideMainContent: true },
            },
            {
                path: '/popular',
                name: 'Popular',
                components: {
                    default: Home,
                    content: Popular
                },
                meta: { hideMainContent: true },
            },
            {
                path: '/book/search',
                name: 'SearchBook',
                components: {
                    default: Home,
                    content: SearchBook
                },
                meta: { hideMainContent: true },
            }
        ]
    },
    {
        path: '/admin-dashboard',
        name: 'BackDashboard',
        component: BackDashboard,
        children: [
            {
                path: '/cccategory',
                name: 'DashCategory',
                components: {
                    content: DashCategory,
                },
                meta: { hideDashContent: true },
            },
            {
                path: '/ccbook',
                name: 'DashBook',
                components: {
                    content: DashBook,
                },
                meta: { hideDashContent: true },
            },
            {
                path: '/ccusers',
                name: 'DashUser',
                components: {
                    content: DashUser,
                },
                meta: { hideDashContent: true },
            },
            {
                path: '/ccadmins',
                name: 'DashAdmin',
                components: {
                    content: DashAdmin,
                },
                meta: { hideDashContent: true },
            },
            {
                path: '/ccauthors',
                name: 'DashAuthor',
                components: {
                    content: DashAuthor,
                },
                meta: { hideDashContent: true },
            },
            
        ],
    }

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});



export default router;