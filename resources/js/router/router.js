// resources/js/router/router.js
import Vue from 'vue';
import Router from 'vue-router';
import Register from '../Pages/Register.vue';
import Login from "../Pages/Login.vue";


Vue.use(Router);

const routes = [
    { path: '/register', component: Register },
    { path: '/login', component: Login },
];

const router = new Router({
    mode: 'history', // Используйте HTML5 History API
    routes,
});

export default router;
