
<template>
    <div class="register-container">
        <h1>Регистрация</h1>
        <form @submit.prevent="registerUser">
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

            <button type="submit">Зарегистрироваться</button>

            <div v-if="error" class="error-message">{{ error }}</div>
        </form>

        <p>Уже есть аккаунт? <router-link to="/login">Войти</router-link></p>
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
.register-container {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

.error-message {
    color: red;
    margin-top: 10px;
}
</style>
