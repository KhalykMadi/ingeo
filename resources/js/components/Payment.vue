<template>
    <div class="payment-page page">
        <div class="payment">
            <div class="head">
                <button class="button button-back">
                    <i class="icon icon-back"></i>
                    <p class="text-base text-regular">Вернуться назад </p>
                </button>
                <h1 class="title text-bold text-3xl">Оплата</h1>
            </div>
            <div class="content">
                <form action="">
                    <label class="form-control" for="radio1">
                        <input type="radio" name="radio" id="radio1" />
                        <img src="/images/icon/icon-kaspi.png" alt="">
                        <p class="text-base text-bold">Kaspi.kz</p>
                    </label>
                    <label class="form-control" for="radio2">
                        <input type="radio" name="radio" id="radio2" />
                        <img src="/images/icon/icon-halyk.png" alt="">
                        <p class="text-base text-bold">Halyk Bank</p>
                    </label>
                    <button class="button button-primary">Далее</button>
                </form>
            </div>
        </div> 
    </div>
</template>

<script>

export default {
   
};
</script>

<style>

</style>