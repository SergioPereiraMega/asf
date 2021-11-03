require("./bootstrap");

/*
    Carousel
*/
$("#carousel-example").on("slide.bs.carousel", function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
            // append slides to end
            if (e.direction == "left") {
                $(".carousel-item").eq(i).appendTo(".carousel-inner");
            } else {
                $(".carousel-item").eq(0).appendTo(".carousel-inner");
            }
        }
    }
});

$(".carousel").carousel({
    interval: 2000,
});

// Open Layer Map

var attribution = new ol.control.Attribution({
    collapsible: false,
});

var map = new ol.Map({
    controls: ol.control.defaults({ attribution: false }).extend([attribution]),
    target: "map",
    layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM(),
        }),
    ],
    view: new ol.View({
        center: ol.proj.fromLonLat([-56.030002, -34.859396]),
        zoom: 15,
    }),
});

var layer = new ol.layer.Vector({
    source: new ol.source.Vector({
        features: [
            new ol.Feature({
                geometry: new ol.geom.Point(
                    ol.proj.fromLonLat([-56.030002, -34.859396])
                ),
            }),
        ],
    }),
});

map.addLayer(layer);

// Se agrega el pop up en el waypoint openmaps

var container = document.getElementById("popup");
var content = document.getElementById("popup-content");
var closer = document.getElementById("popup-closer");

var overlay = new ol.Overlay({
    element: container,
    autoPan: true,
    autoPanAnimation: {
        duration: 250,
    },
});
map.addOverlay(overlay);

closer.onclick = function () {
    overlay.setPosition(undefined);
    closer.blur();
    return false;
};

map.on("singleclick", function (event) {
    if (map.hasFeatureAtPixel(event.pixel) === true) {
        var coordinate = event.coordinate;

        content.innerHTML = "<b>Agronegocios San Francisco</b><br/>";
        overlay.setPosition(coordinate);
    } else {
        overlay.setPosition(undefined);
        closer.blur();
    }
});

content.innerHTML = "<b>Agronegocios San Francisco</b><br/>";
overlay.setPosition(ol.proj.fromLonLat([-56.030002, -34.859396]));
