import "ol/ol.css";
import GeoJSON from "ol/format/GeoJSON.js";
import VectorSource from "ol/source/Vector";
import { Style, Fill, Text, Stroke, Icon } from "ol/style";
import {
    VectorImage as VectorImageLayer,
    Vector as VectorLayer,
} from "ol/layer";
// import { TILE_LAYER } from "./tilelayer.js";

const APP_URL = document.querySelector('meta[name="app-url"]').content;

const API_URL = {
    districts: APP_URL + "/map/districts.geojson",
    communes: APP_URL + "/map/communes.geojson",
    vung_trongs: APP_URL + "/map/vung_trongs.geojson",
};

const LAYER_STYLE = {
    districts: function (feature) {
        return new Style({
            stroke: new Stroke({
                color: "#e79a3d",
                width: 2,
                lineDash: [2, 4],
            }),
            fill: new Fill({ color: feature.get("color") }),

            text: new Text({
                text: feature.get("name"),
                font: "bold 14px Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif",
                fill: new Fill({ color: "#000" }),
                stroke: new Stroke({
                    color: "#fff",
                    width: 3,
                }),
            }),
        });
    },
    communes: function (feature) {
        return new Style({
            stroke: new Stroke({
                color: "#00000024",
                width: 1,
            }),
            fill: new Fill({ color: "rgba(0,0,0,0)" }),
            text: new Text({
                text: feature.get("commune"),
                fill: new Fill({ color: "#000" }),
                stroke: new Stroke({
                    color: "#eee",
                    width: 2,
                }),
            }),
        });
    },

    vung_trongs: function (feature) {
        return new Style({
            stroke: new Stroke({
                color: "#00000024",
                width: 1,
            }),
            fill: new Fill({
                color: 'rgba(255, 255, 0, 0.5)' // Màu vàng với độ trong suốt 50%
              }),
            text: new Text({
                text: feature.get("commune"),
                fill: new Fill({ color: "#000" }),
                stroke: new Stroke({
                    color: "#eee",
                    width: 2,
                }),
            }),
        });
    },
};

// this is only for small data ok
const LAYER_SOURCE = {
    districts: new VectorSource({
        format: new GeoJSON(),
        url: API_URL.districts,
    }),
    communes: new VectorSource({
        format: new GeoJSON(),
        url: API_URL.communes,
    }),

    vung_trongs: new VectorSource({
        url: API_URL.vung_trongs,
        format: new GeoJSON(),
    }),
};

export const ADMINISTRATIVE_LAYER = {
    communes: new VectorImageLayer({
        visible: true,
        title: "communes",
        source: LAYER_SOURCE.communes,
        style: LAYER_STYLE.communes,
    }),

    districts: new VectorImageLayer({
        visible: true,
        title: "districts",
        source: LAYER_SOURCE.districts,
        style: LAYER_STYLE.districts,
    }),

    vung_trongs: new VectorLayer({
        visible: true,
        title: "vung_trongs",
        source: LAYER_SOURCE.vung_trongs,
        style: LAYER_STYLE.vung_trongs,
        declutter: true,
    }),
};

export const ADMINISTRATIVE_UI = {
    communes: document.getElementById("communes-checkbox"),
    districts: document.getElementById("districts-checkbox"),

    vung_trongs: document.getElementById("vung_trongs-checkbox"),
};

ADMINISTRATIVE_UI.communes.addEventListener("click", function () {
    ADMINISTRATIVE_LAYER.communes.setVisible(this.checked);
});

ADMINISTRATIVE_UI.districts.addEventListener("click", function () {
    ADMINISTRATIVE_LAYER.districts.setVisible(this.checked);
});

ADMINISTRATIVE_UI.vung_trongs.addEventListener("click", function () {
    ADMINISTRATIVE_LAYER.vung_trongs.setVisible(this.checked);
});

export function ADMINISTRATIVE_INFOBOX(map) {
    map.on("singleclick", function (event) {
        console.log('Map clicked', event);
        const features = map.getFeaturesAtPixel(event.pixel);
        console.log('Features at pixel:', features);
        if (features.length === 0) return;

        let prop = features[0].getProperties();

        if (prop.layer === "districts") {
            Livewire.dispatchTo(
                "website.map.info.districts",
                "getDistrictInfo",
                {
                    id: prop.id,
                }
            );
        }
        if (prop.layer === "communes") {
            Livewire.dispatchTo("website.map.info.communes", "getCommuneInfo", {
                id: prop.id,
            });
        }

        if (prop.layer === "vung_trongs") {
            Livewire.dispatchTo("website.map.info.vung_trongs", "getVungtrongInfo", {
                id: prop.id,
            });
        }
    });
}
