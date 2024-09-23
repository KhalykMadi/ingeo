<template>
    <div v-if="visible" class="modal-overlay" @click="closeModal">
        <div class="modal" @click.stop :class="myClass">
            <div class="modal-header">
                <h3 class="title text-xl text-bold">{{ title }}</h3>
            </div>
            <slot></slot>
        </div>
    </div>
</template>

<script>

export default {
    props: {
        visible: {
            type: Boolean,
            required: true
        },
        title: {
            type: String,
            default: 'Модальное окно'
        },
        myClass: {
            type: [String, Array, Object], 
            default: '' 
        }
    },
    methods: {
        closeModal() {
            this.$emit('close');
        }
    }
};
</script>

<style>

</style>