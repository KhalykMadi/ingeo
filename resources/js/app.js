require('./bootstrap');
import Vue from 'vue';

// Импортируем ваш Vue компонент
import App from './layouts/App.vue';
import vSelect from 'vue-select';
import 'vue-select/dist/vue-select.css';

window.Vue = require('vue').default;
Vue.component('Header', require('./components/Header.vue').default);
Vue.component('Footer', require('./components/Footer.vue').default);
Vue.component('Sidebar', require('./components/Sidebar.vue').default);
Vue.component('v-select', vSelect)

const app = new Vue({
    el: '#app',
    render: h => h(App)
});
