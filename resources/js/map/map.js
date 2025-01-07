import "ol/ol.css";
import Map from "ol/Map";
import View from "ol/View";
import { BASEMAP_LAYER } from "./basemap.js";
import { DEFAULT_CONTROLS } from "./basecontrol";
import { defaults as defaultControls } from "ol/control";
import { ADMINISTRATIVE_LAYER, ADMINISTRATIVE_INFOBOX } from "./baselayer";
// import { TILE_LAYER, TILE_LAYER_INFOBOX } from "./tilelayer.js";

/** End of extended functionalities **/

const VIEW = new View({
    projection: 'EPSG:4326',
    center: [106.372, 10.243],
    minZoom: 7,
    maxZoom: 20,
    zoom: 9
});

const borderSource = ADMINISTRATIVE_LAYER.border.getSource();
borderSource.on("addfeature", function () {
    VIEW.fit(borderSource.getExtent());
});

const map = new Map({
    controls: defaultControls({
        zoom: false,
    }),
    layers: [
        BASEMAP_LAYER,
        ADMINISTRATIVE_LAYER.border,

        ADMINISTRATIVE_LAYER.districts,
        ADMINISTRATIVE_LAYER.communes,

        ADMINISTRATIVE_LAYER.patents,
        ADMINISTRATIVE_LAYER.trademarks,
        ADMINISTRATIVE_LAYER.industrial_designs,
        // ADMINISTRATIVE_LAYER.science_innovations,
    ],
    target: "map",
    view: VIEW,
});

/**  Measurementsm, Zoom, Reset **/
DEFAULT_CONTROLS(
    map,
    borderSource /* borderSource is use to get the extent for the reset function */
);

/** Enable info for administrative map **/
// TILE_LAYER_INFOBOX(map);
ADMINISTRATIVE_INFOBOX(map);
