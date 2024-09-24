<template>
    <div>
        <l-map :zoom="zoom" :center="center" style="height: 500px; width: 100%">
            <l-tile-layer :url="url" />

            <!-- Маркер на озере Балхаш -->
            <l-marker :lat-lng="[46.1604, 74.4849]">
                <l-popup>
                    <div>
                        <h4>Озеро Балхаш</h4>
                        <p>Одно из крупнейших озер Казахстана</p>
                    </div>
                </l-popup>
            </l-marker>

            <!-- Полигон для границы озера Балхаш -->
            <l-polygon
                :lat-lngs="balhashBoundary"
                :color="'red'"
                :weight="2"
                :fill-opacity="0.2" />
        </l-map>
    </div>
</template>

<script>
import { LMap, LTileLayer, LMarker, LPopup, LPolygon } from 'vue2-leaflet';
import 'leaflet/dist/leaflet.css';

export default {
    name: 'MapComponent',
    components: {
        LMap,
        LTileLayer,
        LMarker,
        LPopup,
        LPolygon,
    },
    data() {
        return {
            zoom: 7, // Уровень масштабирования
            center: [46.1604, 74.4849], // Центр карты (озеро Балхаш)
            url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            // Координаты границы озера Балхаш (примерные)
            balhashBoundary: [
                [46.1604, 74.4849],
                [46.20, 74.50],
                [46.18, 74.40],
                [46.15, 74.45],
                [46.1604, 74.4849]
            ]
        };
    }
};
</script>

<style scoped>
/* Добавь стили для карты, если нужно */
</style>

