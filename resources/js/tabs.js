let tabsWraps = document.querySelectorAll('._tab_wrap');

if (tabsWraps.length) {

    for (let i = 0; i < tabsWraps.length; ++i) {

        tabsWraps[i].addEventListener('click', event => {

            let target = event.target;

            if (tabsWraps[i].classList.contains('_geografi')) {

                let map = document.getElementById('ymap');


                if (target.classList.contains('_tab')) {
                    let activeTab = tabsWraps[i].querySelector('._tab.active');

                    if (activeTab.classList.contains('_russia')) {
                        map.classList.add('hide');
                    }

                    if (target.classList.contains('_russia')) {
                        map.classList.add('hide');
                    } else {
                        map.classList.remove('hide');
                    }
                }

                if (target.classList.contains('_tab') && target.dataset.center) {
                    const center = JSON.parse(target.dataset.center);
                    const markers = JSON.parse(target.dataset.markers);

                    window.redrawMap({
                        center,
                        markers,
                        zoom: 14
                    });
                }
            }

            if (target.classList.contains('_tab')) {

                let tabActive = tabsWraps[i].querySelector('._tab.active');

                if (tabActive) {
                    tabActive.classList.remove('active');
                }

                target.classList.add('active');

                let dataTabIndex = target.getAttribute('data-tab');

                let tabContents = tabsWraps[i].querySelectorAll('.tab-content');

                for (let k = 0; k < tabContents.length; k++) {
                    tabContents[k].classList.remove('show');
                }

                let currentTabContent = tabsWraps[i].querySelector(`.tab-content[data-content-tab="${dataTabIndex}"]`);

                currentTabContent.classList.add('show');
            }
        })
    }
}
