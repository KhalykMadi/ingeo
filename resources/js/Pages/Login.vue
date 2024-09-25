
<template>
    <div class="auth-page login">
        <div class="card">
            <h1 class="title">Вход</h1>
            <p class="description">
                Нет аккаунта? <router-link to="/register">Зарегистрироваться</router-link>
            </p>
            <form @submit.prevent="loginUser" class="form">
                <div class="form-group">
                    <label for="email">Электронная почта</label>
                    <input type="email" v-model="form.email" id="email" required />
                </div>
    
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" v-model="form.password" id="password" required />
                </div>
    
                <button type="submit" class="button button-primary">Войти</button>
    
                <div v-if="error" class="error-message">{{ error }}</div>
            </form>
        </div>
    </div>
</template>

<script>
import { mapState } from 'vuex';
import axios from 'axios';

export default {
    name: 'Login',
    data() {
        return {
            form: {
                email: '',
                password: '',
            },
        };
    },
    computed: {
        ...mapState(['error']),
    },
    methods: {
        async loginUser() {
            try {

                const response = await axios.post('/api/auth/login', this.form);
                this.$store.commit('setUser', response.data.user);
                this.$store.commit('setError', null); // Сброс ошибки
                this.$router.push('/');
            } catch (err) {
                const errorMessage = err.response?.data?.message || 'Ошибка входа';
                this.$store.commit('setError', errorMessage);
            }
        },
    },
};
</script>

<style scoped>

</style>
