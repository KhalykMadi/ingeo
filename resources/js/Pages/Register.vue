
<template>
    <div class="auth-page register">
        <div class="card">
            <h1 class="title">Создать аккаунт</h1>
            <p class="description">Уже есть аккаунт? <router-link to="/login">Войти</router-link></p>
            <form @submit.prevent="registerUser" class="form">
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" v-model="form.name" id="name" required />
                </div>
    
                <div class="form-group">
                    <label for="email">Электронная почта</label>
                    <input type="email" v-model="form.email" id="email" required />
                </div>
    
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" v-model="form.password" id="password" required />
                </div>
    
                <div class="form-group">
                    <label for="password_confirmation">Подтверждение пароля</label>
                    <input type="password" v-model="form.password_confirmation" id="password_confirmation" required />
                </div>
    
                <button type="submit" class="button button-primary">Зарегистрироваться</button>
    
                <div v-if="error" class="error-message">{{ error }}</div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Register',
    data() {
        return {
            form: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
            },
            error: null,
        };
    },
    methods: {
        async registerUser() {
            try {
                this.error = null;
                const response = await axios.post('/api/auth/register', this.form);
                console.log('Регистрация успешна:', response.data);
            } catch (err) {
                this.error = err.response.data.message || 'Ошибка регистрации';
            }
        },
    },
};
</script>

<style scoped>
</style>
