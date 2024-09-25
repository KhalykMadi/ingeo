<template>
    <div class="wrapper">
        <main>
            <Sidebar />
<!--            <Info v-if="showInfo" />-->
            <router-view></router-view>
<!--            <map-component></map-component>-->
<!--            <Payment v-if="showPayment" />-->
        </main>
    </div>
</template>

<script>
export default {
    name: 'App',
    data() {
        return {
            showInfo: true,
            showPayment: true,
        }
    }
};
</script>
