
<template>
    <div class="login-container">
        <h1>Вход</h1>
        <form @submit.prevent="loginUser">
            <div class="form-group">
                <label for="email">Электронная почта</label>
                <input type="email" v-model="form.email" id="email" required />
            </div>

            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" v-model="form.password" id="password" required />
            </div>

            <button type="submit">Войти</button>

            <div v-if="error" class="error-message">{{ error }}</div>
        </form>

        <p class="register-link">
            Нет аккаунта? <router-link to="/register">Зарегистрироваться</router-link>
        </p>
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
.login-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    transition: border-color 0.3s;
}

input:focus {
    border-color: #007bff;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3;
}

.error-message {
    color: red;
    margin-top: 10px;
    text-align: center;
}

.register-link {
    text-align: center;
    margin-top: 20px;
}
</style>
