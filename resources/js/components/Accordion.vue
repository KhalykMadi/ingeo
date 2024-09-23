<template>
    <div class="accordion">
        <div v-for="(item, index) in items" :key="index" class="accordion-item" :class="{'locked': item.locked}">
            <div class="accordion-header" @click="toggle(index, !item.locked)">
                <h3 class="text text-base text-regular">{{ item.title }}</h3>
                <i class="icon icon-minus" v-if="activeIndex === index"></i>
                <i class="icon icon-plus" v-else></i>
            </div>
            <div v-show="activeIndex === index" class="accordion-content">
                <div v-html="item.content"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
        items: [
            { 
                title: 'Пункт 1', 
                content: `
                         <table class="table ">
                        <thead>
                            <tr>
                                <th>Параметр</th>
                                <th>Значение</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Водобсорный бассейн</td>
                                <td>Бассейны рек Талас, Асы и хр. Каратау</td>
                            </tr>
                            <tr>
                                <td>Водобсорный бассейн</td>
                                <td>Бассейны рек Талас, Асы и хр. Каратау</td>
                            </tr>
                            <tr>
                                <td>Абилькайы</td>
                                <td>8050076</td>
                            </tr>
                            <tr>
                                <td>Абилькайы</td>
                                <td>8050076</td>
                            </tr>
                        </tbody>
                    </table>
                `,
                locked: false,
            },
            { 
                title: 'Пункт 2', 
                content: `
                         <table class="table ">
                        <thead>
                            <tr>
                                <th>Параметр</th>
                                <th>Значение</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Водобсорный бассейн</td>
                                <td>Бассейны рек Талас, Асы и хр. Каратау</td>
                            </tr>
                            <tr>
                                <td>Водобсорный бассейн</td>
                                <td>Бассейны рек Талас, Асы и хр. Каратау</td>
                            </tr>
                            <tr>
                                <td>Абилькайы</td>
                                <td>8050076</td>
                            </tr>
                            <tr>
                                <td>Абилькайы</td>
                                <td>8050076</td>
                            </tr>
                        </tbody>
                    </table>
                `,
                locked: true,
            },
        ],
        activeIndex: null,
    };
  },
  methods: {
    toggle(index, clickable) {
        if(clickable) {
            this.activeIndex = this.activeIndex === index ? null : index;
        }
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
}
</style>