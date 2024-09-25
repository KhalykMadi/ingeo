// resources/js/store.js
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        user: null,
        error: null,
    },
    mutations: {
        setUser(state, user) {
            state.user = user;
        },
        setError(state, error) {
            state.error = error;
        },
    },
    actions: {
        async login({ commit }, credentials) {
            try {
                const response = await axios.post('/api/login', credentials);
                commit('setUser', response.data.user);
                commit('setError', null);
                return response.data;
            } catch (err) {
                commit('setError', err.response.data.message || 'Ошибка входа');
                throw err;
            }
        },
    },
});

export default store;
