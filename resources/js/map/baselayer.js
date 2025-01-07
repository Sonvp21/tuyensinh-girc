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
    border: APP_URL + "/map/borders.geojson",
    communes: APP_URL + "/map/communes.geojson",
    districts: APP_URL + "/map/districts.geojson",
    patents: APP_URL + "/map/patents.geojson",
    trademarks: APP_URL + "/map/trademarks.geojson",
    industrial_designs: APP_URL + "/map/industrial_designs.geojson",
    // science_innovations: APP_URL + "/map/science_innovations.geojson",
};

const LAYER_STYLE = {
    border: new Style({
        stroke: new Stroke({
            color: "#FF00C5",
            width: 8,
        }),
    }),
    districts: function (feature) {
        return new Style({
            stroke: new Stroke({
                color: "#00000024",
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

    patents: new Style({
        image: new Icon({
            anchor: [0.5, 0.96],
            crossOrigin: "anonymous",
            src: `${APP_URL}/homepage/patent.png`,
            scale: 0.07,
        }),
    }),
    trademarks: new Style({
        image: new Icon({
            anchor: [0.5, 0.96],
            crossOrigin: "anonymous",
            src: `${APP_URL}/homepage/trademark.png`,
            scale: 0.07,
        }),
    }),
    industrial_designs: new Style({
        image: new Icon({
            anchor: [0.5, 0.96],
            crossOrigin: "anonymous",
            src: `${APP_URL}/homepage/industrial_design.png`,
            scale: 0.07,
        }),
    }),
    // science_innovations: new Style({
    //     image: new Icon({
    //         anchor: [0.5, 0.96],
    //         crossOrigin: "anonymous",
    //         src: `${APP_URL}/homepage/science_innovation.png`,
    //         scale: 0.07,
    //     }),
    // }),
};

// this is only for small data ok
const LAYER_SOURCE = {
    border: new VectorSource({
        url: API_URL.border,
        format: new GeoJSON(),
    }),
    districts: new VectorSource({
        format: new GeoJSON(),
        url: API_URL.districts,
    }),
    communes: new VectorSource({
        format: new GeoJSON(),
        url: API_URL.communes,
    }),

    patents: new VectorSource({
        url: API_URL.patents,
        format: new GeoJSON(),
    }),

    trademarks: new VectorSource({
        url: API_URL.trademarks,
        format: new GeoJSON(),
    }),

    industrial_designs: new VectorSource({
        url: API_URL.industrial_designs,
        format: new GeoJSON(),
    }),

    // science_innovations: new VectorSource({
    //     url: API_URL.science_innovations,
    //     format: new GeoJSON(),
    // }),
};

export const ADMINISTRATIVE_LAYER = {
    border: new VectorLayer({
        visible: true,
        title: "borders",
        source: LAYER_SOURCE.border,
        style: LAYER_STYLE.border,
    }),

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

    patents: new VectorLayer({
        visible: true,
        title: "patents",
        source: LAYER_SOURCE.patents,
        style: LAYER_STYLE.patents,
        declutter: true,
    }),

    trademarks: new VectorLayer({
        visible: true,
        title: "trademarks",
        source: LAYER_SOURCE.trademarks,
        style: LAYER_STYLE.trademarks,
        declutter: true,
    }),

    industrial_designs: new VectorLayer({
        visible: true,
        title: "industrial_designs",
        source: LAYER_SOURCE.industrial_designs,
        style: LAYER_STYLE.industrial_designs,
        declutter: true,
    }),

    // science_innovations: new VectorLayer({
    //     visible: true,
    //     title: "science_innovations",
    //     source: LAYER_SOURCE.science_innovations,
    //     style: LAYER_STYLE.science_innovations,
    //     declutter: true,
    // }),
};

export const ADMINISTRATIVE_UI = {
    border: document.getElementById("border-checkbox"),
    communes: document.getElementById("communes-checkbox"),
    districts: document.getElementById("districts-checkbox"),

    patents: document.getElementById("patents-checkbox"),
    trademarks: document.getElementById("trademarks-checkbox"),
    industrial_designs: document.getElementById("industrial_designs-checkbox"),
    // science_innovations: document.getElementById("science_innovations-checkbox"),
};

ADMINISTRATIVE_UI.border.addEventListener("click", function () {
    ADMINISTRATIVE_LAYER.border.setVisible(this.checked);
});

ADMINISTRATIVE_UI.communes.addEventListener("click", function () {
    ADMINISTRATIVE_LAYER.communes.setVisible(this.checked);
});

ADMINISTRATIVE_UI.districts.addEventListener("click", function () {
    ADMINISTRATIVE_LAYER.districts.setVisible(this.checked);
});

ADMINISTRATIVE_UI.patents.addEventListener("click", function () {
    ADMINISTRATIVE_LAYER.patents.setVisible(this.checked);
});

ADMINISTRATIVE_UI.trademarks.addEventListener("click", function () {
    ADMINISTRATIVE_LAYER.trademarks.setVisible(this.checked);
});

ADMINISTRATIVE_UI.industrial_designs.addEventListener("click", function () {
    ADMINISTRATIVE_LAYER.industrial_designs.setVisible(this.checked);
});

// ADMINISTRATIVE_UI.science_innovations.addEventListener("click", function () {
//     ADMINISTRATIVE_LAYER.science_innovations.setVisible(this.checked);
// });

document.addEventListener("DOMContentLoaded", function () {
    const districtSelect = document.getElementById("districtSelect");
    const communeSelect = document.getElementById("communeSelect");
    const communeSelectLabel = document.getElementById("communeSelectLabel");

    // Đặt giá trị mặc định cho districtSelect và gọi hàm xử lý sự kiện change
    if (districtSelect) {
        districtSelect.value = "0"; // Hoặc giá trị huyện mặc định
        handleDistrictChange(); // Gọi trực tiếp hàm xử lý sự kiện change
    }

    // Ẩn danh sách xã và label khi trang được tải
    communeSelect.style.display = "none";
    communeSelect.innerHTML = '<option value="0">Tất cả</option>'; // Thêm tùy chọn 'Tất cả'
    if (communeSelectLabel) {
        communeSelectLabel.style.display = "none";
    }

    // Xử lý khi chọn huyện
    districtSelect.addEventListener("change", function () {
        handleDistrictChange();
    });

    function handleDistrictChange() {
        const districtId = districtSelect.value;

        // Gọi API để lấy danh sách xã theo huyện
        if (districtId) {
            fetch(`${APP_URL}/communes/${districtId}`)
                .then((response) => response.json())
                .then((communes) => {
                    // Xóa các tùy chọn cũ của xã
                    communeSelect.innerHTML =
                        '<option value="0">Tất cả</option>';

                    // Thêm tùy chọn mới vào communeSelect
                    communes.forEach((commune) => {
                        const option = document.createElement("option");
                        option.value = commune.id;
                        option.textContent = commune.name;
                        communeSelect.appendChild(option);
                    });

                    // Hiển thị danh sách xã nếu có dữ liệu
                    if (communeSelect.options.length > 1) {
                        // Nếu có nhiều hơn tùy chọn 'Tất cả'
                        communeSelect.style.display = "";
                        if (communeSelectLabel) {
                            communeSelectLabel.style.display = "";
                        }
                    } else {
                        // Nếu không có xã, ẩn danh sách xã và label
                        communeSelect.style.display = "none";
                        if (communeSelectLabel) {
                            communeSelectLabel.style.display = "none";
                        }
                    }

                    // Kích hoạt sự kiện change của communeSelect nếu có dữ liệu
                    if (communeSelect.options.length > 1) {
                        communeSelect.dispatchEvent(new Event("change"));
                    }
                })
                .catch((error) => {
                    console.error("Error fetching communes:", error);
                });
        } else {
            // Nếu không có huyện nào được chọn, xóa danh sách xã và ẩn nó
            communeSelect.innerHTML = '<option value="0">Tất cả</option>';
            communeSelect.style.display = "none";
            if (communeSelectLabel) {
                communeSelectLabel.style.display = "none";
            }
        }

        // Cập nhật layer với dữ liệu dựa trên huyện ID
        updateLayerData(districtId, null);
    }

    // Xử lý khi chọn xã (nếu cần lọc theo xã)
    communeSelect.addEventListener("change", function () {
        const communeId = this.value;
        const districtId = districtSelect.value;
        updateLayerData(districtId, communeId);
    });

    function updateLayerData(districtId, communeId) {
        // Cập nhật dữ liệu bằng sáng chế
        const patentsUrl = districtId
            ? `${APP_URL}/map/patents.geojson?district_id=${districtId}${communeId ? `&commune_id=${communeId}` : ""
            }`
            : `${APP_URL}/map/patents.geojson`;

        fetch(patentsUrl)
            .then((response) => response.json())
            .then((data) => {
                try {
                    if (Array.isArray(data)) {
                        data = {
                            type: "FeatureCollection",
                            features: data,
                        };
                    }
                    if (typeof data.features === "string") {
                        try {
                            data.features = JSON.parse(data.features);
                        } catch (error) {
                            console.error(
                                "Failed to parse features JSON string:",
                                error
                            );
                            throw new Error(
                                "Failed to parse features JSON string"
                            );
                        }
                    }
                    if (
                        data.type !== "FeatureCollection" ||
                        !Array.isArray(data.features)
                    ) {
                        console.error("Invalid GeoJSON structure:", data);
                        throw new Error("Invalid GeoJSON structure");
                    }
                    const filteredFeatures = data.features.filter((feature) => {
                        return (
                            feature.geometry &&
                            [
                                "Point",
                                "Polygon",
                                "LineString",
                                "MultiPoint",
                            ].includes(feature.geometry.type)
                        );
                    });
                    const patentsSource = new VectorSource({
                        features: new GeoJSON().readFeatures({
                            type: "FeatureCollection",
                            features: filteredFeatures,
                        }),
                    });
                    ADMINISTRATIVE_LAYER.patents.setSource(patentsSource);
                } catch (error) {
                    console.error("Error processing GeoJSON:", error);
                }
            })
            .catch((error) => console.error("Error fetching GeoJSON:", error));

        // Cập nhật dữ liệu nhãn hiệu
        const trademarksUrl = districtId
            ? `${APP_URL}/map/trademarks.geojson?district_id=${districtId}${communeId ? `&commune_id=${communeId}` : ""
            }`
            : `${APP_URL}/map/trademarks.geojson`;

        fetch(trademarksUrl)
            .then((response) => response.json())
            .then((data) => {
                try {
                    if (Array.isArray(data)) {
                        data = {
                            type: "FeatureCollection",
                            features: data,
                        };
                    }
                    if (typeof data.features === "string") {
                        try {
                            data.features = JSON.parse(data.features);
                        } catch (error) {
                            console.error(
                                "Failed to parse features JSON string:",
                                error
                            );
                            throw new Error(
                                "Failed to parse features JSON string"
                            );
                        }
                    }
                    if (
                        data.type !== "FeatureCollection" ||
                        !Array.isArray(data.features)
                    ) {
                        console.error("Invalid GeoJSON structure:", data);
                        throw new Error("Invalid GeoJSON structure");
                    }
                    const filteredFeatures = data.features.filter((feature) => {
                        return (
                            feature.geometry &&
                            [
                                "Point",
                                "Polygon",
                                "LineString",
                                "MultiPoint",
                            ].includes(feature.geometry.type)
                        );
                    });
                    const trademarksSource = new VectorSource({
                        features: new GeoJSON().readFeatures({
                            type: "FeatureCollection",
                            features: filteredFeatures,
                        }),
                    });
                    ADMINISTRATIVE_LAYER.trademarks.setSource(trademarksSource);
                } catch (error) {
                    console.error("Error processing GeoJSON:", error);
                }
            })
            .catch((error) => console.error("Error fetching GeoJSON:", error));

        // Cập nhật dữ liệu kiểu dáng công nghiệp
        const industrial_designsUrl = districtId
            ? `${APP_URL}/map/industrial_designs.geojson?district_id=${districtId}${communeId ? `&commune_id=${communeId}` : ""
            }`
            : `${APP_URL}/map/industrial_designs.geojson`;

        fetch(industrial_designsUrl)
            .then((response) => response.json())
            .then((data) => {
                try {
                    if (Array.isArray(data)) {
                        data = {
                            type: "FeatureCollection",
                            features: data,
                        };
                    }
                    if (typeof data.features === "string") {
                        try {
                            data.features = JSON.parse(data.features);
                        } catch (error) {
                            console.error(
                                "Failed to parse features JSON string:",
                                error
                            );
                            throw new Error(
                                "Failed to parse features JSON string"
                            );
                        }
                    }
                    if (
                        data.type !== "FeatureCollection" ||
                        !Array.isArray(data.features)
                    ) {
                        console.error("Invalid GeoJSON structure:", data);
                        throw new Error("Invalid GeoJSON structure");
                    }
                    const filteredFeatures = data.features.filter((feature) => {
                        return (
                            feature.geometry &&
                            [
                                "Point",
                                "Polygon",
                                "LineString",
                                "MultiPoint",
                            ].includes(feature.geometry.type)
                        );
                    });
                    const industrial_designsSource = new VectorSource({
                        features: new GeoJSON().readFeatures({
                            type: "FeatureCollection",
                            features: filteredFeatures,
                        }),
                    });
                    ADMINISTRATIVE_LAYER.industrial_designs.setSource(
                        industrial_designsSource
                    );
                } catch (error) {
                    console.error("Error processing GeoJSON:", error);
                }
            })
            .catch((error) => console.error("Error fetching GeoJSON:", error));

        // Cập nhật dữ liệu KHCN và Đổi mới ST
        // const science_innovationsUrl = districtId
        //     ? `${APP_URL}/map/science_innovations.geojson?district_id=${districtId}${communeId ? `&commune_id=${communeId}` : ""
        //     }`
        //     : `${APP_URL}/map/science_innovations.geojson`;

        // fetch(science_innovationsUrl)
        //     .then((response) => response.json())
        //     .then((data) => {
        //         try {
        //             if (Array.isArray(data)) {
        //                 data = {
        //                     type: "FeatureCollection",
        //                     features: data,
        //                 };
        //             }
        //             if (typeof data.features === "string") {
        //                 try {
        //                     data.features = JSON.parse(data.features);
        //                 } catch (error) {
        //                     console.error(
        //                         "Failed to parse features JSON string:",
        //                         error
        //                     );
        //                     throw new Error(
        //                         "Failed to parse features JSON string"
        //                     );
        //                 }
        //             }
        //             if (
        //                 data.type !== "FeatureCollection" ||
        //                 !Array.isArray(data.features)
        //             ) {
        //                 console.error("Invalid GeoJSON structure:", data);
        //                 throw new Error("Invalid GeoJSON structure");
        //             }
        //             const filteredFeatures = data.features.filter((feature) => {
        //                 return (
        //                     feature.geometry &&
        //                     [
        //                         "Point",
        //                         "Polygon",
        //                         "LineString",
        //                         "MultiPoint",
        //                     ].includes(feature.geometry.type)
        //                 );
        //             });
        //             const science_innovationsSource = new VectorSource({
        //                 features: new GeoJSON().readFeatures({
        //                     type: "FeatureCollection",
        //                     features: filteredFeatures,
        //                 }),
        //             });
        //             ADMINISTRATIVE_LAYER.science_innovations.setSource(
        //                 science_innovationsSource
        //             );
        //         } catch (error) {
        //             console.error("Error processing GeoJSON:", error);
        //         }
        //     })
        //     .catch((error) => console.error("Error fetching GeoJSON:", error));
    }
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

        if (prop.layer === "patents") {
            Livewire.dispatchTo("website.map.info.patents", "getPatentInfo", {
                id: prop.id,
            });
        }

        if (prop.layer === "trademarks") {
            Livewire.dispatchTo(
                "website.map.info.trademarks",
                "getTrademarkInfo",
                {
                    id: prop.id,
                }
            );
        }

        if (prop.layer === "industrial_designs") {
            Livewire.dispatchTo(
                "website.map.info.industrial-designs",
                "getIndustrialDesignInfo",
                {
                    id: prop.id,
                }
            );
        }

        // if (prop.layer === "science_innovations") {
        //     Livewire.dispatchTo(
        //         "website.map.info.science-innovations",
        //         "getScienceInnovationInfo",
        //         {
        //             id: prop.id,
        //         }
        //     );
        // }
    });
}
