let ymap = null;
let placemarkCollection = null;

export function initYmap() {
    const container = document.getElementById('ymap');
    if (!container || ymap) return;

    ymap = new ymaps.Map('ymap', {
        center: [55.755863, 37.617700],
        zoom: 11,
        controls: ['fullscreenControl']
    });

    ymap.controls.add('zoomControl', {
        position: { right: '30px', top: '100px' }
    });

    ymap.behaviors.disable('multiTouch');
    ymap.behaviors.disable('scrollZoom');

    placemarkCollection = new ymaps.GeoObjectCollection();
    ymap.geoObjects.add(placemarkCollection);
}

export function redrawMap({ center, markers, zoom = 11 }) {
    if (!ymap || !placemarkCollection) return;

    placemarkCollection.removeAll();

    if (center) {
        ymap.setCenter(center, zoom, { duration: 300 });
    }

    markers.forEach(coords => {
        const placemark = new ymaps.Placemark(coords, {}, {
            preset: 'islands#redDotIcon'
        });
        placemarkCollection.add(placemark);
    });
}
