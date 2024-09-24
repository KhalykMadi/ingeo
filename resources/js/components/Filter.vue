<template>
    <div class="filter-page">
        <div class="filter-name">
            <i class="icon icon-filter"></i>
            <p class="text-base text-bold">Фильтр</p>
        </div>
        <AccordionOpen title="Область">
            <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="region-1" name="region-1" value="region-1">
                <label for="region-1">Западно-Казахстанская область</label>
            </div>

            <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="region-2" name="region-2" value="region-2">
                <label for="region-2">Атырауская область</label>
            </div>

            <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="region-3" name="region-3" value="region-3">
                <label for="region-3">Актюбинская область</label>
            </div>

            <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="region-4" name="region-4" value="region-4">
                <label for="region-4">Мангистауская область</label>
            </div>
        </AccordionOpen>
        <AccordionOpen title="Водные объекты">
            <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="water-object-1" name="water-object-1" value="water-object-1">
                <label for="water-object-1">Река</label>
            </div>

            <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="water-object-2" name="water-object-2" value="water-object-2">
                <label for="water-object-2">Озеро</label>
            </div>
        </AccordionOpen>
        <AccordionOpen title="Гидротехническое сооружение">
            <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="hydro-1" name="hydro-1" value="hydro-1">
                <label for="hydro-1">Водохранилища</label>
            </div>
            <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="hydro-2" name="hydro-2" value="hydro-2">
                <label for="hydro-2">Насосные станции</label>
            </div>
            <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="hydro-3" name="hydro-3" value="hydro-3">
                <label for="hydro-3">Каналы</label>
            </div>
            <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="hydro-4" name="hydro-4" value="hydro-4">
                <label for="hydro-4">Пруды</label>
            </div>
        </AccordionOpen>
        <AccordionOpen title="Мониторинговые станции">
            <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="monitoring-1" name="monitoring-1" value="monitoring-1">
                <label for="monitoring-1">Гидропосты</label>
            </div>

            <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="monitoring-2" name="monitoring-2" value="monitoring-2">
                <label for="monitoring-2">Метеорологические станции</label>
            </div>
        </AccordionOpen>
        <button class="button button-primary">Применить</button>
    </div>
</template>

<script>


</script>

<style>

</style>