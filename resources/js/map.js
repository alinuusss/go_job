let geo = document.querySelector('._geografi');

if (geo) {

    geo.addEventListener('click', event => {

        let target = event.target;

        let ymap = document.querySelector('#ymap');

        if (target.classList.contains('_coords')) {
            const center = JSON.parse(target.dataset.center);
            const markers = JSON.parse(target.dataset.markers);

            window.redrawMap({
                center,
                markers,
                zoom: 16
            });
        }
    })

    function redrawMap(ymap, placemarks) {
        ymap.geoObjects.removeAll();

        placemarks.forEach(coords => {
            const placemark = new ymaps.Placemark(coords, {}, {
                preset: 'islands#redDotIcon'
            });
            ymap.geoObjects.add(placemark);
        });
    }
}
