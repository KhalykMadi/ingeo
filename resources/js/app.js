require('./bootstrap');
import Vue from 'vue';

// Импортируем ваш Vue компонент
import ClientApp from './components/ExampleComponent.vue';

const app = new Vue({
    el: '#app',
    components: { ClientApp }
});
