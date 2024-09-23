<template>
    <header>
        <div class="logo">
            <img src="../../assets/img/logo.png" alt="">
            Водные объекты и 
            водохозяйственная инфраструктура Западно-Казахстанского региона
        </div>
        <div class="button button button-menu" :class="{'active': isOpen}" @click="toggleMenu">
            <span></span>
        </div>
    </header>
</template>

<script>
export default {
    name: 'Header',
    data() {
        return {
            isOpen: false,
        }
    },
    methods: {
        toggleMenu() {
            this.$emit('toggleMenu');
            this.isOpen = !this.isOpen;
        }
    }
};
</script>