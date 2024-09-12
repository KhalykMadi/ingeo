<template>
    <div class="sidebar">
        <Header />
        <div class="panel">
            <div class="search-box">
                <input type="text" placeholder="Поиск..." class="text-base">
                <button class="button button-search">
                    <i class="icon icon-search"></i>
                </button>
                <button class="button button-filter">
                    <i class="icon icon-filter"></i>
                </button>
            </div>
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
        </div>
        <Footer />
    </div>
</template>

<script>

export default {
    name: 'Sidebar',
    data() {
        return {
            regions: [
                'Западно-Казахстанская область',
                'Атырауская область',
                'Актюбинская область',
                'Мангистауская область'
            ]
        }
    }
};
</script>