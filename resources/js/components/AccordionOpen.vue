<template>
    <div class="accordion">
        <div class="accordion-item">
            <div class="accordion-header" @click="toggle()">
                <h3 class="text text-base text-bold">{{ title }}</h3>
                <i class="icon icon-arrow-down" :class="{'-up': activeIndex}"></i>
            </div>
            <div v-show="activeIndex" class="accordion-content">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String,
            default: 'Аккордион'
        },
    },
  data() {
    return {
        activeIndex: false,
    };
  },
  methods: {
    toggle() {
        this.activeIndex = !this.activeIndex;
    }
  }
};
</script>

<style lang="scss">
.accordion {
    width: 100%;
    &-item {
        &.locked {
            opacity: 0.5;
            user-select: none;
        }
        + .accordion-item {
            margin-top: 0.75rem;
        }
    }
    &-header {
        background-color: var(--white);
        border-bottom: 1px solid #F3F3F3;
        padding: 1rem 0;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
    }
    &-content {
        padding: 1rem 0;
    }
    table {
        background-color: #FAFAFA;
        th {
            text-align: left;
            font-weight: 400;
            color: #666666;
            padding: 1rem 0.5rem;
        }
        td {
            padding: 1rem 0.5rem;
        }
    }
    .icon-arrow-down {
        transition: transform 0.3s ease;
        &.-up {
            transform: rotate(180deg);
        }
    }
}
</style>