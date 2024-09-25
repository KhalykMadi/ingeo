require('./bootstrap');

import Vue from 'vue';
import router from './router/router';
import store from './store/store';

// Импортируем Vue компоненты и другие зависимости
import App from './layouts/App.vue';
import vSelect from 'vue-select';
import 'vue-select/dist/vue-select.css';
import VueAwesomeSwiper from 'vue-awesome-swiper';
import VueEasyLightbox from 'vue-easy-lightbox';
import 'swiper/css/swiper.css';

// Используем плагины
Vue.use(VueAwesomeSwiper);
Vue.use(VueEasyLightbox);

// Регистрация компонентов
Vue.component('Header', require('./components/Header.vue').default);
Vue.component('Footer', require('./components/Footer.vue').default);
Vue.component('Sidebar', require('./components/Sidebar.vue').default);
Vue.component('Info', require('./components/Info.vue').default);
Vue.component('Modal', require('./components/Modal.vue').default);
Vue.component('Payment', require('./components/Payment.vue').default);
Vue.component('map-component', require('./components/MapComponent.vue').default);
Vue.component('FilterPage', require('./components/Filter.vue').default);
Vue.component('SearchResult', require('./components/SearchResult.vue').default);
Vue.component('Accordion', require('./components/Accordion.vue').default);
Vue.component('AccordionOpen', require('./components/AccordionOpen.vue').default);
Vue.component('v-select', vSelect);

// Создание экземпляра Vue
const app = new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
});
