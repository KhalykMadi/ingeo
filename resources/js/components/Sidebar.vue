<template>
    <div class="sidebar">
        <Header @toggleMenu="toggleMenu" />
        <div class="search-box">
            <input type="text" placeholder="Поиск..." class="text-base">
            <button class="button button-search">
                <i class="icon icon-search"></i>
            </button>
            <button class="button button-filter">
                <i class="icon icon-filter"></i>
            </button>
        </div>
        <div class="panel" :class="{'active': isMenuVisible}">
            <v-select :options="regions" />
            <div class="water-objects">
                <button class="item button">
                    <i class="icon icon-rivers"></i>
                    Реки
                </button>
                <button class="item button">
                    <i class="icon icon-lakes"></i>
                    Озера
                </button>
                <button class="item button">
                    <i class="icon icon-reservoirs"></i>
                    Водохранилища
                </button>
                <button class="item button">
                    <i class="icon icon-canals"></i>
                    Каналы
                </button>
            </div>
            <div class="lines">
                <h3 class="caption text-xl text-black text-bold">Линии водного объекта</h3>
                <div class="item">
                    <p>Река</p>
                    <img src="/images/icon/icon-line-rivers.svg" alt="">
                </div>
                <div class="item">
                    <p>Озера</p>
                    <img src="/images/icon/icon-line-lakes.svg" alt="">
                </div>
                <div class="item">
                    <p>Водохранилища</p>
                    <img src="/images/icon/icon-line-reservoirs.svg" alt="">
                </div>
                <div class="item">
                    <p>Каналы</p>
                    <img src="/images/icon/icon-line-canals.svg" alt="">
                </div>
            </div>
            <FilterPage />

            <SearchResult />
            <div class="object-open page">
                <div class="head">
                    <button class="button button-back">
                        <i class="icon icon-back"></i>
                        <p class="name">Назад</p>
                    </button>
                </div>
                <div class="content">
                    <div class="item">
                        <p class="text-base text-regular">Водные объекты</p>
                    </div>
                    <div class="item">
                        <p class="text-base text-regular">Гидротехническое сооружение</p>
                    </div>
                    <div class="item">
                        <p class="text-base text-regular">Мониторинговые станции</p>
                    </div>
                </div>
            </div>
            
            <div class="object-open page">
                <div class="head">
                    <button class="button button-back">
                        <i class="icon icon-back"></i>
                        <p class="name">Река</p>
                    </button>
                    
                </div>
                <div class="content">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Название</th>
                                <th>Уникальный идентификатор</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Абилькайы</td>
                                <td>8050076</td>
                                <td><button class="button button-link">Редактировать</button></td>
                            </tr>
                            <tr>
                                <td>Абилькайы</td>
                                <td>8050076</td>
                                <td><button class="button button-link">Редактировать</button></td>
                            </tr>
                            <tr>
                                <td>Абилькайы</td>
                                <td>8050076</td>
                                <td><button class="button button-link">Редактировать</button></td>
                            </tr>
                            <tr>
                                <td>Абилькайы</td>
                                <td>8050076</td>
                                <td><button class="button button-link">Редактировать</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <Footer />
    </div>
</template>

<script>
import Accordion from './Accordion.vue';


export default {
    name: 'Sidebar',
    data() {
        return {
            regions: [
                'Западно-Казахстанская область',
                'Атырауская область',
                'Актюбинская область',
                'Мангистауская область'
            ],
            isMenuVisible: false
        }
    },
    methods: {
        toggleMenu() {
            this.isMenuVisible = !this.isMenuVisible; // Переключаем состояние меню
        }
    }
};
</script>